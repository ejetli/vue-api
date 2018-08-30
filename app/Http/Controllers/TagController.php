<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tags;
use App\Http\Resources\Tag as TagResource;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    
     public function getTag(){

      return view('tag.indexs');

    }


    public function index()
    {
        //Get tags
        $tags = Tags::orderBy('created_at', 'desc')->paginate(5);

        //return collection of tags as a resource
        return TagResource::collection($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = $request->isMethod('put') ? Tags::findOrFail($request->tag_id) : new Tag;

        $tag->id = $request->input('tag_id');
        $tag->name = $request->input('name');
        $tag->status = $request->input('status');
        $tag->order = $request->input('order');
        $tag->course_id = $request->input('course_id');
        $tag->user_id = $request->input('user_id');

        if($tag->save()) {
            return new TagResource($tag);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get tag
        $tag = Tags::findOrFail($id);

        // Return single tag as a resource
        return new TagResource($tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get tag
        $tag = Tags::findOrFail($id);

        if($tag->delete()){
            return new tagResource($tag);
        }
        
    }
}
