<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('Chat.{user_id}.{friend_id}', function ($user, $user_id, $friend_id) {

    if(\Illuminate\Support\Facades\Auth::guard('alumni')->check()==true) {
        $user= \Illuminate\Support\Facades\Auth::guard('alumni')->user();
        return ['name'=>$user->Surname];
    }
    if (\Illuminate\Support\Facades\Auth::guard('student')->check()==true){
        $user= \Illuminate\Support\Facades\Auth::guard('student')->user();
        return ['name'=>$user->Surname];
    }
   // return $user->id == $friend_id;
});
Broadcast::channel('forum',function($user){
    if(\Illuminate\Support\Facades\Auth::guard('alumni')->check()==true) {
        return ['name' => $user->Surname];
    }
    if(\Illuminate\Support\Facades\Auth::guard('student')->check()==true) {
        return ['name' => $user->Surname];
    }
});

Broadcast::channel('Online', function ($user) {
    return $user;
});