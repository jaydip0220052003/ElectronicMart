<?php
namespace App\Http\Controllers;
use App\Models\OrderMaster;
use App\Models\Product;
use App\Models\Register;
use App\Models\tbl_cart;
use App\Models\tbl_categroy;
use App\Models\tbl_contact;
use App\Models\tbl_order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
class userside extends Controller
{
       public function register2(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'password' => 'required|min:6',
                // 'password' =>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',   
                'cpassword' => 'same:password',
                'address' => 'required',
                'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            ],
            [
                'name.required' => '* Name Is Required',
                'name.min' => 'Enter Minimum 3 Char Of Your Name',
                'email.required' => '* Email Is Required',
                'password.required' => '* Password Is Required',
                'password.min' => 'Password Min6 Is Too Short',
                'number.required' => '* Enter Your Moblie No',
                'number.min' => 'Number Is Required Max 10 Num',
                'address.required' => '* Address Is Required'
            ]
        );
        $user = Register::where('email', $request->input('email'))->first();
        if ($user && $user->email === $request->input('email')) {
            echo "<script>alert('This Email Is Already Used By User')</script>";
        } else {
            $cin = new Register([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),
                'address' => $request->get('address'),
                'mobile' => $request->get('number'),
            ]);
            $cin->save();
        }
        $categories = tbl_categroy::all();
        return view('userside.singin', compact('categories'));
    }
    public function singin()
    {
        $categories = tbl_categroy::all();
        return view('userside.singin', compact('categories'));
    }
    public function singin2(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = Register::where('email', $request->input('email'))->first();
        if ($user && $user->password === $request->input('password')) {
            Session::put('user_id', $user->user_id);
            Session::put('name',$user->name);
            Session::put('email', $user->email);
            return redirect('home')->with('success', 'Welcome');
        }
        elseif(!$user) 
        {
            return redirect()->back()->with('message', 'Email is invalid');
        }
        elseif ($user && $user->password!== $request->input('password')) 
        {
            return redirect()->back()->with('message', 'Password is invalid');
        }
        
        return redirect()->back()->with('message', 'Email or password wrong');
    }
    public function logout(Request $request)
    {
        Session::flush();
        return redirect('userside/singin');
    }
    public function plist(Request $request)
    {
        // $productrarry=Product::all();
        // $categories=tbl_categroy::all();
        $categories = tbl_categroy::all();
        $category_id = $request->input('category_id');
        if ($category_id) {
            $productrarry = Product::where('category_id', $category_id)->get();
        } else {
            $productrarry = Product::all();
        }
        return view('userside.home', compact('categories', 'productrarry'));
    }
    public function details($id)
    {
        $categories = tbl_categroy::all();
        $productarray = Product::where('p_id', $id)->first();
        if (!$productarray) {
            abort(404);
        }
        return view('userside.detail', compact('categories', 'productarray'));
    }
    public function register(Request $request)
    {
        $categories = tbl_categroy::all();
        return view('userside/register', compact('categories'));
    }
    public function cart(Request $request)
    {
        if(Session::has('user_id'))
        {
            $categories = tbl_categroy::all();
            $sid = Session::get('user_id');
            //$show = tbl_cart::where('user_id',$sid)->get();
            //$cartProducts = tbl_cart::where('user_id', $sid)->get(); // retrieve cart items from tbl_cart
            //$products = Product::whereIn('p_id', $cartProducts->pluck('p_id'))->get();
            $products = tbl_cart::where('user_id', $sid)->join('products', 'tbl_carts.p_id', '=', 'products.p_id')->select('tbl_carts.*', 'products.*')->get();
            return view('userside.cart', compact('categories', 'products'));

        }
        else{
            return redirect('userside/singin');

        }
    }
    public function addtocart(Request $request, $id)
    {
        if (Session::has('user_id')) {
            $cin = new tbl_cart([
                'p_id' => $request->get('p_id'),
                'qty' => $request->get('qty'),
                'user_id' => Session::get('user_id'),
            ]);
            $cin->save();
            $categories = tbl_categroy::all();
            return redirect('userside/cart')->with('success', 'Your Item Added In Cart');
            // $show = tbl_cart::all();
            // return view('userside.cart', compact('show','categories'))->with('success', 'Your Item Added In Cart');
        } else {
            return redirect('singin')->with('error', 'Please login to add items to cart');
        }
    }
    public function updatecart(Request $request, $cart_id)
    {
        if(Session::has('user_id'))
        {
            $qty = $request->input('qty');
            tbl_cart::where('cart_id', $cart_id)->update(['qty' => $qty]);
            return back()->with('success', 'Product Update successfully');
        }
        else{
            return redirect('userside/singin');
        }
    }
    public function deletecart($cart_id)
    {
        if(Session::has('user_id'))
        {
            $delete = tbl_cart::where('cart_id', $cart_id)->delete();
            return back()->with('success', 'Product Remove successfully');
        }
        else{
            return redirect('userside/singin');
        }
    }
    public function checkout()
    {
        $categories = tbl_categroy::all();
        $sid = Session::get('user_id');
        //$show = tbl_cart::where('user_id',$sid)->get();
        $products = tbl_cart::where('user_id', $sid)->join('products', 'tbl_carts.p_id', '=', 'products.p_id')->select('tbl_carts.*', 'products.*')->get();
        return view('userside.checkout', compact('categories', 'products'));
    }
    public function checkout2(Request $request)
    {

        if (Session::has('user_id')) {
            $sid = Session::get('user_id');
            $order_status = 'confirm';
            $ldate = date('Y-m-d H:i:s');
            $price = '100';
            $cin = new OrderMaster([
                'user_id' => $sid,
                'order_date' => $ldate,
                'order_status' => $order_status,
                'shipping_name' => $request->get('name'),
                'shipping_address' => $request->get('address'),
                'shipping_mobileno' => $request->get('number'),
                'payment_mode' => $request->get('paymentoption'),
                'city' => $request->get('city'),
                'p_price' => $price,
            ]);
            $cin->save();
            $order_master_id = $cin->id;
            $cart_items = tbl_cart::where('user_id', $sid)->get();
            $products = tbl_cart::where('user_id', $sid)->join('products', 'tbl_carts.p_id', '=', 'products.p_id')->select('tbl_carts.*', 'products.*')->get();
            $p2 = '100';
            foreach ($cart_items as $item) {
                $order_detail = new tbl_order_details([
                    'user_id' => $sid,
                    'ordermaster_id' => $order_master_id,
                    'p_id' => $item->p_id,
                    'p_price' => $p2,
                ]);
                $order_detail->save();
            }
            // Remove items from cart
            tbl_cart::where('user_id', $sid)->delete();
            $categories = tbl_categroy::all();
            return redirect('userside/thankyou')->with('success', 'Oreder Has Placed');
        }
    }
    public function thankyou(Request $request)
    {
        $categories = tbl_categroy::all();
        return view('userside/thankyou', compact('categories'));
    }
    public function contact(Request $request)
    {
        $categories = tbl_categroy::all();
        return view('userside/contact', compact('categories'));
    }
    public function contact2(Request $request)
    {
        $mid = new tbl_contact(
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'weburl' => $request->get('weburl'),
                'message' => $request->get('message'),
            ]
        );
        $mid->save();
        return back()->with('success', 'Message Send Successfully');
    }
    public function order(Request $request)
    {

        $categories = tbl_categroy::all();
        $sid = Session::get('user_id');
        $products = OrderMaster::where('user_id', $sid)->select('order_masters.*')->get();
        // $productarray = tbl_order_details::where('p_id',$sid)->first();
        $productarray = tbl_order_details::where('user_id',$sid)->join('products','tbl_order_details.p_id','=','products.p_id')->select('tbl_order_details.*','products.*')->get();
        return view('userside/order', compact('categories','products','productarray'));
    }
    public function changepass(Request $request)
    {
        $categories = tbl_categroy::all();
        return view('userside/changepass', compact('categories'));
    }

    public function changepass2(Request $request) 
    {
        $request->validate(
            [
                'newpassword' => 'required|min:6',
                'confirmpassword' => 'same:newpassword',
            ],
            [
                'newpassword.required' => '* Password Is Required',
                'newpassword.min' => 'Password Is Too Short Min 6',
            ]
        );
        $sid=Session::get('user_id');
        $old_password = $request->input('oldpassword');
        $user = Register::where('user_id',$sid)->first();
        if ($old_password!= $user->password) 
        {
            return redirect()->back()->with('message', 'Old password is incorrect');
        }
        else
        {
            $productdata=Register::where('user_id',$sid)->first();
            $productdata-> password = $request->get('newpassword');
            $productdata->save();
        }
        return redirect('userside/singin')->with('success', 'Password changed successfully');
    }
    
    public function forgotpassword()
    {
        $categories = tbl_categroy::all();
        return view('userside/forgotpassword', compact('categories'));
    }
    public function forgotpasswordp2(Request $request)
    {
        $email = $request->input('email');
        $user = Register::where('email', $email)->first();
        if (!$user) 
        {
            return redirect()->back()->with('message', 'Email is incorrect');
        }
        else
        {        
            if ($user && $user->password) 
            {
                Session::put('password', $user->password);
            }
            $password=Session::get('password');
            $subject="Your Password ";
            $to = $request->input('email');
            $data = ['to' => $to,'subject'=>$subject,'password'=>$password];
            Mail::send('email-template', $data, function ($message) use ($to,$subject) 
            {
                $message->from('jaydipsolanki0220052003@gmail.com')->subject($subject);
                $message->to($to);
            });
            // echo"<script>alert('Mail Send');</script> 
            return redirect('userside/singin')->with('success', 'password is send to your email');
        }    
        }
}

