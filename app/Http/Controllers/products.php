<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class products extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::all();
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img=$request->file('img');
        $filename=$img->getClientOriginalName();
        $img->move('upload',$filename);
        $pin=new Product([
            'p_name'=>$request->get('p_name'),
            'p_price'=>$request->get('p_price'),
            'p_detail'=>$request->get('p_detail'),
            'performance'=>$request->get('performance'),
            'display'=>$request->get('display'),
            'camera'=>$request->get('camera'),
            'battery'=>$request->get('battery'),
            'category_id'=>$request->get('category_id'),
            'img'=>$filename
        ]);
        $pin->save();
        return redirect('products')->with('success','Your Recored added');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $p_id)
    {
        $show=Product::where('p_id',$p_id)->first();
        return view('product.show',compact('show'));

        // return view('userside.home',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $p_id)
    {
        $edit=Product::where('p_id',$p_id)->first();
        return view('product.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $img=$request->file('img');
        $filename=$img->getClientOriginalName();
        $img->move('upload',$filename);
        $update=Product::where('id',$id)->first();
        $update->p_name=$request->get('p_name');
        $update->p_price=$request->get('p_price');
        $update->p_detail=$request->get('p_detail');
        $update->performance=$request->get('performance');
        $update->camera=$request->get('camera');
        $update->display=$request->get('display');
        $update->battery=$request->get('battery');
        $update->img=$filename;
        $update->save();
        return redirect('products')->with('success','Your Recored added');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=Product::find($id);
        $delete->delete();
        return redirect('products');
    }
    public function order()
    {
        return view();
    }
}
