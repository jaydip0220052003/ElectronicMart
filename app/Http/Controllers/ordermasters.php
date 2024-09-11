<?php

namespace App\Http\Controllers;

use App\Models\OrderMaster;
use Illuminate\Http\Request;

class ordermasters extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oordermaster.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $odrin=new OrderMaster([
        'user_id'=>$request->get('user_id'),
        'order_date'=>$request->get('order_data'),
        'shipping_name'=>$request->get('shipping_name'),
        'shipping_address'=>$request->get('shipping_address'),
        'shipping_mobileno'=>$request->get('shipping_mobileno'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update=OrderMaster::where('id',$id)->first();
        $update->user_name=$request->get('user_id');
        $update->order_data=$request->get('order_date');
        $update->shipping_name->get('shipping_name');
        $update->shipping_address->get('shipping_address');
        $update->shipping_mobileno->get('shipping_mobileno');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
