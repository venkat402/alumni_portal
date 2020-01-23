<?php

namespace App\Http\Controllers;

use App\Event;
use App\Internship;
use App\Job;
use App\Notice;
use App\Student;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function  index(){
        $events=Event::orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('pages.index')->with('events',$events);
    }
    public function  about(){
        return view('pages.about');
    }
    public function  events(){
        $events=Event::orderBy('id','desc')->paginate(8);
        return view('pages.events')->with('events',$events);
    }
    public function  blogs(){
        return view('pages.blog');
    }
    public function  gallery(){
        return view('pages.gallery');
    }
    public function  contact(){
        return view('pages.contact');
    }
    public function student(){
        return view('pages.student-login');
    }
    public function alumni()
    {
        return view('pages.alumni-login');
    }
    public function studentdash()
    {
        $user=Auth::guard('student')->user();
        return view('student-dashboard')->with('user',$user);
    }
    public function alumnidash()
    {
        $user=Auth::guard('alumni')->user();

        return view('Alumni')->with('user',$user);
    }
    public function admindash()
    {
        $user=Auth::guard('admin')->user();

        return view('Admin')->with('user',$user);
    }
    public function alumniMessages(){
        $student=Student::orderBy('id','desc')->get();
        return view('pages.alumni-message-view.index')->with('lists',$student);
    }
    public function viewevent($id){
        $event=Event::find($id);
        return view('pages.singleevent')->with('post',$event);
    }
    public function news(){
        $notices=Notice::orderBy('id','desc')->paginate(16);
        return view('pages.notices')->with('notices',$notices);

    }
    public function newsdetails($id){
        $notice=Notice::find($id);
        return view('pages.singlenotice')->with('post',$notice);
    }
    public function internships(){
        $interns=Internship::orderBy('id','desc')->paginate(8);
        return view('pages.internships')->with('internships',$interns);
    }
    public function singleinternship($id){
        $interns=Internship::find($id);
        return view('pages.singleinternship')->with('internships',$interns);
    }
    public function jobs(){
        $jobs=Job::orderBy('id','desc')->paginate(8);
        return view('pages.jobs')->with('jobs',$jobs);
    }
    public function singlejob($id){
        $job=Job::find($id);
        return view('pages.singlejob')->with('jobs',$job);
    }
}
