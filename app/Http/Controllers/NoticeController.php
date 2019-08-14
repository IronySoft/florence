<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Image;
class NoticeController extends Controller
{
    public function index()
    {
        return view('admin.notice.index', [
            'notices' => Notice::all()
        ]);

    }

    public function create()
    {
        return view('admin.notice.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'type' => 'required',
            'location' => 'required',

        ]);
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $directory = 'images/notice/';
        $imageUrl = $directory . $imageName;
        Image::make($image)->resize(900, 550)->save($imageUrl);

        $row = new Notice();
        $row->location = $request->location;
        $row->title = $request->title;
        $row->price = $request->price;
        $row->type = $request->type;
        $row->description = $request->description;
        $row->image = $imageUrl;
        $row->save();

        return redirect(route('notice.index'))->with(['message' => 'Notice added Successfully']);

    }

    public function show($id)
    {
        return view('admin.notice.show', [
            'notice' => Notice::findOrFail($id)
        ]);
    }

    public function edit()
    {
        //
    }


    public function update(Request $request, $id)
    {
        $row = Notice::find($id);

        if ($request->hasFile('image')){

            unlink($row->image);

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $directory = 'images/notice/';
            $imageUrl = $directory . $imageName;
            Image::make($image)->resize(900, 550)->save($imageUrl);

            $row->location = $request->location;
            $row->title = $request->title;
            $row->price = $request->price;
            $row->type = $request->type;
            $row->description = $request->description;
            $row->image = $imageUrl;


        }else{

            $row->location = $request->location;
            $row->title = $request->title;
            $row->price = $request->price;
            $row->type = $request->type;
            $row->description = $request->description;

        }

        $row->update();
        return redirect(route('notice.index'))->with(['message'=>' Notice updated Successfully']);


    }


    public function destroy($id)
    {
        $member = Notice::find($id);
        unlink($member->image);
        $member->delete();
        return redirect(route('notice.index'))->with(['message'=>' Notice DELETED Successfully']);

    }
}
