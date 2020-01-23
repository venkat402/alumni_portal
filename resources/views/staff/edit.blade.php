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

                        <br>
                        <a href="/Staff">Go back</a>
                        @if($staff->isSuper==true)
                            <a href="/Staff/{{$staff->id}}/delete" class="btn disabled btn-lg btn-danger pull-right">Remove this member</a>
                        @else
                            <a href="/Staff/{{$staff->id}}/delete" class="btn btn-lg btn-danger pull-right">Remove this member</a>
                        @endif
                        <h4 class="text-center">Edit staff details</h4>

                        <hr>
                        <form method="post" enctype="multipart/form-data" action="/Staff/{{$staff->id}}/update">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_email">Email</label>
                                        <input value="{{$staff->email}}" type="email" class="form-control" id="register_email" name="email" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_password">Password</label>
                                        <input  type="password" class="form-control" id="register_password" name="password" />
                                        <small> Use staffID as default password.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_name">Names</label>
                                        <input value="{{$staff->name}}" type="text" class="form-control" id="register_name" name="name" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="register_stuid">Staff  Id</label>
                                        <input value="{{$staff->staffID}}" type="text" class="form-control" id="register_stuid" name="staffid" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="register_deptno">Department </label>
                                        <input value="{{$staff->department}}" type="text" class="form-control" id="register_deptno" name="department" />
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="job_title">Job Title </label>
                                        <input value="{{$staff->job_title}}" type="text" class="form-control" id="job_title" name="job_title" />
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
                                <input type="submit" class="btn btn-reg" value="Registration">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>



@endsection
