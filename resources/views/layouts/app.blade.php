<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- Styles -->

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/navbar/bootstrap-4-navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/magnific/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/nice-select/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/js-offcanvas/css/js-offcanvas.css') }}" rel="stylesheet">
    <link id="cbx-style" data-layout="1" href="{{ asset('css/shady.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">

    <script src="{{ asset('vendor/modernizr/modernizr-custom.js') }}" ></script>
    <style>


        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #1c7430;
        }
    </style>
</head>
<body>
<style>
    .nav-link{
        color: white !important;
    }
    .nav-link:hover{
        background-color: goldenrod !important;
    }

    .btn-auth-rev:hover{
        background-color: goldenrod !important;
    }
    .nav-item{
        margin-top: 0px !important;
    }
</style>

<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@dekut.ac.ke"><strong>Email:</strong> info@dekut.ac.ke</a>
                        {{--<a href="/donate"><strong>Donate</strong></a>--}}
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        <a title="Staff login" class="btn-auth btn-auth-rev" href="/login/admin">Administration</a>
                        <a title="Student login" class="btn-auth btn-auth-rev" href="/login/student">Student</a>
                        <a title="Alumni login" class="btn-auth btn-auth-rev" href="/login/alumni">Alumni</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #1c7430 !important;" class="header-bottom-area" id="fixheader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('img/logo.png')}}" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="/events">Events</a></li>
                                <li class="nav-item"><a class="nav-link" href="/news">News</a></li>

                                <li style="background-color: #1c7430 !important;" class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Career Center</a>
                                    <ul  class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="/internships">Internships</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/jobs">Job opportunities</a></li>

                                    </ul>
                                </li>


                                <li class="nav-item"><a class="nav-link" href="/testimonials">Testimonials</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!--== Header Area End ==-->
@include('inc.messages')
@yield('content')

<!--== Footer Area Start ==-->
<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div style="padding: 35px" class="footer-widget ">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div style="margin-top: " class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widgei-body">
                            <div class="footer-about">
                                <img src="{{asset('img/logo.png')}}" alt="Logo" class="img-fluid" />
                                <p>// About goes here</p>
                                <a href="#">Phone: +8745 44 5444</a> <a href="#">Fax: +88474 156 362</a> <br> <a href="#">Email: dekutalumni@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="widgei-body">
                            <p>Subscribe to our email alerts </p>
                            <div class="newsletter-form">
                                <form id="cbx-subscribe-form" role="search">
                                    <input type="email" placeholder="Enter Your Email"  id="subscribe" required>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                            <div class="footer-social-icons">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Useful Links</h4>
                        <div class="widgei-body">
                            <ul class="double-list footer-list clearfix">

                                <li><a href="/internships">Internships</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/news">News</a></li>
                                <li><a href="/events">Events</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-2 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">University</h4>
                        <div class="widgei-body">
                            <ul class="footer-list clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Student Portal</a></li>
                                <li><a href="#">Elearning</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-bottom-text">
                        <p>© 2018 dekut, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!--== Footer Area End ==-->
<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}" ></script>
<script src="{{ asset('vendor/bootstrap/js/popper.min.js') }}" ></script>
{{--<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" ></script>--}}
<script src="{{ asset('vendor/navbar/bootstrap-4-navbar.js') }}" ></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}" ></script>
<script src="{{ asset('vendor/waypoint/waypoints.min.js') }}" ></script>
<script src="{{ asset('vendor/counterup/jquery.counterup.min.js') }}" ></script>
<script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}" ></script>
<script src="{{ asset('vendor/magnific/jquery.magnific-popup.min.js') }}" ></script>
<script src="{{ asset('vendor/smooth-scroll/jquery.smooth-scroll.min.js') }}" ></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.1.3.min.js') }}" ></script>
<script src="{{ asset('vendor/nice-select/jquery.nice-select.js') }}" ></script>
<script src="{{ asset('vendor/validation/jquery.validate.min.js') }}" ></script>
<script src="{{ asset('vendor/validation/additional-methods.min.js') }}" ></script>
<script src="{{ asset('vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js') }}" ></script>
<script src="{{ asset('vendor/jquery.countdown/jquery.countdown.min.js') }}" ></script>
<script src="{{ asset('js/shady.js') }}" ></script>
<script src="{{ asset('js/datepicker.min.js') }}" ></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script src="{{ asset('js/custom.js') }}" ></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
    $('.textarea').ckeditor(); // if class is prefered.
</script>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{ asset('js/image-cover.min.js') }}" ></script>
<script>
    $('#container').cover({

        // delay after window resize
        delay: 100,

        // fill, fillHeight, fillWidth, stretch
        scale: 'fill',

        // h ( center, left, right ), v ( bottom, center, top )
        align: {
            h: 'center',
            v: 'center'
        },


        767: {
            delay: 10,
            scale: 'fillWidth',
            align: {
                h: 'left',
                v: 'bottom'
            },
        },
        1199: {
            delay: 0,
            scale: 'stretch'
        }



    });
</script>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
