@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div style="height: 100vh" class="col-lg-3">

                {{--@include('inc.messenger-sidenav')--}}
            </div>
            <div class="col-lg-9">
                <audio id="ChatAudio">
                    <source src="{{ asset('sounds/chat.mp3') }}">
                </audio>
                <meta name="friendId" content="{{ $users->id }}">
                <meta name="userId" content="{{$userid}}">
                <div id="app" class="chat-box">
                    <br>
                    <center>
                        You are now chatting with <b>{{$users->First_Name}}&nbsp;{{$users->Middle_Name}}</b>
                    </center>
                    <a class="pull-left btn btn-warning" href="/Messenger"> <i class="fa fa-arrow-circle-left"></i>&nbsp; Go back</a>
                    <br> <br>
                    <chat v-bind:chats="chats" v-bind:userid="{{  $userid }}" v-bind:friendid="{{ $users->id }}"></chat>
                </div>

            </div>
        </div>
    </div>
@endsection