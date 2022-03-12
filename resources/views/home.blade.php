@extends('layouts.index')

@section('content')
    <section class="new-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-center">
                    <div class="banner-content">
                        <h1 class="banner-title">Build outcome-based skills for the future of work</h1>
                        <p class="banner-subtitle">Experience Immersive Learning</p>
                        <a class="btn btn-success" href="{{ route('courses') }}">
                            Explore In-Demand Courses
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-cente">
                    <div class="banner-image">
                        <img src="{{asset('images/Blended-Learning.png')}}"
                            alt="home-banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lxp-new">
        <div class="container-fluid">
            <div class="lxp-new-main">
                <div class="row">
                    <div class="col-md-5 col-xs-12">
                        <div class="lxp-sub">
                            <div class="lxp-sub-left">
                                <h2>Develop the skills to move fast and stay ahead.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="lxp-sub d-none d-sm-block">
                            <div class="lxp-sub-right">
                                <div class="swiper-container lxp-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-fluid"
                                                src="{{asset('images/Outcome-Driven-Learning.png')}}"
                                                alt="Outcome-Driven-Learning">
                                            <h4>Outcome-driven Learning​</h4>
                                            <p>Achieve skill-based outcomes from our state-of-the-art immersive learning
                                                experience platform.​</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid lazy"
                                                data-src="{{asset('images/Advanced-Analytics.png')}}"
                                                alt="Advanced-Analytics">
                                            <h4>Advanced Insights​</h4>
                                            <p>Get a quantified view of your team’s skills and put the right people on the
                                                right jobs.​​</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid lazy"
                                                data-src="{{asset('images/Work-like-Experiences.png')}}"
                                                alt="Work-like-Experiences">
                                            <h4>“Work-like” Experiences​</h4>
                                            <p>Contextual learning crafted around real-world problem-solving in tech
                                                companies.​​</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid lazy"
                                                data-src="{{asset('images/Blended-Learning.png')}}"
                                                alt="Blended-Learning">
                                            <h4>Blended Learning​</h4>
                                            <p>Get the best of both worlds with live instructor-led training and the
                                                flexibility of e-learning.​</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid lazy"
                                                data-src="{{asset('images/Training-by-Practitioners.png')}}"
                                                alt="Training-by-Practitioners">
                                            <h4>Training by Practitioners​</h4>
                                            <p>Learn from the real-world experience of globally renowned and accredited
                                                industry experts.​</p>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="corporate-sec">
        <div class="container-fluid">
            <div class="d-flex corporate-summary">
                <div class="d-flex justify-content-center align-items-center individual">
                    <div class="d-none d-sm-block">
                        <div class="corp-ind-image">
                            <img src="{{asset('images/Future-proof-your-skills.png')}}"
                                alt="individual-and-teams">
                        </div>
                    </div>
                    <div class="individual-content">
                        <h4>INDIVIDUALS & TEAMS</h4>
                        <h2>Future-proof your skills</h2>
                        <p class="sub-title">Learn the latest from experts with real-world experience.</p>
                        <a class="know-more" href="{{ route('courses') }}">Know More<span class="corp-image"><i
                                    class="common-icons right-arrow-icon"></i></span></a>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center center-image border-right image-corporate">
                    <a class="d-flex justify-content-center align-items-center circle-border">
                        <i class="right-arrows common-icons corporate-right-icon"></i>
                        <i class="left-arrows common-icons corporate-left-icon"></i>
                    </a>
                </div>
                <div class="d-flex justify-content-center align-items-center corporate">
                    <div class="d-none d-sm-block">
                        <div class="corporate-image">
                            <img src="{{asset('images/Unleash-your-team-potential.png')}}"
                                alt="enterprise">
                        </div>
                    </div>
                    <div class="corporate-content">
                        <h4>ENTERPRISE</h4>
                        <h2>Unleash your team’s potential</h2>
                        <p class="sub-title">Make skill development your competitive advantage.</p>
                        <a class="know-more" href="#">Know More<span class="corp-image"><i
                                    class="common-icons right-arrow-icon"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="not-sure">
        <div class="container-fluid">
            <div class="not-sure-main">
                <div class="row">
                    <div class="col-xl-8 col-md-12">
                        <div class="not-sure-content clearfix">
                            <span class="not-sure-image">
                                <img class="img-fluid"
                                    src="{{asset('images/Corporate-section.png')}}"
                                    alt="corporate-section">
                            </span>
                            <div class="not-sure-theory">
                                <h4>Empower your teams to deliver. Every time.</h4>
                                <p>
                                    Equip your teams to keep up with change and drive results.​
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="clearfix">
                            <div class="not-sure-button">
                                <a class="btn btn-black" href="{{route('courses')}}">SKILL UP YOUR TEAMS<span
                                        class="right-arrow"><i class="common-icons right-arrow-icon"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="companies">
        <div class="container-fluid">
            <div class="bg-pd">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <h4>Companies, big and small, trust us to scale their business</h4>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="all-companies">
                            <div class="swiper-container company-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-1"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-2"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-3"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-4"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-5"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-6"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-7"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-8"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-9"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-10"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-11"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-12"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-13"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-14"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-15"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-17"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-18"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-19"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-20"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-21"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-22"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-23"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-24"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-25"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-26"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-27"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-28"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-29"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-30"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-31"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-32"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-33"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-34"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-35"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-37"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-38"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-39"></i>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 company-icon">
                                                <i class="color-clients-icons color-clients-icon-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending-courses">
        <div class="container-fluid">
            <div class="trending-courses-content">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h2>Discover our in-demand courses</h2>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="clearfix">
                            <div class="trending-search-courses">
                                {{-- <form class="form-group trending-search" autocomplete="off">
                                    <div class="autocomplete">
                                        <input class="form-control" id="myInput" type="text" name="trending_course"
                                            placeholder="Search 200+ Courses">
                                    </div>
                                    <button class="search btn" href="javascript:void(0)" type="submit">
                                        <i class="common-icons search-icon"></i>
                                    </button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trending-courses-tabs">
                <div class="row">
                    <div class="col-xl-9 col-md-6">
                        <div class="d-none d-xl-block">
                            <div class="d-flex align-items-center">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item trending-course-category">
                                        <a class="nav-link category-list active" data-toggle="tab" href="#0"
                                            data-value="0" data-text="Popular Courses">Popular Courses</a>
                                    </li>
                                    @foreach ($course_categories as $course_category)
                                        <li class="nav-item trending-course-category">
                                            <a class="nav-link category-list" href="{{route('courses.course',['course'=>$course_category->slug])}}">{{ $course_category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="right-side">
                            <a href="{{ route('courses') }}" role="button" class="btn btn-default know-btn-info">
                                <span class="btn-text">View all Categories</span>
                                <span class="arrow-info">
                                    <i class="common-icons right-arrow-icon"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="popular" class="tab-pane active">
                    <div class="swiper-container trend-slider">
                        <div class="swiper-wrapper trending-courses-list">
                            @foreach ($course_categories as $course_category)
                                @foreach ($course_category->courses as $course)
                                    @if ($course->is_popular == true)
                                        <div class="swiper-slide">
                                            <div class="course-thumb-summary">
                                                <div class="course-thumb">
                                                    @if ($course->is_trending == true)
                                                        <div class="badge-section"> <span
                                                                class="badge">Trending</span> </div>
                                                    @else
                                                        <div class="badge-section"></div>
                                                    @endif
                                                    <div class="course-name"> {{ $course->name }} </div>
                                                    <ul class="course-content">
                                                        <li>{{ $course->highlights->highlight_1 }}</li>
                                                        <li>{{ $course->highlights->highlight_2 }}</li>
                                                    </ul>
                                                    <ul class="accrd-bodies clearfix">
                                                        {{-- <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                                <li><i class="accrediation acdtn-page-23"></i></li> --}}
                                                        @foreach ($course->accrediteds as $c)
                                                            <li><img src="{{ asset('images/' . $c->src) }}" width="62"
                                                                    height="54"></li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="course-summary">
                                                        <ul class="course-hours">
                                                            <li> {{ $course->time_duration }} Hrs </li>
                                                            <li> <i class="common-icons black-star nitro-lazy"></i>
                                                                {{ $course->rating }} </li>
                                                        </ul>
                                                    </div>
                                                    <a href="{{ route('courses.course.subcourse', ['course' => $course_category->slug, 'subcourse' => $course->slug]) }}"
                                                        class="course-enroll loader"> START LEARNING </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        {{-- <div class="swiper-slide">
                                    <!-- Product Snippet Code Start-->
                                    <div class="hide"  itemtype="http://schema.org/Product">
                                        <span itemprop="name">Data Science with Python Certification</span>
                                        <div itemprop="aggregateRating"  itemtype="http://schema.org/AggregateRating">
                                            Rated <span itemprop="ratingValue">4.5</span>/5
                                            based on <span itemprop="reviewCount">757</span> customer reviews
                                        </div>
                                    </div>
                                    <div class="course-thumb-summary">
                                        <div class="course-thumb">
                                            <div class="badge-section">
                                            <span class="badge">Trending</span>
                                            </div>
                                            <div class="course-name">
                                            Data Science with Python Certification
                                            </div>
                                            <ul class="course-content">
                                            <li>42 hrs of live instructor-led training by certified Python experts</li>
                                            <li>Visualize data using advanced libraries like Pandas, Matplotlib, Scikit</li>
                                            </ul>
                                            <ul class="accrd-bodies clearfix">
                                            </ul>
                                            <div class="course-summary">
                                            <ul class="course-hours">
                                                <li>
                                                    42 Hrs
                                                </li>
                                                <li>
                                                    <i class="common-icons black-star"></i>
                                                    4.5
                                                </li>
                                            </ul>
                                            </div>
                                            <a href="#" class="course-enroll loader"> START LEARNING </a>
                                        </div>
                                    </div>
                                </div> --}}
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="trending-search-courses-data d-none">
                <div class="swiper-container trend-search-slider">
                    <div class="swiper-wrapper trending-search-courses-list">
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="bootcamp-info">
        <div class="container-fluid">
            <div class="bootcamp-content-info">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <h2>Transition to your dream career with Bootcamps​</h2>
                        <ul class="bootcamp-pc">
                            <li class="camp-content ">
                                <i class="common-icons bootcamp-icon-01"></i>
                                <p>Platform to<span> boost your </span><span>tech career</span></p>
                            </li>
                            <li class="camp-content">
                                <i class="common-icons bootcamp-icon-02"></i>
                                <p>Work-ready <span> development</span> <span>Experience</span></p>
                            </li>
                            <li class="camp-content">
                                <i class="common-icons bootcamp-icon-03"></i>
                                <p>Immersive <span>Learning</span> <span>Experience<span></span></span></p>
                            </li>
                        </ul>
                        <div class="mobile-media">
                            <div class="media">
                                <div class="media-left">
                                    <i class="common-icons bootcamp-icon-01"></i>
                                </div>
                                <div class="media-body">
                                    <div class="camp-content">
                                        <p>
                                            Platform to ​boost your tech career
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="common-icons bootcamp-icon-02"></i>
                                </div>
                                <div class="media-body">
                                    <div class="camp-content">
                                        <p>
                                            Work-ready development experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="common-icons bootcamp-icon-03"></i>
                                </div>
                                <div class="media-body">
                                    <div class="camp-content">
                                        <p>
                                            Immersive Learning Experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-more-button">
                            <a href="{{ route('courses.bootcamp_courses') }}" role="button"
                                class="btn btn-default know-btn-info">
                                <span class="btn-text">BECOME A SKILLED DEVELOPER​</span>
                                <span class="arrow-info">
                                    <i class="common-icons right-arrow-icon"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center bootcamp-img">
                        <img src="{{asset('images/Home-Bootcamps.png')}}"
                            class="img-fluid" width="100%" alt="bootcamp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="not-sure">
        <div class="container-fluid">
            <div class="not-sure-main">
                <div class="row">
                    <div class="col-xl-8 col-md-12">
                        <div class="not-sure-content clearfix">
                            <span class="not-sure-image">
                                <img class="img-fluid"
                                    src="{{asset('images/Free-hands-on-coding-camp.png')}}"
                                    alt="free-hands-on">
                            </span>
                            <div class="not-sure-theory">
                                <h4>Free Hands-on Coding Camp</h4>
                                <p>Learn coding from experts in a live environment​.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="clearfix">
                            <div class="not-sure-button">
                                <a class="btn btn-black" data-toggle="modal" data-target=".free-hands-on-camp-modal"
                                    href="javascript:void(0)">BOOK FREE TRIAL NOW<span class="right-arrow"><i
                                            class="common-icons right-arrow-icon"></i></span></a>
                                <!-- <a class="btn btn-black" data-toggle="modal" data-target=".contact-advisor-modal" href="javascript:void(0)" href="https://campaign.knowledgehut.com/coding-camp-angular8/" rel="nofollow" target="_blank">BOOK FREE TRIAL NOW<span class="right-arrow"><i class="common-icons right-arrow-icon"></i></span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="accrediation-bodies">
        <div class="container-fluid">
            <div class="accrediation-bodies-content">
                <h2>Get certified. Get noticed.</h2>
                <p>Deepen your expertise with certifications from premier global accreditation bodies.​</p>
                <div class="accrediation-bodies-summary">
                    <div class="swiper-container accr-slids">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-1"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-2"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-3"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-4"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-5"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-6"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-7"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-8"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-9"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-10"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-11"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-12"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-13"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-14"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-15"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-16"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-17"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-18"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-19"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-20"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-21"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-22"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-23"></i>
                            </div>
                            <div class="swiper-slide">
                                <i class="accrediation acdtn-page-24"></i>
                            </div>
                        </div>
                        <div class="swiper-pagination accr-pagination"></div>
                    </div>
                    <div class="swiper-button-prev accr-prev"></div>
                    <div class="swiper-button-next accr-next"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade free-hands-on-camp-modal" id="free-hands-on-camp-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Book Free Coding Trial Now</h5>
                        <p class="d-none d-sm-block">Reserve your free seat to learn coding from practitioners in an
                            immersive learning experience. Limited seats only.</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="close-search common-icons black-close-icon"></i>
                    </button>
                </div>
                <div class="modal-body global-form">
                    <form action="#" method="post"
                        class="form-list freeHandsOnCampForm" accept-charset="utf-8">
                        <input type="text" name="certifying_authority" class="d-none">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="form-group form-line">
                                    <input type="text" class="form-control inputText required" name="first_name">
                                    <span class="floating-label">First Name</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="form-group form-line">
                                    <input type="text" class="form-control inputText required" name="last_name">
                                    <span class="floating-label">Last Name</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-line">
                                    <input type="email" class="form-control inputText required" name="email">
                                    <span class="floating-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6 contact-number-full d-flex">
                                <div class="select-options form-group form-line isd-select form-toggled hf">
                                    <select name="isd" class="form-control isd-code selectpicker"
                                        data-dropdown-type="trending">
                                    </select>
                                    <i class="common-icons black-down-arrow-icon"></i>
                                </div>
                                <div class="form-group form-line phone">
                                    <input type="text" class="form-control inputText required" name="phone">
                                    <span class="floating-label">Phone</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-line">
                                    <textarea maxlength="500" rows="4" cols="80" name="query" class="form-control required"
                                        spellcheck="false"></textarea>
                                    <span class="floating-message" for="textarea">Message</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="select-options form-group">
                                    <select name="course_id" class="form-control customize-select required">
                                        <option selected="selected">Select Course</option>
                                        @foreach ($course_categories as $course_category)
                                            @foreach ($course_category->courses as $course)
                                                <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                    <span class="select-floating-label value-selected">Select Course</span>
                                </div>
                            </div>
                            <div class="col-md-12 hide">
                                <div class="form-group form-line">
                                    <label class="custom-checkbox checkbox">
                                        <input type="checkbox" name="agree_gdpr">
                                        <span class="checkmark"></span>
                                        <span class="opt-label code-detail">I consent to receive communications by email,
                                            SMS, phone and other electronic means from KnowledgeHut. See our
                                            <a href="https://www.knowledgehut.com/privacy-policy">privacy policy</a> and <a
                                                href="https://www.knowledgehut.com/terms-conditions">terms &amp;
                                                conditions</a> for your rights under GDPR.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="pay-btn clearfix">
                                    <button type="submit" class="float-right">Submit
                                        <span>
                                            <i class="common-icons right-arrow-icon"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
