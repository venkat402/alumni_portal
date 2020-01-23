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

                        <h4>Create a testimonial</h4>
                        <p>All the other data will be pulled from your profile.</p>

                        <hr>
                        <br>
                        <form enctype="multipart/form-data" method="post" action="/Create/testimonial">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="testimonial">Testimonial</label>
                                <textarea  class="form-control" id="testimonial" name="testimonial" type="text">
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
