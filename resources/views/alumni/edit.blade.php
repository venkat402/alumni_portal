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
                <a href="/alumni-dashboard">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>
                <h4 style="color: green" class="text-center">
                    <img style="float: left;border-radius: 50%;height: 100px;width: 100px;" src="/storage/cover_images/{{$alumni->Avatar}}" class="img-fluid" alt="profle photo">
                    {{$alumni->First_Name}}&nbsp;{{$alumni->Middle_Name}}</h4>
                <hr>
                @include('inc.messages')
                <br><br><br>
                <!-- Regsiter Form Area Start -->
                <div class="col-lg-12  ml-auto">

                    <div class="register-form-wrap">

                        <div class="register-form">
                            <form enctype="multipart/form-data" method="post" action="/Alumni/{{$alumni->id}}/update">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_email">Email</label>
                                            <input value="{{$alumni->email}}" type="email" class="form-control" id="register_email" name="email" />
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_password">Password</label>
                                            <input disabled type="password" class="form-control" id="register_password" name="password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_name">First Name</label>
                                            <input value="{{$alumni->First_Name}}" type="text" class="form-control" id="register_name" name="fname" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_name">Middle Name</label>
                                            <input value="{{$alumni->Middle_Name}}" type="text" class="form-control" id="register_name" name="mname" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_name">Surname</label>
                                            <input value="{{$alumni->Surname}}" type="text" class="form-control" id="register_name" name="surname" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone number</label>
                                            <input value="{{$alumni->Phone_Number}}" type="text" class="form-control" id="phone" name="phone" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_course">Course</label>
                                            <input value="{{$alumni->Course}}" type="text" class="form-control" id="register_course" name="course" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_profession">Profession</label>
                                            <input value="{{$alumni->Profession}}" type="text" class="form-control" id="register_profession" name="profession" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_profession">Work station</label>
                                            <input value="{{$alumni->Work_station}}" type="text" class="form-control" id="register_profession" name="wstation" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_stuid">Location</label>
                                            <input value="{{$alumni->Location}}" type="text" class="form-control" id="register_stuid" name="location" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_year">Year Joined</label>
                                            <input value="{{$alumni->Year_joined}}" type="text" class="form-control" id="register_year" name="year_joined" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_year">Year graduated</label>
                                            <input value="{{$alumni->Year_graduated}}" type="text" class="form-control" id="register_year" name="year_graduated" />
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group file-input">
                                    <input type="file" name="cover_image"  id="customfile" class="d-none" />
                                    <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                </div>

                                <div class="gender form-group">
                                    <label class="g-name d-block">Gender</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="register_gender_male" name="gender" value="male" class="custom-control-input" />
                                        <label class="custom-control-label" for="register_gender_male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="register_gender_female" name="gender" value="female" class="custom-control-input">
                                        <label class="custom-control-label" for="register_gender_female">Female</label>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <input type="submit" class="btn btn-reg" value="Update details">
                                </div>

                            </form>
                            <form method="post" action="/Alumni/{{$alumni->id}}/delete">
                                <button type="submit" style="height: 55px;width: 120px;font-size: 20px;" class="btn btn-danger pull-right">Remove</button>
                            </form>
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
                <!-- Regsiter Form Area End -->
            </div>
        </div>
    </div>
    @endsection