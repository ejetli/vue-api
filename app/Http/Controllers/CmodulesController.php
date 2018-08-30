<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cmodules;
use Session;

class CmodulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmodule = Cmodules::orderby('id', 'desc')->paginate(10);
        return view ('cmodules.index')->withCmodule($cmodule);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cmodules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, array(
            'name' => 'required|max:255',
            'about' => 'required',
            'status' => 'required',
            'order' => 'required',
            'course_id' => 'required',
            
        ));

        //store in to the database
        $cmodule = new Cmodules;

        $cmodule->name = $request->name;
        $cmodule->about = $request->about;
        $cmodule->status = $request->status;
        $cmodule->order = $request->order;
        $cmodule->course_id = $request->course_id;
        $cmodule->user_id = '1';
       
        $cmodule->save();

        Session::flash('success', 'The cmodule was successfully save!');
        //redirect to anther page
        return redirect()->route('cmodules.show', $cmodule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cmodule = Cmodules::find($id);
        return view('cmodules.show')->withCmodule($cmodule);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cmodule = Cmodules::find($id);
        return view('cmodules.edit')->withCmodule($cmodule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'about' => 'required',
            'status' => 'required',
            'order' => 'required',
            'course_id' => 'required',
            
        ));

        //save the date to the datebase
        $cmodule = Cmodules::find($id);

        $cmodule->name = $request->input('name');
        $cmodule->about = $request->input('about');
        $cmodule->status = $request->input('status');
        $cmodule->order = $request->input('order');
        $cmodule->course_id = $request->input('course_id');
        $cmodule->user_id = '1';

        $cmodule->save();
        //set flash data wuth success message
        Session::flash('success', 'This cmodule was successfully saved');
        //redirect with flash data to post.show
        return redirect()->route('cmodules.show', $cmodule->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmodule = Cmodules::find($id);

        $cmodule->delete();

        Session::flash('success', 'The cmodule was successfully deleted.');

        return redirect()->route('cmodules.index');
    } 
}
