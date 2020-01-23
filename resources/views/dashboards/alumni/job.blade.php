@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.alumni-sidenav')
                </div>
            </div>
            <div class="col-lg-10">

                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8">
                        @include('inc.messages')
                        <h4>Create a new job</h4>
                        <hr>
                        <br>
                        <form enctype="multipart/form-data" method="post" action="/CreateJob">
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="job-title">Job Title</label>
                                <input required class="form-control" id="job-title" name="job-title" type="text">
                            </div>
                            <div class="form-group">
                                <label for="job-location">Job Location</label>
                                <input class="form-control" id="job-location" name="job-location" type="text">
                            </div>
                            <div class="form-group">
                            <label for="cover-image">Cover image &nbsp;<small>optional</small></label>
                                <input  class="form-control" id="cover_image" name="cover-image" type="file">
                            </div>
                            <div class="form-group">
                            <label for="job-description">Job description</label>
                                <textarea  class="form-control" id="job-description" name="job-desc" type="text">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input required class="btn btn-warning btn-lg" type="submit" value="Create a job">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>



@endsection
