@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.student-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <a href="/student-dashboard">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>

                <h4 style="color: green" class="text-center">
                    <img style="float: left;border-radius: 50%;height: 100px;width: 100px;" src="/storage/cover_images/{{$students->Avatar}}" class="img-fluid" alt="profle photo">
                    {{$students->First_name}}&nbsp;{{$students->Middle_name}}</h4>
                <hr>


                <br><br><br>
                <!-- Regsiter Form Area Start -->
                <div class="col-lg-12  ml-auto">
                    <div class="register-form-wrap">

                        <div class="register-form">
                            <form enctype="multipart/form-data" method="post" action="/student-dashboard/{{$students->id}}/update">
                                <div class="row">
                                    {{csrf_field()}}
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input value=" {{$students->First_name}}" type="text" class="form-control" id="fname" name="fname" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="mname">Middle Name</label>
                                            <input value=" {{$students->Middle_name}}" type="text" class="form-control" id="mname" name="mname" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="sname">Surname</label>
                                            <input  value="{{$students->Surname}}" type="text" class="form-control" id="sname" name="sname" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input  value="{{$students->Phone}}" type="tel" class="form-control" id="phone" name="phone" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_email">Email</label>
                                            <input  value="{{$students->Email}}" type="email" class="form-control" id="register_email" name="email" />
                                        </div>
                                    </div>

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
                                            <label for="register_name">Date of Birth</label>


                                            <input value="{{$students->DOB}}" name="dob" data-toggle="datepicker" id="date" class="form-control" type="text">

                                            <div data-toggle="datepicker"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_name">Year joined</label>
                                            <input value="{{$students->Year_joined}}" type="text" class="form-control" id="year" name="year" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="county">County</label>
                                            <input value="{{$students->County}}" type="text" class="form-control" id="county" name="county" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="register_stuid">Student Id</label>
                                            <input value="{{$students->RegNo}}" type="text" class="form-control" id="register_stuid" name="register_stuid" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group file-input">
                                    <input type="file" name="cover_image" id="customfile" class="d-none" />
                                    <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                </div>

                                <div class="gender form-group">
                                    <label class="g-name d-block">Gender</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input  type="radio" id="register_gender_male" name="register_gender" value="male" class="custom-control-input" />
                                        <label class="custom-control-label" for="register_gender_male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                        <label class="custom-control-label" for="register_gender_female">Female</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox float-lg-right">
                                        <input required type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">Alumni</a> Terms of Service</label>
                                    </div>

                                        <input type="submit" class="btn btn-reg" value="Register">


                                </div>
                            </form>

                            <br><br>
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
@endsection