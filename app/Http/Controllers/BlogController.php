<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index', [
            'blogs' => Blog::all()
        ]);

    }

    public function create()
    {
        return view('admin.blog.create');

    }

    public function store(Request $request)
    {
        return $request;
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);

        Address::create($request->all());
        return redirect(route('address.index'))->with(['message' => 'Address added Successfully']);

    }
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
