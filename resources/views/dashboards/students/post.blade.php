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
                <div class="row">
                    <div class="col-lg-4">

                        <img style="float:left;height: 100px;width: 100px;border-radius: 50%" src="/storage/cover_images/{{$user->Avatar}}" alt="">

                        <br>
                       &nbsp;&nbsp; <a href="/Messenger/{{$user->id}}" type="button" class="btn btn-outline-secondary">Send a message</a>
                        {{--<h6>Post a question to his/her timeline</h6>--}}
                        {{--<hr>--}}
                        {{----}}
                        {{--<form enctype="multipart/form-data" method="post" action="/Qustions/{{$user->id}}/create">--}}
                          {{--{{csrf_field()}}--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="article-ckeditor"></label>--}}
                                {{--<textarea  class="textarea" name="quizz" id="article-ckeditor" cols="85" rows="5">--}}

                                {{--</textarea>--}}
                            {{--</div>--}}

                            {{--<button type="submit"  class="btn btn-block btn-brand btn-success">Submit</button>--}}
                            {{--<br><br>--}}
                        {{--</form>--}}
                    </div>
                    <div class="col-lg-8">


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
    @endsection