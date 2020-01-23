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
                        <br>
                        <a href="">Visit your profile to see all your posts</a>
                    </div>
                    <div class="col-lg-8">

                        <h4>Create a new internship opportunity</h4>
                        <hr>
                        <br>
                        <form enctype="multipart/form-data" method="post" action="/CreateInternship">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="job-title">Job Title</label>
                                <input required class="form-control" id="job-title" name="intern-title" type="text">
                            </div>
                            <div class="form-group">
                                <label for="job-location">Job Location</label>
                                <input class="form-control" id="job-location" name="intern-location" type="text">
                            </div>
                            <div class="form-group">

                                <select style="width: 100% !important;" name="tag" class="form-control" >

                                    <option selected value="Internship">Internship</option>
                                    <option value="Attachment">Attachment</option>

                                </select>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label for="job-location">Internship period</label>
                                <input class="form-control" id="job-location" name="intern-period" type="text">
                            </div>
                            <div class="form-group">
                                <label for="cover-image">Cover image &nbsp;<small>optional</small></label>
                                <input  class="form-control" id="cover-image" name="cover_image" type="file">
                            </div>
                            <div class="form-group">
                                <label for="job-description">Job description</label>
                                <textarea  class="form-control" id="job-description" name="intern-desc" type="text">
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
