@include('component.header')
<link rel="stylesheet" href="{{ asset('assets/css_3_0/minified/course.css') }}">
<section class="category-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 > Career Accelerator Bootcamps </h1>
                <p >
                    Become a skilled developer and transform your career in weeks with KnowledgeHut’s Live Online Coding Bootcamps, featuring a project-based structure, content by industry practitioners and a seamless immersive learning experience.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="category-list popular-courses">
    <div class="container-fluid">
        <div class="category-list-heading clearfix popular-courses-summary">
            <h2>Latest Bootcamps <span class="categ-num">(84)</span></h2>
            <div class="see-all">
                <a class="btn d-none d-md-block" href="{{ route('courses') }}">See all Courses
                    <span class="right-arrow">
                    <img src="https://www.knowledgehut.com/assets/images_3_0/right-arrow-icon.png" alt="right-arrow" />                                </span>
                 </a>
            </div>
        </div>
        <div class="agile-management popular-courses-summary">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Product Snippet Code Start-->
                    <div class="hide" itemscope itemtype="http://schema.org/Product">
                        <span itemprop="name">Certified ScrumMaster (CSM)®</span>
                        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                            Rated <span itemprop="ratingValue">5.0</span>/5
                            based on <span itemprop="reviewCount">2345</span> customer reviews
                        </div>
                    </div>
                    <div class="course-thumb-summary">
                        <div class="course-thumb">
                            <div class="badge-section">
                                <span class="badge">Trending</span>
                            </div>
                            <div class="course-name">
                                Certified ScrumMaster (CSM)®
                            </div>
                            <ul class="course-content">
                                <li>16 hrs of live instructor-led sessions and experiential workshops</li>
                                <li>Get trained by Scrum Alliance CSTs and earn 16 PDUs and SEUs</li>
                            </ul>
                            <ul class="accrd-bodies clearfix">
                                <li><i class="icons-course course-769"></i></li>
                                <li><i class="accrediation acdtn-page-23"></i></li>
                            </ul>
                            <div class="course-summary">
                                <ul class="course-hours">
                                    <li>
                                    16 Hrs
                                    </li>
                                    <li>
                                    <i class="common-icons black-star"></i>
                                    5.0
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="course-enroll loader"> START LEARNING </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="category-list-heading clearfix popular-courses-summary">
            <h2>Popular Courses <span class="categ-num">({{$popular_courses->count()}})</span></h2>
            <div class="see-all">
                <a class="btn d-none d-md-block" href="{{ route('courses') }}">See all Courses
                    <span class="right-arrow">
                    <img src="https://www.knowledgehut.com/assets/images_3_0/right-arrow-icon.png" alt="right-arrow" />                                </span>
                </a>
            </div>
        </div>
        <div class="agile-management popular-courses-summary">
            <div class="row">
                @foreach ($popular_courses as $popular_course)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                @if ($popular_course->is_trending == true)
                                    <div class="badge-section"> <span class="badge">Trending</span> </div>
                                @else
                                    <div class="badge-section"></div>
                                @endif
                                <div class="course-name"> {{$popular_course->name}} </div>
                                    <ul class="course-content">
                                        <li>{{$popular_course->highlights->highlight_1}}</li>
                                        <li>{{$popular_course->highlights->highlight_2}}</li>
                                    </ul>
                                    <ul class="accrd-bodies clearfix">
                                        {{-- <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                        <li><i class="accrediation acdtn-page-23"></i></li> --}}
                                        @foreach ($popular_course->accrediteds as $c)
                                            <li><img src="{{asset('images/'.$c->src)}}" width="62" height="54"></li>
                                        @endforeach
                                    </ul>
                                    <div class="course-summary">
                                        <ul class="course-hours">
                                            <li> {{$popular_course->time_duration}} Hrs </li>
                                            <li> <i class="common-icons black-star nitro-lazy"></i> {{$popular_course->rating}} </li>
                                        </ul>
                                    </div>
                                    <a href="{{route('courses.popular.subcourse',['subcourse'=>$popular_course->slug])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="filter-courses">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-md-8">
                <div class="filter-search clearfix">
                    <div class="pull-left d-none d-md-block">
                        <h2 class="">Choose your career path</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-4 col-md-4 d-block d-md-none">
                <div class="clearfix">
                    <div class="form-to-right">
                        <form >
                            <input class="form-control" type="text" placeholder="Search" />
                            <img src="images/search-icon.png">
                        </form>
                    </div>
                </div>
            </div>-->
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

@include('component.footer')
