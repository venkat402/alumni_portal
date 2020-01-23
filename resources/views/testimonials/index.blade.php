@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($tests)>0)
            @foreach($tests as $test)
            <div class="col-lg-4 col-md-4">
                <article class="single-blog-post">



                    <div class="blog-content">
                        <blockquote>

                        </blockquote>
                       <p>{!! $test->testimonial !!}</p>
                        <a href="" class="btn btn-brand">by &nbsp;{{$test->names}}</a>
                    </div>
                </article>
            </div>
                @endforeach
            @else
                <div class="container-fluid">
                    <p>No testimonials at this time, check back later</p>
                </div>
                @endif

        </div>
    </div>
    @endsection