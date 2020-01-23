@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.student-sidenav')
                </div>
            </div>
            <div class="col-lg-10">

                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center ">Welcome {{$user->First_name}} {{$user->Surname}} </h4>
                        <hr>
                        @if($user->isBlocked==true)
                            <div class="alert alert-danger" role="alert">
                               You have been blocked by the admin you may not be able to access some features here,
                                Talk with the admin to unblock you.
                            </div>
                            @endif
                        <div class="row">
                            <div class="col-lg-8">
                                <h4>Profile</h4>

                                <table class="table table-condensed">

                                    <tbody>
                                    <tr>
                                        <td><b>First Name</b></td>
                                        <td>{{$user->First_name}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>Middle Name</b></td>
                                        <td>{{$user->Middle_name}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>Surname</b></td>
                                        <td>{{$user->Surname}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>Phone number</b></td>
                                        <td>{{$user->Phone}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>Year joined</b></td>
                                        <td>{{$user->Year_joined}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>County</b></td>
                                        <td>{{$user->County}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td>{{$user->Email}}</td>

                                    </tr>
                                    <tr>
                                        <td><b>gender</b></td>
                                        <td>{{$user->gender}}</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <br><br>
                                <center>
                                    <img style="border-radius: 50%;width: 150px;height: 150px" src="/storage/cover_images/{{$user->Avatar}}" alt="">
                                </center>
                                <br>
                                <a href="/student-dashboard/{{$user->id}}/edit">Edit your profile details</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
