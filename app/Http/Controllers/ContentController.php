<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Content;
use App\Course;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view('admin.content.index', [
            'contents' => Content::with('course')->get()
        ]);

    }

    public function create()
    {
        return view('admin.content.create', ['courses' => Course::all()]);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'course_id' => 'required',
        ]);
        Content::create($request->all());
        return redirect(route('content.index'))->with(['message' => 'New Course content added Successfully']);

    }


    public function show(Content $content)
    {
        return view('admin.content.show', [
            'courses' => Course::all(),
            'content' => Content::findOrFail($content->id),

        ]);
    }


    public function edit(Content $content)
    {
        //
    }


    public function update(Request $request, Content $content)
    {
        $row = Content::find($content->id);

        $row->name= $request->name;
        $row->course_id= $request->course_id;
        $row->update();
        return redirect(route('content.index'))->with(['message' => 'Course content UPDATED Successfully']);
    }


    public function destroy(Content $content)
    {
        Content::destroy($content->id);
        return redirect(route('content.index'))->with(['message' => 'Course content DELETED Successfully']);
    }
}
