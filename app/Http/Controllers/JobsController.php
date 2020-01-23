<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Job;
use Auth;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function internships(Request $request)
    {
        //
      $this->validate($request,[
          'intern-title'=>'required',
          'intern-location'=>'required',
          'intern-period'=>'required',
          'intern-desc'=>'required',
          'tag'=>'required'
      ]);
      $post =new Internship;
        //Handle ile upload
        if ($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get jus file name
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore='default.jpg';
        }
        $post->title=$request->input('intern-title');
        $post->location=$request->input('intern-location');
        $post->period=$request->input('intern-period');
        $post->tag=$request->input('tag');
        $post->description=$request->input('intern-desc');
        $post->cover_image=$fileNameToStore;
        $post->authorid=Auth::guard('alumni')->user()->id;
        $post->avatar= Auth::guard('alumni')->user()->Avatar;
        $post->save();
        return redirect('/CreateInternship')->with('success','Job post created');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //validate
        $this->validate($request,[
            'job-title'=>'required',
            'job-location'=>'required',
            'job-desc'=>'required',
            'cover_image'=>'image|nullable|max:5999'
        ]);
        //Handle ile upload
        if ($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get jus file name
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore='default.jpg';
        }
        $post=new Job;
        $post->title=$request->input('job-title');
        $post->location=$request->input('job-location');
        $post->description=$request->input('job-desc');
        $post->coverImage=$fileNameToStore;
        $post->author_id=Auth::guard('alumni')->user()->id;
        $post->avatar= Auth::guard('alumni')->user()->Avatar;
        $post->save();
        return redirect('/CreateJob')->with('success','Job post created');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
