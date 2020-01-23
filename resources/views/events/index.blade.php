@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.admin-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <h4 style="color: green" class="text-center">Events</h4>
                <hr>
                @include('inc.messages')
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a style="color: #1b1e21 !important;" class="nav-link active" data-toggle="tab" href="#home">Create an event</a>
                    </li>

                    <li class="nav-item">
                        <a style="color: #1b1e21 !important;" class="nav-link" data-toggle="tab" href="#menu1">All events</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <h3>Create an event here</h3>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <form enctype="multipart/form-data" method="post" action="/Events/create">
                                    <div class="form-group">
                                        <label for="title">Event Title</label>
                                        <input name="title" id="title" class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location </label>
                                        <input name="location" id="location" class="form-control" type="text">
                                    </div>
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="date">Event Date</label>
                                        <input name="eventdate" data-toggle="datepicker" id="date" class="form-control" type="text">

                                        <div data-toggle="datepicker"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="article-ckeditor">Event Details</label>
                                        <textarea  class="textarea" name="details" id="article-ckeditor" cols="85" rows="5"></textarea>
                                    </div>
                                    <div class="input-group mb-3">

                                        <div class="custom-file">
                                            <input name="cover_image" type="file"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label  for="inputGroupFile01">Choose cover image</label>
                                        </div>
                                    </div>
                                    <button type="submit" style="height: 35px;width: 250px" class="btn btn-success">Submit</button>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <h3>All events</h3>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="all-event-list">
                                    @if(count($posts)>0)
                                    @foreach($posts as $post)
                                    <!-- Single Event Start -->
                                    <div style="background-color: #1c7430 !important;padding: 15px" class="single-upcoming-event">
                                        <div class="row">
                                            <div class="col-lg-5 eventcontainer">
                                                <div style="height: 250px;" class="up-event-thumb">
                                                    <img src="/storage/cover_images/{{$post->image}}" class="img-fluid" alt="Upcoming Event">
                                                    <h4 class="up-event-date">It’s on {{$post->eventdate}}</h4>
                                                </div>
                                                <br><br>
                                                <a class="btn btn-danger" href="Event/{{$post->id}}/remove">Remove</a>
                                                <a class="btn btn-success" href="Event/{{$post->id}}/edit">Edit</a>
                                            </div>

                                            <div  class="col-lg-7 tex">
                                                <div class="display-table">
                                                    <div  class="display-table-cell">
                                                        <div  class="up-event-text">
                                                            <div  class="event-countdown">
                                                                <div  class="event-countdown-counter " data-date="{{$post->eventdate}}"></div>
                                                                <p>Remaining</p>
                                                            </div>
                                                            <h3><a href="/Event/{{$post->id}}/show">{{$post->title}}</a></h3>

                                                            <p style="color: #f0fafb !important;"> {!! str_limit($post->details, $limit = 250, $end = '...')  !!}</p>
                                                            <a href="#" class="btn btn-brand btn-brand-dark">join with us</a>
                                                            <a href="/Event/{{$post->id}}/show" class="btn btn-brand btn-brand-dark">view details&nbsp; <i class="fa fa-chevron-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <hr>
                                    <!-- Single Event End -->
                                        @endforeach
                                        @else

                                        No events posted yet
                                        @endif
                                </div>
                            </div>
                                </div>

                </div>
            </div>
            </div>
        </div>
    </div>


    </div>
@endsection
