<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.index', ['sliders' => Slider::all()]);
    }

    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
           'first_title'=>'required',
           'last_title'=>'required',
           'description'=>'required',
           'image'=>'required',
        ]);

        //another way of image upload
        $image = $request->file('image');
        $imageName = time() .'_'.$image->getClientOriginalName();
        // $imageFileType=$productImage->getClientOriginalExtension();
        // $imageName=$request->product_name.'.'.$imageFileType;
        $directory = 'images/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(1900, 600)->save($imageUrl);


        $slider = new Slider();
        $slider->first_title = $request->first_title;
        $slider->last_title = $request->last_title;
        $slider->description = $request->description;
        $slider->image = $imageUrl;
        $slider->save();
        return redirect(route('slider.index'))->with(['message'=>'New Slider added Successfully']);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
