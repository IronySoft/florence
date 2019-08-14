<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Blog;
use App\Course;
use App\FlorenceTeam;
use App\MissionVision;
use App\Notice;
use App\Project;
use App\Slider;
use App\Testimonial;
use App\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
        return view('front.home.index', [
            'sliders' => Slider::all(),
            'text' => Text::all()->where('id','=',1),
            'projects' => DB::table('projects')->paginate(6),
            'students' => DB::table('students')->get(),

            ]);
    }

    public function index2()
    {
        return view('front.home.index2');
    }

    public function blogIndex()
    {
        return view('front.blog.index', [
            'blogs'=>DB::table('blogs')->orderBy('created_at','DESC')->paginate(5),
            'headLines'=>DB::table('blogs')->select('title')->paginate(5),
            'olderBlogs'=>DB::table('blogs')->orderBy('created_at','ASC')->paginate(5),


        ]);
    }

    public function noticeIndex()
    {
        return view('front.notice.index', ['notices'=> DB::table('notices')->orderBy('created_at','DESC')->get()]);
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
