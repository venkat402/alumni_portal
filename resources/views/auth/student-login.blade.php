@extends('layouts.app')
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Student registration form</h1>
                        <p>Register here as an ongoing student..</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--== Page Title Area End ==-->

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">
                                        <!-- Signin Area Content Start -->
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <form action="{{ url("login/$url") }}" method="post" >
                                                                {{csrf_field()}}
                                                                <input name="RegNo" type="text" placeholder="Enter your reg number">
                                                                <input name="password" type="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>


                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div style="background-color: #1c7430;color: white" class="col-lg-7 text-center col-md-6 ml-auto">
                                            <br>
                                            <h5>Don't have an account yet?<br>  <a class="btn btn-reg" data-toggle="modal" data-target="#register-student"  style="color: white" href="#">Register here  <i class="fa fa-chevron-circle-right pull-right"></i> </a></h5>
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
        <div style="background-color: #1c7430;color: white" id="register-student" class="register-form-wrap fadeInLeft  modal">
            <h3 class="text-center">Student registration form</h3>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color: white" aria-hidden="true"><i class="fa fa-2x fa-close"></i></span></button>

            <hr>
            <div class="register-form modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="{{ url("register/$url") }}">
                    <div class="row">
                        {{csrf_field()}}
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="mname">Middle Name</label>
                                <input type="text" class="form-control" id="mname" name="mname" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="sname">Surname</label>
                                <input type="text" class="form-control" id="sname" name="sname" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="course">Course</label>
                                <input type="text" class="form-control" id="course" name="course" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="register_email">Email</label>
                                <input type="email" class="form-control" id="register_email" name="email" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="register_password">Password</label>
                                <input type="password" class="form-control" id="register_password" name="password" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="register_name">Date of Birth</label>
                                <input data-toggle="datepicker"  type="text" class="form-control" id="dob" name="dob" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="register_name">Year joined</label>
                                <input type="text" class="form-control" id="year" name="year" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="county">County</label>
                                <input type="text" class="form-control" id="county" name="county" />
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="register_stuid">Student Id</label>
                                <input type="text" class="form-control" id="register_stuid" name="register_stuid" />
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
                            <input type="radio" id="register_gender_male" name="register_gender" value="male" class="custom-control-input" />
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
                        <input type="submit" class="btn btn-reg" value="Registration">
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->
@endsection