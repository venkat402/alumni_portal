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
                        <h4 class="text-center">Staff members registered</h4>
                        <hr>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a style="color: #1b1e21 !important;" class="nav-link active" data-toggle="tab" href="#home">Add new member</a>
                            </li>

                            <li class="nav-item">
                                <a style="color: #1b1e21 !important;" class="nav-link" data-toggle="tab" href="#menu1">Registered members</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active">
                                <div class="register-form">
                                    <form method="post" enctype="multipart/form-data" action="/Staff/create">
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
                                                    <small>A default password staffID will be registered automatically, it is upon the member to change it.</small>
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
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="container">
                                    <div class="row">
                                        <table id="studentstable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th><input type="checkbox" onclick="checkAll(this)"></th>
                                                <th>Names</th>
                                                <th>Job Title</th>
                                                <th>Email</th>
                                                <th>Staff Id</th>
                                                <th>department</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td><input type="checkbox" name=""></td>
                                                    <td>{{$post->name}}</td>
                                                    <td>{{$post->job_title}}</td>
                                                    <td>{{$post->email}}</td>
                                                    <td>{{$post->staffID}}</td>
                                                    <td>{{$post->department}}</td>
                                                        @if($post->isSuper==true)
                                                    <td><a class="btn btn-success disabled" href="/Staff/{{$post->id}}/edit">View</a></td>
                                                        @else
                                                        <td><a class="btn btn-success" href="/Staff/{{$post->id}}/edit">View</a></td>
                                                        @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>Names</th>
                                                <th>Job Title</th>
                                                <th>Email</th>
                                                <th>Staff Id</th>
                                                <th>department</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
