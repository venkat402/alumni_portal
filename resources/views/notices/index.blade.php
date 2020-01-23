@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: 100vh !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.admin-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <br>
                <h4 class="text-center">Create a new Notice/News &nbsp;&nbsp;<i class="fa fa-edit"></i></h4>
                <hr>
                <form enctype="multipart/form-data" method="post" action="/Notices">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input  name="title" id="title" class="form-control" type="text">
                    </div>
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="article-ckeditor">Description</label>
                        <textarea   class="textarea" name="body" id="article-ckeditor" cols="85" rows="5">

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