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

    public function show($id)
    {
        return view('admin.blog.show', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function edit(Blog $blog)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $row = Blog::find($id);

        if ($request->hasFile('image')){

            unlink($row->image);

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'images/blog/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(870, 350)->save($imageUrl);

            $row->writer = Auth::user()->name;
            $row->title = $request->title;
            $row->description = $request->description;
            $row->image = $imageUrl;


        }else{

            $row->writer = Auth::user()->name;
            $row->title = $request->title;
            $row->description = $request->description;

        }

        $row->update();
        return redirect(route('blog.index'))->with(['message'=>' Blog updated Successfully']);


    }


    public function destroy($id)
    {
        $member = Blog::find($id);
        unlink($member->image);
        $member->delete();
        return redirect(route('blog.index'))->with(['message'=>' Blog DELETED Successfully']);

    }
}
