@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.admin-sidenav')
                </div>
            </div>
            <div class="col-lg-10">

                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center">Welcome <span style="color: #1c7430">{{$user->name}} !</span></h4>
                        <hr>
                    </div>
                    <div class="col-lg-8">
                        <h6>Your profile</h6>
                        <hr>
                        <table class="table table-striped">
                            <thead>

                            </thead>
                            <tbody>
                            <tr>
                                <td><b>Names</b></td>
                                <td>{{$user->name}}</td>

                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>{{$user->email}}</td>

                            </tr>
                            <tr>
                                <td><b>Job title</b></td>
                                <td>{{$user->job_title}}</td>

                            </tr>
                            <tr>
                                <td><b>Department</b></td>
                                <td>{{$user->department}}</td>

                            </tr>
                            <tr>
                                <td><b>Staff Id</b></td>
                                <td>{{$user->staffID}}</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-group">
                           <center>
                               <img style="border-radius: 50%;width: 150px;height: 150px;" src="storage/cover_images/{{$user->avatar}}" alt="avatar">
                           </center>

                            <a href="/Staff/{{$user->id}}/edit"><li class="list-group-item">Edit your profile</li></a>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>



@endsection
