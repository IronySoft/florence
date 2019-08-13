<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        return view('admin.text.index',['texts'=> Text::all()]);
    }

    public function create()
    {
        return view('admin.text.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',

        ]);


        $Text = new Text();
        $Text->text = $request->text;

        $Text->save();

        return redirect(route('text.index'))->with(['message' => 'New text added Successfully']);

    }
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        //
    }
}
