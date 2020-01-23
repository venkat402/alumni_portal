@extends('layouts.app')

@section('content')

    @include('inc.messages')
    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
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
                                        <div class="col-lg-12 col-md-12 ml-auto">

                                            <div class="register-form-wrap">
                                                <h3>Edit your details</h3>
                                                <a href="/alumni-dashboard">Go back home</a>
                                                <br><br>
                                                <div class="register-form">
                                                    <form enctype="multipart/form-data" method="post" action="/Alumni/{{$user->id}}/profileupdate">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">Email</label>
                                                                    <input value="{{$user->email}}" type="email" class="form-control" id="register_email" name="email" />
                                                                </div>
                                                            </div>
                                                            {{csrf_field()}}
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_password">Password</label>
                                                                    <input disabled value="{{$user->password}}" type="password" class="form-control" id="register_password" name="password" />
                                                                    <a href="">Change your password via forgot password link in login page</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_name">First Name</label>
                                                                    <input value="{{$user->First_Name}}" type="text" class="form-control" id="register_name" name="fname" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_name">Middle Name</label>
                                                                    <input value="{{$user->Middle_Name}}" type="text" class="form-control" id="register_name" name="mname" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_name">Surname</label>
                                                                    <input value="{{$user->Surname}}" type="text" class="form-control" id="register_name" name="surname" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Phone number</label>
                                                                    <input value="{{$user->Phone_Number}}" type="text" class="form-control" id="phone" name="phone" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_course">Course</label>
                                                                    <input value="{{$user->Course}}" type="text" class="form-control" id="register_course" name="course" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_profession">Profession</label>
                                                                    <input value="{{$user->Profession}}" type="text" class="form-control" id="register_profession" name="profession" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_profession">Work station</label>
                                                                    <input value="{{$user->Work_station}}" type="text" class="form-control" id="register_profession" name="wstation" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_stuid">Location</label>
                                                                    <input value="{{$user->Location}}" type="text" class="form-control" id="register_stuid" name="location" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_year">Year Joined</label>
                                                                    <input value="{{$user->Year_joined}}" type="text" class="form-control" id="register_year" name="year_joined" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_year">Year graduated</label>
                                                                    <input value="{{$user->Year_graduated}}" type="text" class="form-control" id="register_year" name="year_graduated" />
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
                                                            <div class="custom-control custom-checkbox float-lg-right">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">Alumni</a> Terms of Service</label>
                                                            </div>
                                                            <input type="submit" class="btn btn-reg" value="Edit your details">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->

@endsection
