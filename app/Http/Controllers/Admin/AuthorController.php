<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('id','desc')->get();
        return view('admin.author.index',compact('authors'));
    }

    public function create()
    {
        $categories = Category::orderBy('id','desc')->where('status',1)->get();
        return view('admin.author.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|max:255|unique:authors,phone',
            'email' => 'required|max:255|unique:authors,email',
            'address' => 'required'
        ]);

        $author = new Author;
        $author->name = $request->name;
        $author->phone = $request->phone;
        $author->email = $request->email;
        $author->address = $request->address;
        $author->description = $request->description;
        $author->slug = str_slug($request->name);
        $author->status = $request->status;

         $author->save();

        return redirect()->route('admin.author.index')->with('message','Author Add successfully !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.author.edit',compact('author'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|max:255|unique:authors,phone,'.$id,
            'email' => 'required|max:255|unique:authors,email,'.$id,
            'address' => 'required',
            'phone' => 'required',
        ]);

        $author = Author::find($id);

        $author->name = $request->name;
        $author->phone = $request->phone;
        $author->email = $request->email;
        $author->address = $request->address;
        $author->description = $request->description;
        $author->slug = str_slug($request->name);
        $author->status = $request->status;

        $author->save();

        return redirect()->route('admin.author.index')->with('message','Author Update successfully !');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return back()->with('message', 'Author Deleted Successfully !');
    }
}
