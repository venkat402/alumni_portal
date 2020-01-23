@extends('layouts.app')
@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">News &amp;Notices</h1>

                        <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Check out <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <!--== Blog Page Content Start ==-->

    <div id="page-content-wrap">

        <div class="blog-page-content-wrap ">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-12">
                        <div class="blog-page-contant-start">
                            <div class="row">
@foreach($notices as $notice)
                                <!--== Single Blog Post start ==-->
                                <div class="col-lg-3 col-md-6">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <img src="/storage/cover_images/{{$notice->cover_image}}" alt="Blog" class="img-fluid" />
                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a href="" class="author">
                                                    <div class="author-pic">
                                                        <img src="assets/img/blog/author.jpg" alt="Author">
                                                    </div>
                                                    <div class="author-info">

                                                        <p>2 hours Ago</p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">

                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3><a href="/news-details/{{$notice->id}}"> {!! str_limit($notice->title,$limit = 50, $end = '...') !!}</a></h3>
                                            <p>
                                                    {!! str_limit($notice->description,$limit = 150, $end = '...') !!}

                                                    </p>
                                            <a href="/news-details/{{$notice->id}}" class="btn btn-brand">More</a>
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