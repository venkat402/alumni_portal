<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Chat;
use App\Events\BroadcastChat;
use App\Student;
use Illuminate\Http\Request;
use Auth;
class MessengerController extends Controller
{
    public function index()
    {
        $alumni=Alumni::orderBy('id','desc')->get();

        return view('messenger.index')->with('lists',$alumni);

        //
    }

    //
    public function create($id)
    {



        if(Auth::guard('alumni')->check()==true) {
            $alumni = Alumni::orderBy('id', 'desc')->get();
            $userid=Auth::guard('alumni')->user()->id;
            $user = Student::find($id);
            return view('messenger.chatbox')->with('userid',$userid)->with('users',$user);
        }else if(Auth::guard('student')->check()==true){

            $alumni = Alumni::orderBy('id', 'desc')->get();
            $user=Alumni::find($id);
            $userid=Auth::guard('student')->user()->id;
            return view('messenger.chatbox')->with('userid',$userid)->with('users',$user);
        }

    }
    public function getChat($id) {

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

    public function sendChat(Request $request)
    {
        $chat = Chat::create([
            'user_id' => $request->user_id,
            'friend_id' => $request->friend_id,
            'chat' => $request->chat
        ]);
        return [];
//        if (Auth::guard('student')->check() == true) {
//            $user = Auth::guard('student')->user();
//            broadcast(new BroadcastChat($chat))->toOthers();
//            return ['status' => 'Message Sent!'];
//        } elseif (Auth::guard('alumni')->check() == true) {
//            $user = Auth::guard('alumni')->user();
//
//
//            broadcast(new BroadcastChat($chat))->toOthers();
//            return ['status' => 'Message Sent!'];
//        }
    }
}
