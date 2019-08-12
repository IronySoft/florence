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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
