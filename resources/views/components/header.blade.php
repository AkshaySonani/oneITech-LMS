<header class="main-header header" id="myHeader">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{-- logo --}}
            <img src="{{ asset('images/logo.png') }}" alt="oneitech Logo">
            {{-- <img src="" alt="Knowledgehut Logo"> --}}
        </a>
        <a href="javascript:void(0)" class="navbar-toggler d-block d-xl-none" data-toggle="collapse"
            data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="f-icons f-navbar-toggler-icon"></i>
        </a>
        <div class="search-courses ml-auto d-block d-xl-none">
            <div class="dropdown open">
                <a href="javascript:void(0)" class="search-btn" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="true"><i class="f-icons f-search-icon"></i></a>
            </div>
        </div>
        <div class="navbar-nav ml-auto nav-course-menu course-menu">
            <div class="nav-item courses-hover">
                <a class="nav-link" href="javascript:void(0)"><i class="f-icons f-new-course-icon"></i>
                    Courses</a>
            </div>
        </div>
        <div class="collapse navbar-collapse d-none d-xl-block">
            <ul class="navbar-nav ml-auto nav-course-menu header-user-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}"> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Help</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('faqs') }}" rel="nofollow">FAQ</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">
                        <!--                             <div class="cart-fill"></div>
                           -->
                        <div class="cart-fill header-cart-item" style="display: none;"></div>
                        <i class="f-icons f-black-cart-icon"></i>
                    </a>
                </li>
                <li class="nav-item header-not-logged-item">
                    @if (!auth()->user())
                        <a class="btn btn-black" href="{{ route('login') }}" rel="nofollow">Sign In</a>
                    @else
                        <form action="{{ route('logout') }}">
                            @csrf
                            <a class="btn btn-black" href="#" rel="nofollow">Sign Out</a>
                        </form>
                    @endif
                </li>
                <li class="nav-item profile header-logged-item" style="display: none;">
                    <a class="nav-link d-flex justify-content-center align-items-center header-logged-a-cf"
                        href="javascript:void(0)">
                        {{-- user photo --}}
                        <img src="" alt="profile" height="40" witdth="40">
                        <i class="f-icons f-black-down-arrow-icon"></i>
                    </a>
                    <ul class="dropdown-menu clearfix" role="menu">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Refer and Earn</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Payment History</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="all-courses-menu">
        <div class="container">
            <div class="menu-dropdown clearfix" style="">
                <div class="megamenu-courses title">
                    <div class="title-courses">Category</div>
                    <div class="title-courses">Courses</div>
                </div>
                <ul class="submenu-main customized-scrollbar">
                    @php
                        $course_categories =  App\Models\CourseCategory::get();
                    @endphp
                    @foreach ($course_categories as $key => $course_category)
                        <li class="@if($key == 0) active @endif"> <a href="{{route('courses.course',['course'=>$course_category->slug])}}">{{$course_category->name}}</a>
                            <div class="sub-menu @if($key !== 0) hidden @endif">
                                <ul class="ul-menu-link customized-scrollbar">
                                    @foreach ($course_category->courses as $course)
                                        <li> <a href="{{route('courses.course.subcourse', ['course' => $course_category->slug, 'subcourse' => $course->slug])}}">{{$course->name}}</a> </li>
                                    @endforeach
                                    <li class="more-courses"> <a href="{{route('courses.course',['course'=>$course_category->slug])}}" class="more-courses-link"> View All Courses <span class="arrow-info"><i class="common-icons right-arrow-icon nitro-lazy"></i></span> </a> </li>
                                </ul>
                            </div>
                            {{-- <div class="view-trending ">
                                <div class="bottom">
                                    <div class="accre-header">
                                        <p class="accre-title">Accredition bodies</p>
                                    </div>
                                    <div class="accrd-logos"> <i class="common-accrediation ac-acdtn-page-3 nitro-lazy"></i> <i class="common-accrediation ac-acdtn-page-14 nitro-lazy"></i> <i class="common-accrediation ac-acdtn-page-15 nitro-lazy"></i> <i class="common-accrediation ac-acdtn-page-20 nitro-lazy"></i> </div>
                                </div>
                            </div> --}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-sidebar">
        <div class="navbar-collapse collapse d-block d-xl-none" id="navbar-collapse">
            <div>
                <div class="d-block d-xl-none mobile-sidebar-header clearfix">
                    Menu
                    <a href="javascript:void(0);" class="nav-close"><i class="f-icons f-black-close-icon"></i>
                    </a>
                </div>
            </div>
            <div class="mobile-sidebar-body" id="accordionone">
                <div class="mobile-sidebar-list course-accordionone">
                    <a class="mobile-sidebar-link collapsed" href="#course-dropdown" id="navbarDropdown9" role="button"
                        data-toggle="collapse" aria-haspopup="true" aria-expanded="false"> <i
                            class="f-icons f-new-course-icon"></i> Courses </a>
                    <ul class="collapse panel-collapse category-list" id="course-dropdown"
                        aria-labelledby="navbarDropdown9" data-parent="#accordionone" role="tabpanel">
                        @php
                            $course_categories =  App\Models\CourseCategory::get();
                        @endphp
                        @foreach ($course_categories as $key => $course_category)
                            <li class="category-link" id="category-{{$key}}">
                                <a class="collapsed panel-heading category-heading" href="#course-category-{{$key}}"
                                    id="events-sub-dropdown" role="button" data-toggle="collapse" aria-haspopup="true"
                                    aria-expanded="false">{{$course_category->name}}</a>
                                <ul class="collapse panel-collapse course-category" id="course-category-{{$key}}"
                                    aria-labelledby="events-sub-dropdown" data-parent="#course-dropdown" role="tabpanel">
                                    @foreach ($course_category->courses as $course)
                                        <li class="course-list">
                                            <a class="course-link" href="{{route('courses.course.subcourse', ['course' => $course_category->slug, 'subcourse' => $course->slug])}}">{{$course->name}}</a>
                                        </li>
                                    @endforeach
                                    <li class="course-list view-all-courses">
                                        <a class="course-link" href="{{route('courses.course',['course'=>$course_category->slug])}}">View all courses</a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--                 <div class="mobile-sidebar-footer">
                  <a href="https://prism.knowledgehut.com/" class="btn">Sign In</a>
                  </div>
                  -->
            <div class="mobile-sidebar-footer header-not-logged-item">
                <a href="index-1.htm" class="btn">Sign In</a>
            </div>
        </div>
    </div>
</header>
