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
                <br>
                <h5>Edit event</h5>
                <form enctype="multipart/form-data" method="post" action="/Event/{{$post->id}}/update">
                    <div class="form-group">
                        <label for="title">Event Title</label>
                        <input value="{{$post->title}}" name="title" id="title" class="form-control" type="text">
                    </div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="date">Event Date</label>
                        <input value="{{$post->eventdate}}" name="eventdate" data-toggle="datepicker" id="date" class="form-control" type="text">

                        <div data-toggle="datepicker"></div>
                    </div>
                    <div class="form-group">
                        <label for="article-ckeditor">Event Details</label>
                        <textarea   class="textarea" name="details" id="article-ckeditor" cols="85" rows="5">
                            {{$post->details}}
                        </textarea>
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




@endsection