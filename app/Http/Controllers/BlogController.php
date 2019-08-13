<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $directory = 'images/blog/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(870, 350)->save($imageUrl);

        $row = new Blog();
        $row->writer = Auth::user()->name;
        $row->title = $request->title;
        $row->description = $request->description;
        $row->image = $imageUrl;
        $row->save();

        return redirect(route('blog.index'))->with(['message' => 'Blog added Successfully']);

    }

    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
