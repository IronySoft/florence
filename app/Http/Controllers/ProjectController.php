<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{

    public function index()
    {
        return view('admin.projects.index', ['projects' => Project::all()]);
    }

    public function create()
    {
        return view('admin.projects.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        //another way of image upload
        $image = $request->file('image');
        $imageName = time() .'_'.$image->getClientOriginalName();

        $large_image = $request->file('image');
        $large_imageName = time() . '_' . $large_image->getClientOriginalName();
        // $imageFileType=$productImage->getClientOriginalExtension();
        // $imageName=$request->product_name.'.'.$imageFileType;
        $directory = 'images/thumbs/';
        $large_directory = 'images/full/';

        $imageUrl = $directory . $imageName;
        $large_imageUrl = $large_directory . $large_imageName;

        Image::make($image)->resize(570, 400)->save($imageUrl);
        Image::make($image)->resize(900, 632)->save($large_imageUrl);


        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->large_image = $large_imageUrl;
        $project->image = $imageUrl;
        $project->save();
        return redirect(route('project.index'))->with(['message'=>'New Project added Successfully']);

    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
