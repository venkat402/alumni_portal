
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-md-6">
                <div id="app">
                    <div class="panel-heading">

                        <img style="border-radius: 50%;width: 50px;height: 50px;float: left;" src="/storage/cover_images/{{$users->Avatar}}" alt="">   &nbsp;&nbsp;    {{$users->Surname}}

                        <onlineuser v-bind:friend="{{ $users }}" v-bind:onlineusers="onlineUsers"></onlineuser>
                    </div>
                    <hr>
                    <meta name="friendId" content="{{ $users->id }}">
                    <meta name="userId" content="{{$userid->id}}">
                    <audio id="ChatAudio">
                        <source src="{{ asset('sounds/chat.mp3') }}">
                    </audio>
                    <div  class="panel-body">
                        <center>
                            <span style="color: #1c7430">@{{ typing }}</span>
                        </center>



                    </div>





                    <chat-messages style="background-color:#f0f0f0;padding: 10px !important;background-size: cover"  :userid="{{$userid->id}}" :messages="messages"></chat-messages>

                    <div class="panel-footer">
                        <chat-form
                                v-on:messagesent="addMessage"
                                :user="{{$userid}}"
                                :userid="{{$userid->id}}"
                                :friendid="{{$users->id}}"
                        ></chat-form>
                    </div>

                </div>

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <br>
@endsection