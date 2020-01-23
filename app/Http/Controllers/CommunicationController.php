<?php

namespace App\Http\Controllers;

use App\Communication;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunicationController extends Controller
{
    //
    public function index(){
        return view('communications.index');
    }
    public function chat()
    {
        return view('chat');
    }

    public function send(request $request)
    {

        if(Auth::guard('alumni')->check()==true) {

            $user = Auth::guard('alumni')->user()->Surname;
            $savedata=new Communication;
            $savedata->name=Auth::guard('alumni')->user()->First_Name.''.Auth::guard('alumni')->user()->Last_Name;
            $savedata->message=$request->message;
            $savedata->save();
            $this->saveToSession($request);
            event(new ChatEvent($request->message, $user));

        }else if(Auth::guard('student')->check()==true) {
            $user = Auth::guard('student')->user()->Surname;
            $savedata=new Communication;
            $savedata->name=Auth::guard('student')->user()->First_name;
            $savedata->message=$request->message;
            $savedata->save();
            $this->saveToSession($request);
            event(new ChatEvent($request->message, $user));

        }
    }
    public function saveToSession(request $request)
    {

        session()->put('chat',$request->chat);
    }

    public function getOldMessage()
    {

        return session('chat');
    }

    public function deleteSession()
    {
        session()->forget('chat');
    }
}
