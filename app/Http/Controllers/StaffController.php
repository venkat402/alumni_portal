<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index(){
        $staff=Admin::all();

        return view('staff.index')->with('posts',$staff);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'department' => 'required|string',
            'staffid' => 'required',
            'job_title' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:4',
        ]);
    }

    public function create(Request $request){
        $this->validator($request->all())->validate();
        $admin=new Admin;
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
        $admin->name=$request->input('name');
        $admin->job_title=$request->input('job_title');
        $admin->email=$request->input('email');
        $admin->staffID=$request->input('staffid');
        $admin->department=$request->input('department');
        $admin->avatar=$fileNameToStore;
        $admin->gender=$request->input('gender');
        $admin->password=Hash::make($request->input('password'));
        $admin->save();

        return redirect()->intended('Staff/')->with('success','Account created successfully');
    }
    public function edit($id){
        $staff=Admin::find($id);
        return view('staff.edit')->with('staff',$staff);
    }
    public function destroy($id){
        $staff=Admin::find($id);
        $staff->delete();
        return view('/Staff')->with('success','Account created successfully');
    }
    public function update(Request $request , $id){
        $this->validator($request->all())->validate();
        $admin=Admin::find($id);
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
        $admin->name=$request->input('name');
        $admin->job_title=$request->input('job_title');
        $admin->email=$request->input('email');
        $admin->staffID=$request->input('staffid');
        $admin->department=$request->input('department');
        $admin->avatar=$fileNameToStore;
        $admin->gender=$request->input('gender');
        $admin->password=Hash::make($request->input('password'));
        $admin->save();

        return redirect()->intended('Staff/')->with('success','Account updated successfully');

    }
//    profile edit
public function profile($id){

}
}
