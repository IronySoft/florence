<?php

namespace App\Http\Controllers;

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Content $contenController
     * @return \Illuminate\Http\Response
     */
    public function show(Content $contenController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content $contenController
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $contenController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Content $contenController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $contenController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content $contenController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $contenController)
    {
        //
    }
}
