<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Image;
class StudentController extends Controller
{

    public function index()
    {
        return view('admin.student.index',['students'=> Student::all()]);
    }


    public function create()
    {
        return view('admin.student.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'image' => 'required',
            'roll' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $directory = 'images/student/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(310, 120)->save($imageUrl);

        $row = new Student();
        $row->name = $request->name;
        $row->roll = $request->roll;
        $row->image = $imageUrl;
        $row->save();
        return redirect(route('student.index'))->with(['message' => ' Student Added Successfully']);

    }


    public function show($id)
    {
        return view('admin.student.show',['student'=> Student::findOrFail($id)]);
        return redirect(route('student.index'))->with(['message' => ' Student Added Successfully']);
    }


    public function edit(Student $student)
    {
        //
    }


    public function update(Request $request, $id)
    {


        $row = Student::find($id);

        if ($request->hasFile('image')){

            unlink($row->image);

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'images/student/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(310, 150)->save($imageUrl);

            $row->name = $request->name;
            $row->roll = $request->roll;
            $row->image = $imageUrl;


        }else{

            $row->name = $request->name;
            $row->roll = $request->roll;
        }

        $row->update();
        return redirect(route('student.index'))->with(['message' => ' Student Updated Successfully']);
    }


    public function destroy($id)
    {
        $member = Blog::find($id);
        unlink($member->image);
        $member->delete();
        return redirect(route('student.index'))->with(['message' => ' Student DELETED Successfully']);

    }
}
