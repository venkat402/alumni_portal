@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    {{--@include('inc.student-sidenav')--}}
                </div>
            </div>
            <div class="col-lg-10">
                {{--<a href="/student-dashboard">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>--}}

                <div  class="container">
                    <div id="app" class="row">
                        <div class="offset-3 col-6">
                            <button type="button" class="list-group-item list-group-item-warning list-group-item-action active">
                                Chat room
                                <span class="badge  badge-pill badge-danger">@{{ numberOfUsers }} &nbsp; online</span>
                            </button>
                            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                        <div style="overflow-y: scroll;height: 280px" class="list-group " v-chat-scroll>

                            <communicaton

                            v-for="value,index in chat.message"
                            :key=value.index
                            :color= chat.color[index]
                            :user = chat.user[index]
                            :time = chat.time[index]>
                               @{{value}}
                            </communicaton>
                            <input @keyup.enter='send' v-model="message"  style="height: 45px;font-size: medium" class="form-control" placeholder="Type your message....." type="text">
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection