<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Chat;
use App\Events\MessageSent;
use App\Message;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ChatsController extends Controller
{
    //

    public function __construct()
    {



    }
    public function index($id)
    {


        if(Auth::guard('alumni')->check()==true) {
            $user = Student::find($id);
            $userid = Auth::guard('alumni')->user();

            return view('messenger.chat')->with('userid',$userid)->with('users',$user);
        }else if(Auth::guard('student')->check()==true) {
            $user = Alumni::find($id);

            $userid = Auth::guard('student')->user();

            return view('messenger.chat')->with('userid',$userid)->with('users',$user);
        }


    }
    public function Message(){
        $alumni=Alumni::orderBy('id','desc')->get();
        return view('pages.student-message-view.index')->with('lists',$alumni);
    }
    public function fetchMessages($id)
    {
        if(Auth::guard('student')->check()==true) {
            $chats = Chat::where(function ($query) use ($id) {
                $query->where('user_id', '=', Auth::guard('student')->user()->id)->where('friend_id', '=', $id);
            })->orWhere(function ($query) use ($id) {
                $query->where('user_id', '=', $id)->where('friend_id', '=', Auth::guard('student')->user()->id);
            })->get();
            return $chats;
        }elseif (Auth::guard('alumni')->check()==true){
            $chats = Chat::where(function ($query) use ($id) {
                $query->where('user_id', '=', Auth::guard('alumni')->user()->id)->where('friend_id', '=', $id);
            })->orWhere(function ($query) use ($id) {
                $query->where('user_id', '=', $id)->where('friend_id', '=', Auth::guard('alumni')->user()->id);
            })->get();
            return $chats;
        }



    }
    public function sendMessage(Request $request)
    {
        if(Auth::guard('alumni')->check()==true) {
            $user = Auth::guard('alumni')->user();
            $userid = Auth::guard('alumni')->user()->id;
            $useravatar = Auth::guard('alumni')->user()->Avatar;

            $usernames = Auth::guard('alumni')->user()->First_Name.' '.Auth::guard('alumni')->user()->Surname;
            $chat = Chat::create([
                'chat' => $request->input('chat'),
                'user_id'=>$userid,
                'avatar'=>$useravatar,
                'names'=>$usernames,
                'friend_id' => $request->friend_id,
                'time_posted'=>$request->time_posted,
            ]);
            broadcast(new MessageSent($user, $chat))->toOthers();
            return ['status' => 'MessageSent'];
        }else if(Auth::guard('student')->check()==true) {
            $user = Auth::guard('student')->user();
            $userid = Auth::guard('student')->user()->id;
            $useravatar = Auth::guard('student')->user()->Avatar;
            $usernames = Auth::guard('student')->user()->First_name.' '.Auth::guard('student')->user()->Surname;
            $chat = Chat::create([
                'chat' => $request->input('chat'),
                'user_id'=>$userid,
                'friend_id' => $request->friend_id,
                'names'=>$usernames,
                'avatar'=>$useravatar,
                'time_posted'=>$request->time_posted,

            ]);
            broadcast(new MessageSent($user, $chat))->toOthers();
            return ['status' => 'Message Sent!'];
        }









    }
}
