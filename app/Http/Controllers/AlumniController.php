<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Donate;
use App\Donation;
use App\Internship;
use App\Job;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\AdaptivePayments;
use PDF;


class AlumniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:alumni');
    }
    //
    public function index(){
        return view('dashboards.alumni.job');
    }
    public function internships(){
        return view('dashboards.alumni.internships');
    }
    public function profile($id){
        $user=Alumni::find($id);
        return view('alumni.editprofile')->with('user',$user);
    }
    public function updateprofile($id,Request $request){
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
            $fileNameToStore='default.png';
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
        return redirect('/alumni-dashboard')->with('success','Account updated');
    }
    public function userInternships(){
        $id=Auth::guard('alumni')->user()->id;
        $internships=Internship::where('authorid', $id)->orderBy('id','desc')->paginate(16);

        return view('alumni.internships')->with('posts',$internships);

    }
    public function singleInternship($id){
        $internship=Internship::find($id);
        return view('alumni.editinternship')->with('post',$internship);
    }
    public function update($id,Request $request){
        //
        $this->validate($request,[
            'intern-title'=>'required',
            'intern-location'=>'required',
            'intern-period'=>'required',
            'intern-desc'=>'required',
            'tag'=>'required'
        ]);
        $post =Internship::find($id);
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
        $post->description=$request->input('intern-desc');
        $post->tag=$request->input('tag');
        $post->cover_image=$fileNameToStore;
        $post->authorid=Auth::guard('alumni')->user()->id;
        $post->avatar= Auth::guard('alumni')->user()->Avatar;
        $post->save();
        return redirect('/alumni-dashboard')->with('success','Internship post updated');
    }
    public function delete($id){
        $delete= Internship::find($id);
        $delete->delete();
        return redirect('/Alumni/Internships')->with('success','Internship post deleted');

    }
    public function jobs(){
        $id=Auth::guard('alumni')->user()->id;
        $jobs=Job::where('author_id', $id)->orderBy('id','desc')->paginate(16);
        return view('alumni.jobs')->with('posts',$jobs);
    }
    public function edit($id){
        $edit=Job::find($id);
        return view('alumni.editjob')->with('post',$edit);
    }
    public function jobedit($id,Request $request){
        $post=Job::find($id);
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

        $post->title=$request->input('job-title');
        $post->location=$request->input('job-location');
        $post->description=$request->input('job-desc');
        $post->coverImage=$fileNameToStore;
        $post->author_id=Auth::guard('alumni')->user()->id;
        $post->avatar= Auth::guard('alumni')->user()->Avatar;
        $post->save();
        return redirect('/Alumni/Jobs/')->with('success','Job post edited successfully');

}
public function deletejob($id){
    $delete=Job::find($id);
    $delete->delete();
    return redirect('/Alumni/Jobs/')->with('success','Job deleted successfully');
}
public function donate(){
    return view('alumni.donate');
}
    public function paypal(Request $request){
       // $provider = new AdaptivePayments();
        $amount=$request->amount;
        $purpose=$request->purpose;
        $options = [
            'BRANDNAME' => 'Dekut Alumni',
        ];


        $provider=PayPal::setProvider('adaptive_payments');

// Change the values accordingly for your application
        $data = [
            'receivers'  => [
                [
                    'email' => 'donations@dkut.ac.ke',
                    'amount' => $amount,
                    'primary' => true,
                ],
                [
                    'email' => 'janedoe@example.com',
                    'amount' => 5,
                    'primary' => false
                ]
            ],
            'payer' => 'PRIMARYRECEIVER', // (Optional) Describes who pays PayPal fees. Allowed values are: 'SENDER', 'PRIMARYRECEIVER', 'EACHRECEIVER' (Default), 'SECONDARYONLY'
            'return_url' => url('/alumni-Donate/success'),
            'cancel_url' => url('/alumni-Donate/cancel'),
        ];

        $response = $provider->addOptions($options)->createPayRequest($data);

        $redirect_url = $provider->getRedirectUrl('approved', $response['payKey']);



        $donate=new Donation();
        $donate->amount=$amount;
        $donate->user_id=Auth::guard('alumni')->user()->id;
        $donate->purpose=$purpose;
        $donate->names=Auth::guard('alumni')->user()->First_Name.'  '.Auth::guard('alumni')->user()->Middle_Name;
        $donate->email=Auth::guard('alumni')->user()->email;
        $donate->profession=Auth::guard('alumni')->user()->Profession;
        $donate->save();
        return redirect($redirect_url);


// The above API call will return the following values if successful:
// 'responseEnvelope.ack', 'payKey', 'paymentExecStatus'
    }
    public function success(){
   return view('success');
    }
    public function cancel(){
    return view('cancel');
    }
    public function downloadPDF(){
        $report=Donation::all();
        $sum= DB::table('donations')->pluck('amount')->sum();
        $pdf=PDF::loadView('alumni.pdf',array('reports'=>$report,'sum'=>$sum));
        return $pdf->download(uniqid().'.pdf');
    }
}
