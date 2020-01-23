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
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a style="color: black !important;"  class="nav-link active" data-toggle="pill" href="#home">Members</a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a style="color: black !important;" class="nav-link" data-toggle="pill" href="#menu1">Inbox&nbsp;<span class="badge badge-light">4</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a style="color: black !important;"  class="nav-link" data-toggle="pill" href="#menu2">Sent messages</a>--}}
                    {{--</li>--}}
                </ul>
                <hr>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <h5>List of students</h5>
                        <p>Click on  the member to start chatting</p>
                        <hr>
                        <div class="row">
                            <table id="studentstable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" onclick="checkAll(this)"></th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Surname</th>
                                    <th>Registration number</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody id="app">
                                @foreach($lists as $post)
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td>{{$post->First_name}}</td>
                                        <td>{{$post->Middle_name}}</td>
                                        <td>{{$post->Surname}}</td>
                                        <td>{{$post->RegNo}}</td>
                                        <td>
                                            <onlineuser v-bind:friend="{{ $post }}" v-bind:onlineusers="onlineUsers"></onlineuser>
                                            <a class="btn btn-success" href="/Messenger/{{$post->id}}">Message&nbsp;<i class="fa fa-envelope"></i></a></td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Surname</th>
                                    <th>Registration number</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection