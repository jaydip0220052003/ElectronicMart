<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class admins extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=admin::all();
        return view('admin.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inad=new admin([
           'name'=>$request->get('name'),
           'email'=>$request->get('email'),
           'password'=>$request->get('password')
        ]);
        $inad->save();
        return redirect('admins')->with('success','Record Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show=admin::where('id',$id)->first();
        return view('admin.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=admin::where('id',$id)->first();
        return view('admin.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update=admin::where('id',$id)->first();
        $update->name=$request->get('name');
        $update->email=$request->get('email');
        $update->password=$request->get('password');
        $update->save();
        return redirect('admins')->with('success','Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete=admin::find($id);
        $delete->delete();
        return redirect('admins');
    }
}
