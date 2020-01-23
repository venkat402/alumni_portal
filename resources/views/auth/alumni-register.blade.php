@extends('layouts.app')
@section('content')

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <img src="{{asset('/alumni.png')}}" alt="">
                        </center>
                        <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">


                                        <!-- Regsiter Form Area Start -->
                                        <div style="background-color: #2fa360;color: white" class="col-lg-7 text-center col-md-6 ml-auto">
                                            <br>
                                            <h5>Welcome to alumni section</h5>

                                            <p>Login by filling in the required details or </p>

                                            <a   style="color: gold" href="/">Register here</a>
                                            {{--<div class="register-form-wrap">--}}
                                            {{--<h3>registration Form</h3>--}}
                                            {{--<div class="register-form">--}}
                                            {{--<form enctype="multipart/form-data" method="post" action="{{ url("register/$url") }}">--}}
                                            {{--<div class="row">--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_email">Email</label>--}}
                                            {{--<input type="email" class="form-control" id="register_email" name="email" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_password">Password</label>--}}
                                            {{--<input type="password" class="form-control" id="register_password" name="password" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="row">--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_name">First Name</label>--}}
                                            {{--<input type="text" class="form-control" id="register_name" name="fname" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_name">Middle Name</label>--}}
                                            {{--<input type="text" class="form-control" id="register_name" name="mname" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_name">Surname</label>--}}
                                            {{--<input type="text" class="form-control" id="register_name" name="surname" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="phone">Phone number</label>--}}
                                            {{--<input type="text" class="form-control" id="phone" name="phone" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_course">Course</label>--}}
                                            {{--<input type="text" class="form-control" id="register_course" name="course" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_profession">Profession</label>--}}
                                            {{--<input type="text" class="form-control" id="register_profession" name="profession" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_profession">Work station</label>--}}
                                            {{--<input type="text" class="form-control" id="register_profession" name="wstation" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_stuid">Location</label>--}}
                                            {{--<input type="text" class="form-control" id="register_stuid" name="location" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="row">--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_year">Year Joined</label>--}}
                                            {{--<input type="text" class="form-control" id="register_year" name="year_joined" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12 col-sm-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label for="register_year">Year graduated</label>--}}
                                            {{--<input type="text" class="form-control" id="register_year" name="year_graduated" />--}}
                                            {{--</div>--}}
                                            {{--</div>--}}


                                            {{--</div>--}}
                                            {{--<div class="form-group file-input">--}}
                                            {{--<input type="file" name="cover_image"  id="customfile" class="d-none" />--}}
                                            {{--<label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>--}}
                                            {{--</div>--}}

                                            {{--<div class="gender form-group">--}}
                                            {{--<label class="g-name d-block">Gender</label>--}}
                                            {{--<div class="custom-control custom-radio custom-control-inline">--}}
                                            {{--<input type="radio" id="register_gender_male" name="gender" value="male" class="custom-control-input" />--}}
                                            {{--<label class="custom-control-label" for="register_gender_male">Male</label>--}}
                                            {{--</div>--}}
                                            {{--<div class="custom-control custom-radio custom-control-inline">--}}
                                            {{--<input type="radio" id="register_gender_female" name="gender" value="female" class="custom-control-input">--}}
                                            {{--<label class="custom-control-label" for="register_gender_female">Female</label>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="form-group">--}}
                                            {{--<div class="custom-control custom-checkbox float-lg-right">--}}
                                            {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                            {{--<label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">Alumni</a> Terms of Service</label>--}}
                                            {{--</div>--}}
                                            {{--<input type="submit" class="btn btn-reg" value="Registration">--}}
                                            {{--</div>--}}
                                            {{--</form>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                        <!-- Signin Area Content Start -->
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <h4>Already a Member?Login here</h4>
                                                        <div class="sign-form">
                                                            <form method="post" action="{{ url("login/$url") }}">
                                                                {{csrf_field()}}
                                                                <input name="email" type="text" placeholder="Enter your email address">
                                                                <input name="password" type="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection