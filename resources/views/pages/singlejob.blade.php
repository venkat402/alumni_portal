@extends('layouts.app')
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">{{$jobs->title}}</h1>

                        <br>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="single-event-page-content ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-event-details">
                            <div class="event-thumbnails">


                            </div>
                            <a href="/jobs">Go back</a>
                            <br>
                            <h1>Job details</h1>
                            {!! $jobs->description  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
@endsection