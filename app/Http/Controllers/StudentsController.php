<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts= Student::orderBy('id','desc')->get();
        return view('students.index')->with('posts',$posts);
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
        $admin=Auth::guard('admin')->user();
        //
        $students= Student::find($id);
        return view('students.edit')->with('students',$students)->with('admin',$admin);
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
            'sname'=>'required',
            'phone'=>'required',
            'email' => 'required|string|email|max:255',

            'dob'=>'required',
            'year'=>'required',
            'county'=>'required',
            'register_stuid'=>'required',
            'register_gender'=>'required'
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
        $student=Student::find($id);
        $student->First_name=$request->input('fname');
        $student->Middle_name=$request->input('mname');
        $student->Surname=$request->input('sname');
        $student->RegNo=$request->input('register_stuid');
        $student->Phone=$request->input('phone');
        $student->DOB=$request->input('dob');
        $student->Year_joined=$request->input('year');
        $student->County=$request->input('county');
        $student->Avatar=$fileNameToStore;
//        $student->Password=Hash::make('default');
        $student->Email=$request->input('email');
        $student->gender=$request->input('register_gender');
        $student->save();
        return redirect('/Students')->with('success','Account updated');
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
        $student=Student::find($id);
        if ($student->image!='noimage.jpg'){
            Storage::delete('public/cover_images/'.$student->image);
        }
        $student->delete();
        return redirect('/Students')->with('success','Student removed');
    }
    public function block($id){
        $student=Student::find($id);
        $student->isBlocked=true;
        $student->save();
        return redirect('/Students')->with('success','Student blocked');


    }
    public function unblock($id){
        $student=Student::find($id);
        $student->isBlocked=false;
        $student->save();
        return redirect('/Students')->with('success','Student blocked');


    }
    public function editview($id){
        $student=Student::find($id);
        return view('students.profile')->with('students',$student);
    }
    public function updateprofile(Request $request, $id)
    {
        //
        $this->validate($request,[
            'fname'=>'required',
            'mname'=>'required',
            'sname'=>'required',
            'phone'=>'required',
            'email' => 'required|string|email|max:255',

            'dob'=>'required',
            'year'=>'required',
            'county'=>'required',
            'register_stuid'=>'required',
            'register_gender'=>'required'
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
        $student=Student::find($id);
        $student->First_name=$request->input('fname');
        $student->Middle_name=$request->input('mname');
        $student->Surname=$request->input('sname');
        $student->RegNo=$request->input('register_stuid');
        $student->Phone=$request->input('phone');
        $student->DOB=$request->input('dob');
        $student->Year_joined=$request->input('year');
        $student->County=$request->input('county');
        $student->Avatar=$fileNameToStore;
        $student->Password=Hash::make('default');
        $student->Email=$request->input('email');
        $student->gender=$request->input('register_gender');
        $student->save();
        return redirect('/student-dashboard')->with('success','Account updated');
    }
    public function all_alumni(){
      $alumni=Alumni::orderBy('id','desc')
                        ->get();

        return view('dashboards.students.alumni-list')->with('alumnis',$alumni);
    }
    public function donate(){
        return view('students.donate');
    }
}
