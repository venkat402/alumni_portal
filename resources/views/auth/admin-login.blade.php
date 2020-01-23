@extends('layouts.app')

@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Administrator login </h1>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need</p>
                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding ">
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
                                                        <h4>Admin Login here: </h4>
                                                        <div class="sign-form">
                                                            <form method="post" action="{{ url("login/$url") }}">
                                                                {{csrf_field()}}
                                                                <input name="email" type="text" placeholder="Enter your email">
                                                                <input type="password" name="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div style="background-color: #2fa360;color: white" class="col-lg-7 col-md-6 ml-auto">
                                            <br>
                                            <h5>Welcome to admin section</h5>

                                            <p>Login by filling in the required details or </p>

                                            <a class="btn btn-reg" data-toggle="modal" data-target="#register-admin"  style="color: white" href="#">Register here  <i class="fa fa-chevron-circle-right pull-right"></i> </a>

                                        </div>
                </div>
            </div>
        </div>
                            <div style="background-color: #1c7430;color: white" id="register-admin" class="register-form-wrap modal">
                                <h3 class="text-center"> Staff Registration Form</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color: white" aria-hidden="true"><i class="fa fa-2x fa-close"></i></span></button>

                                <div class="register-form  modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data" action="{{ url("register/$url") }}">
                                        {{csrf_field()}}
                                        <div class="row">
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
                                                    <label for="register_name">Names</label>
                                                    <input type="text" class="form-control" id="register_name" name="name" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="register_stuid">Staff  Id</label>
                                                    <input type="text" class="form-control" id="register_stuid" name="staffid" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">


                                            <div class="col-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="register_deptno">Department </label>
                                                    <input type="text" class="form-control" id="register_deptno" name="department" />
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="job_title">Job Title </label>
                                                    <input type="text" class="form-control" id="job_title" name="job_title" />
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
                                                <input type="radio" id="register_gender_male" name="gender" value="mail" class="custom-control-input" />
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Regsiter Form Area End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->
    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">{{ __('Login') }}</div>--}}

    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">--}}
    {{--@csrf--}}

    {{--<div class="form-group row">--}}
    {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<div class="form-check">--}}
    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--<label class="form-check-label" for="remember">--}}
    {{--{{ __('Remember Me') }}--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-8 offset-md-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __('Login') }}--}}
    {{--</button>--}}

    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--{{ __('Forgot Your Password?') }}--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
