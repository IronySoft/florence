<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        return view('admin.course.index',['courses'=> Course::all()]);

    }

    public function create()
    {
        return view('admin.course.create');

    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'first_name' => 'required',
            'last_name' => 'required',
            'fee' => 'required',
            'month_number' => 'required',
        ]);

        Course::create($request->all());
        return redirect(route('course.index'))->with(['message' => "Course Information added Successfully"]);

    }


    public function show(Course $course)
    {
        return view('admin.course.show',['course'=> Course::find($course->id)]);
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        $row = Course::find($course->id);

        $row->first_name = $request->first_name;
        $row->last_name = $request->last_name;
        $row->fee = $request->fee;
        $row->month_number = $request->month_number;

        $row->update();
        return redirect(route('course.index'))->with(['message' => "Course Information UPDATED Successfully"]);

    }


    public function destroy(Course $course)
    {
        Course::destroy($course->id);
        return redirect(route('course.index'))->with(['message' => "Course Information DELETED Successfully"]);

    }
}
