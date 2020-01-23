@extends('layouts.app')
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">{{$post->title}}</h1>

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
                            <br>
                                   <h1>Event details</h1>
                            {!! $post->details  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
@endsection