<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Qustion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QustionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $alumni=Alumni::find($id);
        return view('dashboards.students.post')->with('user',$alumni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userid=Auth::guard('student')->user()->id;
        //
      $this->validate($request,[
         "quizz"=>'required'
      ]);
      $postquizz=new Qustion;
      $postquizz->question=$request->quizz;
      $postquizz->friend_id=$request->id;
      $postquizz->user_id=$userid;
          $postquizz->save();
          return view('dashboards.students.alumni-list')->with('success','Success, post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qustion  $qustion
     * @return \Illuminate\Http\Response
     */
    public function show(Qustion $qustion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qustion  $qustion
     * @return \Illuminate\Http\Response
     */
    public function edit(Qustion $qustion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qustion  $qustion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qustion $qustion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qustion  $qustion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qustion $qustion)
    {
        //
    }
}
