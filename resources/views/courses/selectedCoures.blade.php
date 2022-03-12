@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css_3_0/minified/selected-courese.css') }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <section
        style="background-image: url('https://cdn-cllme.nitrocdn.com/fsJtPHuAIrjqkSrOmOGUpPSluVVKYWgR/assets/static/optimized/rev-ec0d385/categories/share_images/ea20ec2c-f1e7-4384-84da-afc8bb11545d.jpg');"
        class="course-category-banner nitro-lazy"
        nitro-lazy-bg="https://cdn-cllme.nitrocdn.com/fsJtPHuAIrjqkSrOmOGUpPSluVVKYWgR/assets/static/optimized/rev-7401afd/categories/share_images/ea20ec2c-f1e7-4384-84da-afc8bb11545d.jpg">
        <div class="banner-overlay"></div>
        <div class="container-fluid">
            <ul class="breadcrumb clearfix" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="index.htm" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="active"> <span itemprop="name">{{ $course_category->name }}</span> </li>
            </ul>
            <h1>{{ $course_category->name }}</h1>
            <p> {{ $course_category->description }}</p>
            <ul class="course-category-list clearfix">
                <li>
                    <div class="media">
                        <div class="media-left"></div>
                        <div class="media-body"> {{ $course_category->enrolleds->count() }} Students Enrolled </div>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <div class="media-left"></div>
                        <div class="media-body"> {{ $courses->count() }} Courses </div>
                    </div>
                </li>
            </ul>
            <ul class="course-category-enroll clearfix">
                <li> <a class="btn btn-black" data-toggle="modal" data-target=".contact-learning-advisor-modal"
                        href="javascript:void(0)"> CONTACT LEARNING ADVISOR <span class="right-arrow"> <i
                                class="common-icons right-arrow-icon nitro-lazy"></i> </span> </a> </li>
                <li> </li>
            </ul>
        </div>
    </section>
    <section class="courses-datascience popular-courses">
        <div class="container-fluid">
            <h2>Top {{ $course_category->name }} Courses</h2>
            <div class="courses-datascience-main popular-courses-summary">
                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="course-thumb-summary">
                                <div class="course-thumb">
                                    @if ($course->is_trending == true)
                                        <div class="badge-section"> <span class="badge">Trending</span> </div>
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
                                            <li><img src="{{ asset('images/' . $c->src) }}" width="62" height="54"></li>
                                        @endforeach
                                    </ul>
                                    <div class="course-summary">
                                        <ul class="course-hours">
                                            <li> {{ $course->time_duration }} Hrs </li>
                                            <li> <i class="common-icons black-star nitro-lazy"></i> {{ $course->rating }}
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('courses.course.subcourse', ['course' => $course_category->slug, 'subcourse' => $course->slug]) }}"
                                        class="course-enroll loader"> START LEARNING </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="load-more text-center"> <a class="btn view-more-courses loader" data-loader-text="Loading..."
                        href="javascript:void(0)">Load More</a> </div>
            </div>
        </div>
    </section>
    <section class="filter-courses">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <div class="filter-search clearfix">
                        <div class="pull-left d-none d-md-block">
                            <h2 class="">Other Categories</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-none d-md-block">
                <div class="col-xl-12">
                    <div class="sortby-categories">
                        <ul class="clearfix">
                            <li> <a href="{{ route('courses') }}">All</a> </li>
                            @foreach ($all_course_categories as $all_category)
                                <li style="@if ($all_category->slug == $course_category->slug) display:none @endif">
                                    @php
                                        $slug = $all_category->slug;
                                    @endphp
                                    <a href="{{ route('courses.course', ['course' => $slug]) }}"
                                        title="{{ $all_category->name }}">{{ $all_category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
