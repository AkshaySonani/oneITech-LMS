@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css_3_0/minified/selected-courese.css') }}">
@endsection
@section('content')
    <section
        style='background-image:url({{asset('images/selected.jpg')}});'
        class="course-category-banner nitro-lazy">
        <div class="banner-overlay"></div>
        <div class="container-fluid">
            <ul class="breadcrumb clearfix" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{route('home')}}" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Agile Management</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ul>
            <h1>Agile Management</h1>
            <p> Master Scrum and the principles of Agile project management and unleash your team's potential to deliver
                more innovative solutions faster. Explore our course offerings. </p>
            <ul class="course-category-list clearfix">
                <li>
                    <div class="media">
                        <div class="media-left">
                            <img alt="enrolled" class="d-none d-sm-block nitro-lazy" src="{{asset('images/enrolled.png')}}"/>
                            <img alt="enrolled" class="d-block d-sm-none nitro-lazy" src="{{asset('images/enrolled.png')}}"/>
                        </div>
                        <div class="media-body"> 65000 Students Enrolled </div>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <div class="media-left">
                            <img alt="courses" class="d-none d-sm-block nitro-lazy" src="{{asset('images/courses.png')}}"/>
                            <img alt="courses" class="d-block d-sm-none nitro-lazy" src="{{asset('images/courses.png')}}"/>
                        </div>
                        <div class="media-body"> 77 Courses </div>
                    </div>
                </li>
            </ul>
            <ul class="course-category-enroll clearfix">
                <li> <a class="btn btn-black" data-toggle="modal" data-target=".contact-learning-advisor-modal"
                        href="javascript:void(0)"> CONTACT LEARNING ADVISOR <span class="right-arrow"> <i class="common-icons right-arrow-icon nitro-lazy"></i> </span> </a> </li>
                <li> </li>
            </ul>
        </div>
    </section>
    <section class="courses-datascience popular-courses">
        <div class="container-fluid">
            <h2>Top Agile Management Courses</h2>
            <div class="courses-datascience-main popular-courses-summary">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> </div>
                                <div class="course-name"> Certified Agile Leadership (CAL-1) Certification </div>
                                <ul class="course-content">
                                    <li>16 hours of Live Instructor led sessions</li>
                                    <li>Get 16 PDUs and 16 SEUs on course completion</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 4.5 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'certified-agile-leadership-cal-1-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> <span class="badge">Trending</span> </div>
                                <div class="course-name"> Certified ScrumMaster (CSM)® </div>
                                <ul class="course-content">
                                    <li>16 hrs of live instructor-led sessions and experiential workshops</li>
                                    <li>Get trained by Scrum Alliance CSTs and earn 16 PDUs and SEUs</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                    <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 16 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 5 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'csm-certification-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> <span class="badge">Trending</span> </div>
                                <div class="course-name"> Certified Scrum Product Owner<sup>®</sup>(CSPO) Certification
                                </div>
                                <ul class="course-content">
                                    <li>16 hrs of live instructor-led sessions and experiential workshops</li>
                                    <li>Get trained by Scrum Alliance CSTs and earn 16 PDUs and SEUs</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-770 nitro-lazy"></i></li>
                                    <li><i class="icons-course course-769 nitro-lazy"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 16 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 5 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'cspo-certification-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> <span class="badge">Trending</span> </div>
                                <div class="course-name"> Leading SAFe® 5 Certification </div>
                                <ul class="course-content">
                                    <li>Learn to lead Agile transformations in enterprises</li>
                                    <li>Get trained by SAFe Program Consultants; earn 16 PDUs &amp; SEUs</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-820 nitro-lazy"></i></li>
                                    <li><i class="accrediation acdtn-page-30"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 16 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 5 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'leading-safe-certification-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> <span class="badge">Trending</span> </div>
                                <div class="course-name"> Professional Scrum Master™ I (PSM I) Training </div>
                                <ul class="course-content">
                                    <li>16 hrs of live instructor-led sessions and experiential workshops</li>
                                    <li>Get trained by certified PSTs and earn 16 PDUs and SEUs</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-797 nitro-lazy"></i></li>
                                    <li><i class="accrediation acdtn-page-15"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 16 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 4 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'psm-certification-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> </div>
                                <div class="course-name"> SAFe® 5 Product Owner/Product Manager(POPM) </div>
                                <ul class="course-content">
                                    <li>Earn 16 PDUs and 15 SEUs in a 2-day interactive workshop</li>
                                    <li>Preparation &amp; eligibility for the&nbsp;SAFe®&nbsp;5&nbsp;Product Owner/POPM exam
                                    </li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-818 nitro-lazy"></i></li>
                                    <li><i class="accrediation acdtn-page-30"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 16 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 4 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'safe-product-manager-product-owner-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> </div>
                                <div class="course-name"> ICP Agile Certified Coaching (ICP-ACC) </div>
                                <ul class="course-content">
                                    <li>Develop the agile mindset</li>
                                    <li>Master team dynamics and conflict handling</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-817 nitro-lazy"></i></li>
                                    <li><i class="accrediation acdtn-page-14"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 24 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 4.5 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'icp-agile-certified-coach-icp-acc-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-thumb-summary">
                            <div class="course-thumb">
                                <div class="badge-section"> </div>
                                <div class="course-name"> SAFe® 5 Scrum Master with SSM Certification </div>
                                <ul class="course-content">
                                    <li>2-day training for the SAFe®&nbsp;5 Scrum Master certification exam</li>
                                    <li>16 PDUs and 16 SEUs(under category C) on course completion</li>
                                </ul>
                                <ul class="accrd-bodies clearfix">
                                    <li><i class="icons-course course-824 nitro-lazy"></i></li>
                                    <li><i class="accrediation acdtn-page-30"></i></li>
                                </ul>
                                <div class="course-summary">
                                    <ul class="course-hours">
                                        <li> 16 Hrs </li>
                                        <li> <i class="common-icons black-star nitro-lazy"></i> 4 </li>
                                    </ul>
                                </div>
                                <a href="{{route('courses.course.subcourse',['course'=>'agile-management','subcourse'=>'safe-40-scrum-master-with-ssm-certification-training'])}}" class="course-enroll loader"> START LEARNING </a>
                            </div>
                        </div>
                    </div>
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
                        <div class="filter-category d-block d-md-none">
                            <p class="pull-left">Other Categories</p>
                            <select class="form-control" onchange="location = this.value;">
                                <option value="https://www.knowledgehut.com/courses">All</option>
                                <option value="https://www.knowledgehut.com/agile-management" selected>Agile Management
                                </option>
                                <option value="https://www.knowledgehut.com/project-management">Project Management</option>
                                <option value="https://www.knowledgehut.com/data-science">Data Science</option>
                                <option value="https://www.knowledgehut.com/devops">DevOps</option>
                                <option value="https://www.knowledgehut.com/cloud-computing">Cloud Computing</option>
                                <option value="https://www.knowledgehut.com/it-service-management">IT Service Management
                                </option>
                                <option value="https://www.knowledgehut.com/business-intelligence-and-visualization">BI and
                                    Visualization</option>
                                <option value="https://www.knowledgehut.com/big-data">Big Data</option>
                                <option value="https://www.knowledgehut.com/programming">Programming</option>
                                <option value="https://www.knowledgehut.com/web-development">Web Development</option>
                                <option value="https://www.knowledgehut.com/mobile-app-development">Mobile App Development
                                </option>
                                <option value="https://www.knowledgehut.com/software-testing">Software Testing</option>
                                <option value="https://www.knowledgehut.com/business-management">Business Management
                                </option>
                                <option value="https://www.knowledgehut.com/quality-management">Quality Management</option>
                                <option value="https://www.knowledgehut.com/it-security">IT Security</option>
                                <option value="https://www.knowledgehut.com/digital-marketing-courses">Digital marketing
                                </option>
                                <option value="https://www.knowledgehut.com/risk-management">Risk Management</option>
                                <option value="https://www.knowledgehut.com/finance">Finance</option>
                                <option value="https://www.knowledgehut.com/database">Database</option>
                                <option value="https://www.knowledgehut.com/soft-skills-training">Soft Skills Training
                                </option>
                                <option value="https://www.knowledgehut.com/comptia-courses">CompTIA</option>
                                <option value="https://www.knowledgehut.com/other-courses">Other</option>
                            </select>
                            <img alt="down arrow"
                                nitro-lazy-src="https://cdn-cllme.nitrocdn.com/fsJtPHuAIrjqkSrOmOGUpPSluVVKYWgR/assets/static/optimized/rev-848c0e2/assets/images_3_0/mob-down-arrow.png"
                                class="nitro-lazy" nitro-lazy-empty id="MTYzNzoxMjQ=-1"
                                src="data:image/svg+xml;nitro-empty-id=MTYzNzoxMjQ=-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTQgOSIgd2lkdGg9IjE0IiBoZWlnaHQ9IjkiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PC9zdmc+" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-none d-md-block">
                <div class="col-xl-12">
                    <div class="sortby-categories">
                        <ul class="clearfix">
                            <li> <a href="https://www.knowledgehut.com/courses">All</a> </li>
                            <li> <a href="https://www.knowledgehut.com/project-management"
                                    title="Project Management">Project Management</a> </li>
                            <li> <a href="https://www.knowledgehut.com/data-science" title="Data Science">Data Science</a>
                            </li>
                            <li> <a href="https://www.knowledgehut.com/devops" title="DevOps">DevOps</a> </li>
                            <li> <a href="https://www.knowledgehut.com/cloud-computing" title="Cloud Computing">Cloud
                                    Computing</a> </li>
                            <li> <a href="https://www.knowledgehut.com/it-service-management"
                                    title="IT Service Management">IT Service Management</a> </li>
                            <li> <a href="https://www.knowledgehut.com/business-intelligence-and-visualization"
                                    title="BI and Visualization">BI and Visualization</a> </li>
                            <li> <a href="https://www.knowledgehut.com/big-data" title="Big Data">Big Data</a> </li>
                            <li> <a href="https://www.knowledgehut.com/programming" title="Programming">Programming</a>
                            </li>
                            <li> <a href="https://www.knowledgehut.com/web-development" title="Web Development">Web
                                    Development</a> </li>
                            <li> <a href="https://www.knowledgehut.com/mobile-app-development"
                                    title="Mobile App Development">Mobile App Development</a> </li>
                            <li> <a href="https://www.knowledgehut.com/software-testing" title="Software Testing">Software
                                    Testing</a> </li>
                            <li> <a href="https://www.knowledgehut.com/business-management"
                                    title="Business Management">Business Management</a> </li>
                            <li> <a href="https://www.knowledgehut.com/quality-management"
                                    title="Quality Management">Quality Management</a> </li>
                            <li> <a href="https://www.knowledgehut.com/it-security" title="IT Security">IT Security</a>
                            </li>
                            <li> <a href="https://www.knowledgehut.com/digital-marketing-courses"
                                    title="Digital marketing">Digital marketing</a> </li>
                            <li> <a href="https://www.knowledgehut.com/risk-management" title="Risk Management">Risk
                                    Management</a> </li>
                            <li> <a href="https://www.knowledgehut.com/finance" title="Finance">Finance</a> </li>
                            <li> <a href="https://www.knowledgehut.com/database" title="Database">Database</a> </li>
                            <li> <a href="https://www.knowledgehut.com/soft-skills-training"
                                    title="Soft Skills Training">Soft Skills Training</a> </li>
                            <li> <a href="https://www.knowledgehut.com/comptia-courses" title="CompTIA">CompTIA</a> </li>
                            <li> <a href="https://www.knowledgehut.com/other-courses" title="Other">Other</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
