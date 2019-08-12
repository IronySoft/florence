<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\FlorenceTeam;
use Illuminate\Http\Request;
use Image;
class AboutUsController extends Controller
{
    public function index()
    {
        return view('admin.about-us.index', ['abouts' => AboutUs::all()]);
    }

    public function create()
    {
        return view('admin.about-us.create');
    }

    public function florenceIndex()
    {
        return view('admin.florence-team.index', ['florenceTeams' => FlorenceTeam::all()]);
    }

    public function florenceCreate()
    {
        return view('admin.florence-team.create');
    }


    public function florenceStore(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'designation'=>'required',
            'image'=>'required',
        ]);

        //another way of image upload
        $image = $request->file('image');
        $imageName = time() .'_'.$image->getClientOriginalName();

        $directory = 'images/dummies/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(500, 535)->save($imageUrl);


        $member = new FlorenceTeam();
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->image = $imageUrl;
        $member->save();
        return redirect(route('florence.index'))->with(['message'=>"About our florence team member's Information added Successfully"]);
    }



    public function store(Request $request)
    {
        $this->validate($request,[

            'description'=>'required',
            'image'=>'required',
        ]);

        //another way of image upload
        $image = $request->file('image');
        $imageName = time() .'_'.$image->getClientOriginalName();

        $directory = 'images/full/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(900, 632)->save($imageUrl);


        $aboutUs = new AboutUs();
        $aboutUs->description = $request->description;
        $aboutUs->image = $imageUrl;
        $aboutUs->save();
        return redirect(route('about.index'))->with(['message'=>'About our Information added Successfully']);
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
