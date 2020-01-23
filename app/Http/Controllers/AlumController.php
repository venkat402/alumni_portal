<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumni=Alumni::orderBy('id','desc')->get();

        return view('alumni.index')->with('alumnis',$alumni);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events=Event::orderBy('id', 'desc')
            ->take(3)
            ->get();
        if( Auth::guard('alumni')->check()==false) {
            return redirect('/')->with('events', $events)->with('error', 'You dont have permission to access this page');
        }else {
            $alumni = Alumni::find($id);
            //
            return view('alumni.edit')->with('alumni', $alumni);
        }
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
        //
        $this->validate($request,[
            'fname'=>'required',
            'mname'=>'required',
            'surname'=>'required',
            'phone'=>'required',
            'email' => 'required|string|email|max:255|unique:users',

            'course'=>'required',
            'profession'=>'required',
            'location'=>'required',
            'year_joined'=>'required',
            'year_graduated'=>'required',
            'gender'=>'required',
        ]);
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
            $fileNameToStore='noimage.jpg';
        }
        $alumni= Alumni::find($id);
        $alumni->First_Name=$request->input('fname');
        $alumni->Middle_Name=$request->input('mname');
        $alumni->Surname=$request->input('surname');
        $alumni->Phone_Number=$request->input('phone');
        $alumni->Work_station=$request->input('wstation');
        $alumni->Course=$request->input('course');
        $alumni->Profession=$request->input('profession');
        $alumni->Location=$request->input('location');
        $alumni->Year_joined=$request->input('year_joined');
        $alumni->Year_graduated=$request->input('year_graduated');
        $alumni->email=$request->input('email');
        $alumni->Avatar=$fileNameToStore;
        $alumni->gender=$request->input('gender');
        $alumni->save();
        return redirect('/Alumni')->with('success','Account updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $alumni=Alumni::find($id);
        if ($alumni->image!='noimage.jpg'){
            Storage::delete('public/cover_images/'.$alumni->Avatar);
        }
        $alumni->delete();
        return redirect('/Alumni')->with('success','Student removed');
    }

}
