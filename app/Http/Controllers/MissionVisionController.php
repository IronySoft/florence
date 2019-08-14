<?php

namespace App\Http\Controllers;

use App\MissionVision;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{

    public function index()
    {
        return view('admin.mission-vision.index', ['goals' => MissionVision::all()]);

    }

    public function create()
    {
        return view('admin.mission-vision.create');

    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'description' => 'required',
        ]);

        MissionVision::create($request->all());

        return redirect(route('goal.index'))->with(['message' => "Mission and Vision Information added Successfully"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.mission-vision.show', ['goal' => MissionVision::findOrFail($id)]);
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
        $goal = MissionVision::find($id);
        $goal->title= $request->title;
        $goal->description= $request->description;
        $goal->update();
        return redirect(route('goal.index'))->with(['message' => "Mission and Vision Information UPDATED Successfully"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MissionVision::destroy($id);
        return redirect(route('goal.index'))->with(['message' => "Mission and Vision Information DELETED Successfully"]);
    }
}
