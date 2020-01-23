@extends('layouts.app')
@section('content')

    <!--== Blog Page Content Start ==-->

    <div id="page-content-wrap">

        <div class="blog-page-content-wrap ">
            <div class="container-fluid">
                <br>
                <h5>Job Opportunities</h5>
                <br>
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-12">
                        <div class="blog-page-contant-start">
                            <div class="row">
                                @if(count($jobs)>0)
                            @foreach($jobs as $job)
                                <!--== Single Blog Post start ==-->
                                    <div class="col-lg-3 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="/storage/cover_images/{{$job->coverImage}}" alt="Blog" class="img-fluid" />
                                                </div>

                                            </figure>

                                            <div class="blog-content">
                                                <h3><a href="/job-details/{{$job->id}}"> {!! str_limit($job->title,$limit = 50, $end = '...') !!}</a></h3>
                                                <p>
                                                    {!! str_limit($job->description,$limit = 150, $end = '...') !!}

                                                </p>
                                                <a href="/job-details/{{$job->id}}" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                            @endforeach
                            <!--== Single Blog Post End ==-->
                                    @else
                                    <div class="container-fluid">
                                    <p>No jobs posted at this time</p>
                                    </div>
                                    @endif

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