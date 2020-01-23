@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.alumni-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                @include('inc.messages')
                <br>
    <h5>List of alumni members</h5>
    <p>Click on  the member to start chatting</p>
    <hr>
    <ul id="app" class="list-group">
        @foreach($lists as $list)
            <a href="/Messenger/{{$list->id}}">
                <li class="list-group-item">
                    {{$list->First_Name}}&nbsp;{{$list->Middle_name}}
                    <onlineuser v-bind:friend="{{ $list }}" v-bind:onlineusers="onlineUsers"></onlineuser>
                </li>

            </a>

        @endforeach
    </ul>
            </div>
        </div>
    </div>
    @endsection