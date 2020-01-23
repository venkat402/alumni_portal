<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Alumni;
use App\Student;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:alumni');
        $this->middleware('guest:student');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showAlumniRegisterForm()
    {
        return view('auth.register', ['url' => 'alumni']);
    }
    public function showStudentRegisterForm()
    {
        return view('auth.register', ['url' => 'student']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'department' => 'required|string',
            'staffid' => 'required',
            'job_title' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function createAdmin(Request $request)
    {
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

        return redirect()->intended('login/admin')->with('success','Account created successfully');;
    }
    protected function createAlumni(Request $request)
    {
        $this->validate($request,[
            'fname'=>'required',
            'mname'=>'required',
            'surname'=>'required',
            'phone'=>'required',

            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
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
        $alumni= new Alumni;
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
        $alumni->password=Hash::make($request->input('password'));
        $alumni->gender=$request->input('gender');
        $alumni->save();

        return redirect()->intended('login/alumni')->with('success','Account created');
    }
    protected function createStudent(Request $request)
    {
        //$this->validator($request->all())->validate();
        $this->validate($request,[
            'fname'=>'required',
            'mname'=>'required',
            'sname'=>'required',
            'phone'=>'required',
            'course'=>'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
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
        $student=new Student;
        $student->First_name=$request->input('fname');
        $student->Middle_name=$request->input('mname');
        $student->Surname=$request->input('sname');
        $student->Course=$request->input('course');
        $student->RegNo=$request->input('register_stuid');
        $student->Phone=$request->input('phone');
        $student->DOB=$request->input('dob');
        $student->Year_joined=$request->input('year');
        $student->County=$request->input('county');
        $student->Avatar=$fileNameToStore;
        $student->Password=Hash::make($request->input('password'));
        $student->Email=$request->input('email');
        $student->gender=$request->input('register_gender');
        $student->save();


        return redirect()->intended('login/student')->with('success','Account created');
    }
    public function viewContribution(){

    }
}
