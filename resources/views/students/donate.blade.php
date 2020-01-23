@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.student-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <a href="/student-dashboard">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>


            </div>
        </div>
    </div>
    @endsection