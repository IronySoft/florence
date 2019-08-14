<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.index',['testimonials'=> Testimonial::all()]);
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'author_name' => 'required',
            'speech' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $directory = 'images/testimonial/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(50, 50)->save($imageUrl);


        $testimonial = new Testimonial();
        $testimonial->author_name = $request->author_name;
        $testimonial->speech = $request->speech;
        $testimonial->designation = $request->designation;
        $testimonial->image = $imageUrl;
        $testimonial->save();

        return redirect(route('testimonial.index'))->with(['message' => 'New Testimonial added Successfully']);

    }

    public function show($id)
    {
        return view('admin.testimonial.show', ['testimonial'=> Testimonial::find($id)]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        if ($request->hasFile('image')){

            unlink($testimonial->image);

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'images/testimonial/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(50, 50)->save($imageUrl);



            $testimonial->author_name = $request->author_name;
            $testimonial->speech = $request->speech;
            $testimonial->designation = $request->designation;
            $testimonial->image = $imageUrl;


        }else{

            $testimonial->author_name = $request->author_name;
            $testimonial->speech = $request->speech;
            $testimonial->designation = $request->designation;
        }


        $testimonial->update();
        return redirect(route('testimonial.index'))->with(['message'=>' testimonial updated Successfully']);


    }


    public function destroy($id)
    {
        $member = Testimonial::find($id);
        unlink($member->image);
        $member->delete();
        return redirect(route('testimonial.index'))->with(['message' => 'Testimonial deleted Successfully']);

    }
}
