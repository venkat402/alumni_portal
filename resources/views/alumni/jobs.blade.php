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
                    <div class="col-lg-12">
                        @include('inc.messages')
                        <a href="/alumni-dashboard">Go back</a>

                        <h4>Jobs you posted</h4>

                        <hr>
                        <!--== Blog Page Content Start ==-->
                        <div id="page-content-wrap">
                            <div class="blog-page-content-wrap section-padding">
                                <div class="container">
                                    <div class="row">
                                        <!-- Blog content Area Start -->
                                        <div class="col-lg-12">
                                            <div class="blog-page-contant-start">
                                                <div class="row">
                                                    <!--== Single Blog Post start ==-->
                                                    @foreach($posts as $post)
                                                        <div class="col-lg-4 col-md-4">
                                                            <article class="single-blog-post">
                                                                {{--<figure class="blog-thumb">--}}

                                                                    {{--<figcaption class="blog-meta clearfix">--}}

                                                                        {{--<div class="like-comm pull-right">--}}
                                                                            {{--<a href="#"><i class="fa fa-comment-o"></i>77</a>--}}
                                                                            {{--<a href="#"><i class="fa fa-heart-o"></i>12</a>--}}
                                                                        {{--</div>--}}
                                                                    {{--</figcaption>--}}
                                                                {{--</figure>--}}

                                                                <div class="blog-content">
                                                                    <h3><a href="/Alumni/Jobs/{{$post->id}}/edit">{{$post->title}}</a></h3>
                                                                    <p>{!!   str_limit($post->description, $limit = 150, $end = '...') !!}</p>
                                                                    <a href="/Alumni/Jobs/{{$post->id}}/edit" class="btn btn-lg btn-warning ">View and edit</a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <!--== Single Blog Post End ==-->
                                                    @endforeach



                                                </div>

                                                <!-- Pagination Start -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="pagination-wrap text-center">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Pagination End -->
                                            </div>
                                        </div>
                                        <!-- Blog content Area End -->


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== Blog Page Content End ==-->
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
