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
    public function store(Request $request)
    {
        $this->validate($request,[

            'description'=>'required',
            'image'=>'required',
        ]);

        //another way of image upload
        $image = $request->file('image');
        $imageName = time() .'_'.$image->getClientOriginalName();

        $directory = 'images/about/';
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
        return view('admin.about-us.show', ['about' => AboutUs::find($id)]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $aboutUs = AboutUs::find($id);


        if ($request->hasFile('image')){

            unlink($aboutUs->image);

            $image = $request->file('image');
            $imageName = time() .'_'.$image->getClientOriginalName();

            $directory = 'images/full/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(900, 632)->save($imageUrl);

            $aboutUs->description = $request->description;
            $aboutUs->image = $imageUrl;

        }else{

            $aboutUs->description = $request->description;
        }

        $aboutUs->update();
        return redirect(route('about.index'))->with(['message'=>'About our Information added Successfully']);

    }
    public function destroy($id)
    {
       AboutUs::destroy($id);
        return redirect(route('about.index'))->with(['message'=>'About our Information Deleted Successfully']);
    }
}
