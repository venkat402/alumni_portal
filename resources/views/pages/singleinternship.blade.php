@extends('layouts.app')
@section('content')


    <!--== Gallery Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="single-event-page-content ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-event-details">
                            <br>
                            <a href="/internships">Go back</a>
                            <h5 class="h5 text-center">{{$internships->title}}</h5>
                            <div class="event-thumbnails">


                            </div>
                            <div class="row">
                                <div style="height: 100px" class="col-lg-4">
                                    <img  src="/storage/cover_images/{{$internships->cover_image}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8">



                                    {!! $internships->description  !!}
                                </div>
                            </div>

                        </div>
    </section>
    <!--== Gallery Page Content End ==-->
@endsection