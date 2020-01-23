@extends('layouts.app')
@section('content')
    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <div class="slider-active-wrap owl-carousel text-center text-md-left">
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span style="color: goldenrod !important;">Dedan Kimathi University </span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="/about" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="about" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span style="color: goldenrod !important;">Dedan Kimathi University </span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="/about" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="about" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->

            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Proud</h2>
                                <h3>Students of <span style="color: goldenrod !important;">Dedan Kimathi University </span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="/about" class="btn btn-brand smooth-scroll">our mission</a>
                                    <a href="about" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
        </div>

        <!-- Social Icons Area Start -->
        <div class="social-networks-icon">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i> <span>7.2k Likes</span></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
            </ul>
        </div>
        <!-- Social Icons Area End -->
    </section>
    <!--== Slider Area End ==-->
    <!--== Upcoming Event Area Start ==-->
    <section id="upcoming-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upcoming-event-wrap">
                        <div class="up-event-titile">
                            <h3>Upcoming events</h3>
                        </div>
                        <div class="upcoming-event-content owl-carousel">
                            <!-- No 1 Event -->
                            @if(count($events)>0)
                            @foreach($events as $event)
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <img src="/storage/cover_images/{{$event->image}}" class="img-fluid" alt="Upcoming Event">
                                                <h4 class="up-event-date">{{$event->eventdate}}</h4>
                                                <br>
                                                <i class="fa fa-map-marker"></i>&nbsp;{{$event->location}}
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-countdown">
                                                            <div class="event-countdown-counter" data-date="{{$event->eventdate}}"></div>
                                                            <p>Remaining</p>
                                                        </div>
                                                        <h3><a href="/event-details/{{$event->id}}">{{$event->title}}</a></h3>
                                                        <p> {!! str_limit($event->details, $limit = 250, $end = '...')  !!}</p>
                                                        <a href="/event-details/{{$event->id}}" class="btn btn-brand btn-brand-dark">View details about the event</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            <!-- partial -->
                                @else
                                <div class="alert alert-danger" role="alert">
                                    <p>No upcoming events.</p>
                                </div>

                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Upcoming Event Area End ==-->

    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="about-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10 ml-auto">
                        <div class="about-content-wrap">
                            <div class="section-title text-center text-lg-left">
                                <h2>Our Objectives</h2>
                            </div>

                            <div class="about-thumb">
                                <img src="assets/img/bg.JPG" alt="" class="img-fluid">
                            </div>

                            <ul>
                                <li>
                                    a). To promote social and intellectual interaction between Dedan Kimathi University and the Alumni and also within the current students.
                                    <p></p>
                                    b).  To contribute to the growth of University by participating in development projects.
                                    <p></p>
                                    c). To promote, improve and protect the interest and welfare of the members and the university students.
                                    <p></p>
                                    d). To recognize and support scholarship and academic excellence of University and of the members.
                                    <p></p>
                                    e). To encourage, develop and maintain academic and social traditions unique to Dedan Kimathi University of Technology.
                                    <p></p>
                                    f). To establish collaborative links other Alumni bodies and organizations in and outside Kenya.
                                    <p></p>
                                    g).  To participate in any other worthwhile national and International development activities that will portray the Association and the University in good light.
                                    <p></p>
                                    h). To devise ways and means of raising funds for the activities of the Alumni and collaborative projects with the university.
                                </li>
                            </ul>
                            <a href="/about" class="btn btn-brand about-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== About Area End ==-->

    <!--== Our Responsibility Area Start ==-->
    <section id="responsibility-area" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Our Responsibility</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->

            <!--== Responsibility Content Wrapper ==-->
            <div class="row text-center text-sm-left">
                <!--== Single Responsibility Start ==-->
                <div class="col-lg-6 col-sm-12">
                    <div class="single-responsibility">
                        <center>
                            <img src="img/responsibility/01.png" alt="Responsibility">
                        </center>

                        <h4 class="text-center">Vision</h4>
                        <hr>
                        <p>
                            The Directorate serves present and future alumni and the University community by working to develop viable avenues for successful activities that would support the University’s vision to be a dynamic, inclusive and competitive center for excellence. It strives to be an effective partner in the realization of the goals cherished by Dedan Kimathi University of Technology and its former students.
                        </p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->

                <!--== Single Responsibility Start ==-->
                <div class="col-lg-6 col-sm-12">
                    <div class="single-responsibility">
                        <center>
                            <img src="img/responsibility/02.png" alt="Responsibility">
                        </center>

                        <h4 class="text-center">Mission</h4>
                        <hr>
                        <p>
                            To mobilize the alumni and well-wishers to support the welfare and progress of Dedan Kimathi University of Technology and to participate in the enhancement and improvement of intellectual and material well-being of Dedan Kimathi University of Technology community including fostering close friendship and professional relations between alumni and the university.
                        </p>
                    </div>
                </div>
                <!--== Single Responsibility End ==-->



            </div>
            <!--== Responsibility Content Wrapper ==-->
        </div>
    </section>
    <!--== Our Responsibility Area End ==-->


    @endsection