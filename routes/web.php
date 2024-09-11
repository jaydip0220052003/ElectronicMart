<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//  Route::get('product/show', function () {
//      return view('product/show');
//  });
Route::resource('admins','App\Http\Controllers\admins');
Route::resource('students','App\Http\Controllers\students');
Route::resource('products','App\Http\Controllers\products');
Route::resource('carts','App\Http\Controllers\carts');

Route::get('home','App\Http\Controllers\userside@plist')->name('home');

Route::post('singinp','App\Http\Controllers\userside@singin2');
Route::get('userside/singin','App\Http\Controllers\userside@singin')->name('singin');
Route::get('userside/register','App\Http\Controllers\userside@register')->name('register');
Route::post('registerp','App\Http\Controllers\userside@register2');
Route::get('/logout', 'App\Http\Controllers\userside@logout')->name('logout');

Route::get('detail/{id}','App\Http\Controllers\userside@details')->name('detail');

Route::post('cartproccess/{id}','App\Http\Controllers\userside@addtocart');
Route::get('userside/cart','App\Http\Controllers\userside@cart')->name('cart');
Route::post('update_cart/{cart_id}','App\Http\Controllers\userside@updatecart')->name('updatecart');
Route::delete('delete_cart/{cart_id}','App\Http\Controllers\userside@deletecart')->name('delete_cart');

Route::get('userside/checkout','App\Http\Controllers\userside@checkout')->name('checkout');
Route::post('checkoutp','App\Http\Controllers\userside@checkout2');
Route::get('userside/thankyou','App\Http\Controllers\userside@thankyou')->name('thankyou');

Route::get('userside/contact','App\Http\Controllers\userside@contact')->name('contact');
Route::post('contactp','App\Http\Controllers\userside@contact2');

Route::get('userside/order','App\Http\Controllers\userside@order')->name('order');

Route::get('userside/changepass','App\Http\Controllers\userside@changepass')->name('changepass');
Route::post('changepassp','App\Http\Controllers\userside@changepass2');

Route::get('userside/forgotpassword','App\Http\Controllers\userside@forgotpassword')->name('forgotpassword');
Route::post('forgotpasswordp','App\Http\Controllers\userside@forgotpasswordp2');

