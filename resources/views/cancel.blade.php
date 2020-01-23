@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.alumni-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <a href="/alumni-dashboard">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>

                {{--<p>You have contributed <b>550</b> Ksh</p>--}}
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-8">

                        <h3 style="color: maroon">You cancelled the payment..</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection