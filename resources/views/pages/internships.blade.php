@extends('layouts.app')
@section('content')

    <!--== Blog Page Content Start ==-->

    <div id="page-content-wrap">

        <div class="blog-page-content-wrap ">
            <div class="container-fluid">
                <br>
                <h5>Internships/Attachment</h5>
                <br>
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-12">
                        <div class="blog-page-contant-start">
                            <div class="row">
                            @foreach($internships as $internship)
                                <!--== Single Blog Post start ==-->
                                    <div class="col-lg-3 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="/storage/cover_images/{{$internship->cover_image}}" alt="Blog" class="img-fluid" />
                                                </div>

                                            </figure>

                                            <div class="blog-content">
                                                <h3><a href="/internship-details/{{$internship->id}}"> {!! str_limit($internship->title,$limit = 50, $end = '...') !!}</a></h3>
                                                <p>
                                                    {!! str_limit($internship->description,$limit = 150, $end = '...') !!}

                                                </p>
                                                <a href="/internship-details/{{$internship->id}}" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                            @endforeach
                            <!--== Single Blog Post End ==-->

                            </div>

                        </div>
                    </div>
                    <!-- Blog content Area End -->


                </div>
            </div>
        </div>
    </div>
    <!--== Blog Page Content End ==-->
@endsection