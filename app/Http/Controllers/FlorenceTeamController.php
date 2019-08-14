<?php

namespace App\Http\Controllers;

use App\FlorenceTeam;
use Illuminate\Http\Request;
use Image;
class FlorenceTeamController extends Controller
{
    public function index()
    {
        return view('admin.florence-team.index', ['florenceTeams' => FlorenceTeam::all()]);
    }


    public function create()
    {
        return view('admin.florence-team.create');

    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'designation'=>'required',
            'image'=>'required',
        ]);

        //another way of image upload
        $image = $request->file('image');
        $imageName = time() .'_'.$image->getClientOriginalName();

        $directory = 'images/florence/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(500, 535)->save($imageUrl);


        $member = new FlorenceTeam();
        $member->name = $request->name;
        $member->designation = $request->designation;
        $member->image = $imageUrl;
        $member->save();
        return redirect(route('florence.index'))->with(['message'=>"About our florence team member's Information added Successfully"]);

    }

    public function show($id)
    {
        return view('admin.florence-team.show',['florence'=>FlorenceTeam::find($id)]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $member = FlorenceTeam::find($id);


        if ($request->hasFile('image')){

            unlink($member->image);
            $image = $request->file('image');
            $imageName = time() .'_'.$image->getClientOriginalName();

            $directory = 'images/florence/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(500, 535)->save($imageUrl);



            $member->name = $request->name;
            $member->designation = $request->designation;
            $member->image = $imageUrl;


        }else{

            $member->name = $request->name;
            $member->designation = $request->designation;

        }


        $member->update();
        return redirect(route('florence.index'))->with(['message'=>"About our florence team member's Information UPDATED!"]);

    }

    public function destroy($id)
    {
        $memebr = FlorenceTeam::find($id);
        unlink($memebr->image);
        $memebr->delete();

        return redirect(route('florence.index'))->with(['message'=>"About our florence team member's Information UPDATED!"]);

    }

    public function florenceIndex()
    {
    }
    public function florenceCreate()
    {
    }
    public function florenceStore(Request $request)
    {
    }
}
