@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css_3_0/minified/course.css') }}">
<section class="category-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 > Browse our Courses </h1>
                <p >
                Keep your skills up-to-date with access to hundreds of the latest courses across Data Science, Machine Learning, DevOps, Cyber Security, Full Stack Development, and People and Process Certifications.
                </p>
            </div>
        </div>
    </div>
</section>
<div class="expand-categories d-none d-md-block">
    <div class="sticky-menu">
       <div class="sticky-menu-content detail-sticky">
          <div class="sortby-categories">
             <ul class="clearfix">
                @foreach ($course_categories as $course_category)
                    <li>
                        @php
                            $slug = $course_category->slug ;
                        @endphp
                        <a href="{{ route('courses.course',['course' => $slug]) }}" title="{{ $course_category->name }}">{{ $course_category->name }}</a>
                    </li>
                @endforeach
             </ul>
          </div>
          <a class="expand-link">
          <span class="expand-more">Expand</span>
          </a>
       </div>
    </div>
</div>
<section class="category-list popular-courses">
    <div id="categoty_list">
    @foreach ($course_categories as $course_category)
        <div class="container-fluid">
            <div class="category-list-heading clearfix popular-courses-summary">
                <h2>{{ $course_category->name }} <span class="categ-num">({{$course_category->courses->count()}})</span></h2>
                <div class="see-all">
                    <a class="btn d-none d-md-block" href="{{ route('courses.course',['course'=>$course_category->slug]) }}">See all Courses
                        <span class="right-arrow">
                        <img src="https://www.knowledgehut.com/assets/images_3_0/right-arrow-icon.png" alt="right-arrow" />                                </span>
                    </a>
                </div>
            </div>
            <div class="agile-management popular-courses-summary">
                {{-- {{dd($course->is_trending)}} --}}
                <div class="row">
                    @foreach ($course_category->courses as $course)
                    {{-- {{dd($course_category)}} --}}
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <!-- Product Snippet Code Start-->
                            <div class="course-thumb-summary">
                                <div class="course-thumb">
                                    @if ($course->is_trending == true)
                                        <div class="badge-section"> <span class="badge">Trending</span> </div>
                                    @else
                                        <div class="badge-section"></div>
                                    @endif
                                    <div class="course-name"> {{$course->name}} </div>
                                    <ul class="course-content">
                                        <li>{{$course->highlights->highlight_1}}</li>
                                        <li>{{$course->highlights->highlight_2}}</li>
                                    </ul>
                                    <ul class="accrd-bodies clearfix">
                                        {{-- <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                        <li><i class="accrediation acdtn-page-23"></i></li> --}}
                                        @foreach ($course->accrediteds as $c)
                                            <li><img src="{{asset('images/'.$c->src)}}" width="62" height="54"></li>
                                        @endforeach
                                    </ul>
                                    <div class="course-summary">
                                        <ul class="course-hours">
                                            <li> {{$course->time_duration}} Hrs </li>
                                            <li> <i class="common-icons black-star nitro-lazy"></i> {{$course->rating}} </li>
                                        </ul>
                                    </div>
                                    <a href="{{route('courses.course.subcourse',['course'=>$course_category->slug,'subcourse'=>$course->slug])}}" class="course-enroll loader"> START LEARNING </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="load-more-agile-management text-center load-more mb-2">
                <a class="btn view-more-courses loader" data-loader-text="Loading..." data-offset="1" data-category-id="1" data-category="agile-management" href="javascript:void(0)">
                Load More
                </a>
            </div>
        </div>
    @endforeach
    </div>
</section>
{{-- <section class="useful-links">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="sortby-categories">
                    <h2 class="section-heading">useful links</h2>
                    <ul class="clearfix">
                        <li>
                            <a href="https://www.knowledgehut.com/programming/python-programming-certification-training-frankfurt ">Python Programming Certification  certification online in  Frankfurt </a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/blog/cloud-computing/how-to-save-up-to-40-on-azure-bill-without-buying-any-cost-management-software">azure cost optimization</a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/devops/devops-training-ahmedabad ">Devops  course online in  Ahmedabad </a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/mobile-app-development/ios-development-training-edmonton ">Ios Development  training in  Edmonton </a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/agile-management/less-framework-for-large-scale-product-development-training-montreal">Less Framework For Large Scale Product Development certification online in Montreal</a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/agile-management/csd-certification-training-richmond">CSD (Certified Scrum Developer) classes in Richmond</a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/agile-management/lean-kanban-non-it-professional">Lean Kanban for non IT Professional training</a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/agile-management/leading-safe-certification-training-geneva">Leading Safe certification online in Geneva</a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/devops/chef-training-hamilton ">Chef  classes in  Hamilton </a>
                        </li>
                        <li>
                            <a href="https://www.knowledgehut.com/agile-management/safe-product-manager-product-owner-training-auckland">SAFe Product Manager Product Owner (SPMPO) training in Auckland</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
