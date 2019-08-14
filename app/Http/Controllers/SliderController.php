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
        return view('admin.slider.show', ['slider'=> Slider::find($id)]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);


        if ($request->hasFile('image')){

            unlink($slider->image);

            $image = $request->file('image');
            $imageName = time() .'_'.$image->getClientOriginalName();

            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(1900, 600)->save($imageUrl);

            $slider->first_title = $request->first_title;
            $slider->last_title = $request->last_title;
            $slider->description = $request->description;
            $slider->image = $imageUrl;

        }else{

            $slider->first_title = $request->first_title;
            $slider->last_title = $request->last_title;
            $slider->description = $request->description;

        }


        $slider->update();
        return redirect(route('slider.index'))->with(['message'=>' Slider updated Successfully']);
    }


    public function destroy($id)
    {
        $member = Slider::find($id);
        unlink($member->image);
        $member->delete();
        return redirect(route('slider.index'))->with(['message'=>' Slider deleted Successfully']);

    }
}
