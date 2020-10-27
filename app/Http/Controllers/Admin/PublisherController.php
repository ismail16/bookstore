<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::orderBy('id','desc')->get();
        return view('admin.publisher.index',compact('publishers'));
    }

    public function create()
    {
        return view('admin.publisher.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'proprietor_name' => 'required',
            'phone' => 'required|unique:publishers|max:255',
            'email' => 'required|unique:publishers|max:255',
            'address' => 'required'
        ]);


        $publisher = new Publisher;

        $publisher->name = $request->name;
        $publisher->description = $request->description;
        $publisher->proprietor_name = $request->proprietor_name;
        $publisher->phone = $request->phone;
        $publisher->email = $request->email;
        $publisher->address = $request->address;
        $publisher->slug = str_slug($request->name);
        $publisher->status = $request->status;

        $publisher->save();

        return redirect()->route('admin.publisher.index')->with('message','publisher Add successfully !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publisher.edit',compact('publisher'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'proprietor_name' => 'required',
            'phone' => 'required|max:255|unique:publishers,phone,'.$id,
            'email' => 'required|max:255|unique:publishers,email,'.$id,
            'address' => 'required'
        ]);

        $publisher = Publisher::find($id);
        $publisher->name = $request->name;
        $publisher->description = $request->description;
        $publisher->proprietor_name = $request->proprietor_name;
        $publisher->phone = $request->phone;
        $publisher->email = $request->email;
        $publisher->address = $request->address;
        $publisher->slug = str_slug($request->name);
        $publisher->status = $request->status;
        $publisher->save();

        return redirect()->route('admin.publisher.index')->with('message','publisher Update successfully !');
    }

    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        $publisher->delete();
        return back()->with('message', 'Publisher Deleted Successfully !');
    }
}
