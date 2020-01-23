@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.alumni-sidenav')
                </div>
            </div>
            <div class="col-lg-10">

                <div class="row">
                    <div class="col-lg-4">
                        <center>
                        <img style="height: 100px;width: 100px;border-radius: 50%" src="/storage/cover_images/{{$user->Avatar}}" alt="">
                        <br>
                        {{$user->First_Name}}&nbsp; {{$user->Middle_Name}}
                        </center>
                       <ul class="list-group">
                           <br>
                           <a href="/Alumni/{{$user->id}}/edit">
                               <li style="border-radius: 0px !important;" class="list-group-item">Edit your profile</li>
                           </a>
                           <a href="/Alumni/Internships"> <li style="border-radius: 0px !important;" class="list-group-item">View your internship posts</li></a>

                           <a href="/Alumni/Jobs"> <li style="border-radius: 0px !important;" class="list-group-item">View your jobs posts</li></a>

                       </ul>
                    </div>
                    <div class="col-lg-8">
                        <h4>Profile</h4>

                        <div class="row">

                            <div class="col-lg-12">
                                <table class="table table-hover">

                                    <tbody>
                                    <tr>
                                        <td><b>Names</b></td>
                                        <td> {{$user->First_Name}}&nbsp; {{$user->Middle_Name}} {{$user->Surname}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone number</b></td>
                                        <td> {{$user->Phone_Number}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Working Station</b></td>
                                        <td> {{$user->Work_station}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Course</b></td>
                                        <td> {{$user->Course}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Profession</b></td>
                                        <td> {{$user->Profession}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Location</b></td>
                                        <td> {{$user->Location}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Year</b></td>
                                        <td>joined {{$user->Year_joined}}&nbsp;graduated {{$user->Year_graduated}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td> {{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td> {{$user->gender}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
