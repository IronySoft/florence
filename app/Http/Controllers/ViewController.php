<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Course;
use App\FlorenceTeam;
use App\MissionVision;
use App\Project;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
        return view('front.home.index', ['sliders' => Slider::all(), 'projects' => DB::table('projects')->paginate(1)]);
    }

    public function index2()
    {
        return view('front.home.index2');
    }

    public function blogIndex()
    {
        return view('front.blog.index');
    }

    public function contactIndex()
    {
//        return view('front.contact.index');
    }

    public function aboutIndex()
    {
        return view('front.about.index', [
            'abouts' => AboutUs::all(),
            'florenceTeams' => FlorenceTeam::all(),
            'goals' => MissionVision::all(),

        ]);
    }

    public function courseIndex()
    {
        return view('front.course.index',['courses' => Course::with('contents')->get()]);
    }

    public function testimonialIndex()
    {
        return view('front.testimonial.index', ['testimonials' => Testimonial::all()]);
    }

    public function galleryIndex()
    {
        return view('front.gallery.index', ['projects' => DB::table('projects')->get()]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
