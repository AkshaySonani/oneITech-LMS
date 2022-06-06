@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css_3_0/minified/csm-certification-training.css')}}">
@endsection
@section('content')
<section style="background-image: url({{asset('images/5473e69d-bcf3-4250-b59d-bc45e815267b.png')}});" class="detail-banner with-banner lazyloaded">
    <div class="container">
        <div class="breadcrumb-share clearfix hidden-xs">
            <div class="pull-left">
                <div class="basic-breadcrumb">
                    <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a href="{{route('home')}}" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a href="{{route('courses.course',['course'=>'agile-management'])}}" itemprop="item"><span itemprop="name">Agile Management</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <span itemprop="name">CSM® Certification
                                Training</span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ol>
                </div>
            </div>
            <div class="pull-right">
                <div class="refer-share">
                    <div class="social-sharing"> Share <a rel="nofollow" href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> <a rel="nofollow" href="#" target="_blank"> <i class="fa fa-twitter"></i> </a> <a rel="nofollow" href="#" target="_blank"> <i class="fa fa-linkedin"></i> </a> <a rel="nofollow" href="#" target="_blank"> <i class="fa fa-whatsapp"></i> </a> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <h1>CSM® Certification Training</h1>
                <h2>Become an exceptional Scrum Master with real-time Scrum activities and simulations</h2>
                <ul class="key-list">
                    <li>Experiential learning with Case studies, Scrum Activities, Role plays, &amp; Simulations
                    </li>
                    <li>Earn 16 PDUs and 16 SEUs (Live Virtual and Classroom Training available)</li>
                    <li>Enjoy 2-year membership with Scrum Alliance</li>
                    <li>Get trained by globally renowned Certified Scrum Trainers (CSTs)</li>
                    <li>Global Registered Education Ally (REA) of Scrum Alliance</li>
                </ul>
                <div class="visible-xs brand-img"> <img height="82" width="198" nitro-lazy-src="https://cdn-cllme.nitrocdn.com/fsJtPHuAIrjqkSrOmOGUpPSluVVKYWgR/assets/static/optimized/rev-f20475c/assets/images/course-icons/csm-certification-training-5.png" class="nitro-lazy" nitro-lazy-empty="" id="MTMwNzoxNzY=-1" src="data:image/svg+xml;nitro-empty-id=MTMwNzoxNzY=-1;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTk4IDgyIiB3aWR0aD0iMTk4IiBoZWlnaHQ9IjgyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjwvc3ZnPg==">
                </div>
                <div class="schedule-btn">
                    <a target="_blank" href="{{route('course.schedule',['course' => 'agile-management','subcourse' => 'csm-certification-training'])}}" class="btn btn-success " rel="nofollow" data-text="View Schedules">View Schedules</a>
                    <a href="javascript:void(0)" class="btn btn-default" data-toggle="modal" data-target="#course-advisor-modal"> Contact Course Advisor </a>
                </div>
                <ul class="social-numbers list-inline clearfix hidden-xs"> <img height="82" width="198" id="MTMxNjoxODQ=-1" src="{{asset('images/2.png')}}">
                    <li> <i class="fa fa-google"></i> 4.8/5 </li>
                    <li> <i class="fa fa-facebook"></i> 4.5/5 </li>
                    <li> <i class="fa fa-star"></i> 4.7/5 </li>
                </ul>
            </div>
            <div class="col-md-5 hidden-xs hidden-sm"> </div>
        </div>
        <ul class="course-sum clearfix">
            <li>
                <h3>350000<span>+</span></h3>
                <p>Professionals trained on Scrum</p>
            </li>
            <li>
                <h3>250<span>+</span></h3>
                <p>CSM Workshops every month</p>
            </li>
            <li>
                <h3>100<span>+</span></h3>
                <p>Countries and Counting</p>
            </li>
            <li>
                <h3>300<span>+</span></h3>
                <p>Organizations transformed to Agile</p>
            </li>
        </ul>
        <ul class="social-numbers list-inline visible-xs">
            <li> <i class="fa fa-google"></i> 4.8/5 </li>
            <li> <i class="fa fa-facebook"></i> 4.5/5 </li>
            <li> <i class="fa fa-star"></i> 4.7/5 </li>
        </ul>
        <div class="clearfix visible-xs group-refer">
            <div class="pull-left" data-type="ssg-ibf"> <a class="group-discount" rel="nofollow" style="cursor:pointer;" data-toggle="popover" data-placement="bottom" data-trigger="focus" href="javascript:void(0)" data-href="https://www.knowledgehut.com/courses/ajax_get_group_discounts_by_course_id/21/1" data-original-title="" title=""> <span>Group Discount </span> <i class="fa fa-angle-right"></i>
                </a> </div>
            <div class="pull-right" data-type="ssg-ibf" data-ssg-class="text-center"> <a href="javascript:void(0)" class="refer-content" data-toggle="modal" data-target="#referandearn"> Refer and earn <i class="fa fa-angle-right"></i> </a> </div>
        </div>
        <div class="visible-xs corporate-mobile text-center "> <a href="javascript:void(0)" data-toggle="modal" data-target="#request-a-custom-quote-modal"> Corporate Training <i class="fa fa-angle-right"></i>
            </a> </div>
    </div>
</section>
<div class="detail-sticky-overview hidden-xs hidden-sm">
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 49px;">
        <div class="detail-sticky">
            <div class="container">
                <ul class="nav nav-horizontal clearfix">
                    <li class=""> <a href="#overview-4" data-section="overview">Overview</a> </li>
                    <li class=""> <a href="#prerequisite-1" data-section="prerequisite">Prerequisites</a> </li>
                    <li class=""> <a href="#knowledgehut-experience-1" data-section="kh-experience">Why Knowledgehut</a> </li>
                    <li class=""> <a href="#curriculum-1" data-section="curriculum">Curriculum</a> </li>
                    <li class=""> <a href="#career-path-1" data-section="career-path">Career Path</a> </li>
                    <li class=""> <a href="#corporate-group-registration-1" data-section="corporate-group-registration">Corporates</a> </li>
                    <li class=""> <a href="#faq-1" data-section="faq">FAQs</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="course-summary" data-sticky_parent="">
    <section class="pattern-1" id="overview-4" data-igggggg="456" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">BECOME AN EXPERT SCRUM MASTER</h2> <a data-type="ssg-ibf" class="group-discount hidden-xs" rel="nofollow" style="cursor:pointer;" data-toggle="popover" data-placement="bottom" data-trigger="focus" href="javascript:void(0)" data-href="https://www.knowledgehut.com/courses/ajax_get_group_discounts_by_course_id/21/1" data-original-title="" title=""> <i class="course-sprite offer-icon lazyloaded"></i>
                        <span>Group Discount </span> upto 15 % </a>
                    <div class="editor-content">
                        <p>Scrum, an Agile framework has been picking up momentum in creating innovation and
                            improving productivity across organizations. A high-performing Scrum team always
                            contributes to the success of an Agile project and the Scrum Master is the main person
                            responsible for steering the project in the right direction. The Certified ScrumMaster®
                            (CSM®) course boosts your confidence in implementing the Scrum framework effectively in
                            organizations.</p>
                        <h3 style="font-family:Roboto,&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;line-height:1.53846;color:#333;">
                            <b>WHY YOU SHOULD GO FOR THE CSM CERTIFICATION</b>
                        </h3>
                        <p></p>
                        <p><img src="{{asset('images/download.png')}}" data-filename="download (1).png" style="width:816px;"><br></p>
                        <p>As a Certified ScrumMaster, you will be known as being part of an elite group engaged
                            with Scrum Alliance. The members of Scrum Alliance are meant to be Scrum specialists,
                            guiding the project teams to success. Here is why CSM® certification should be a part of
                            your skill set:</p>
                        <p></p>
                        <p></p>
                        <ul>
                            <ul></ul>
                        </ul>
                        <p></p>
                        <ul>
                            <li>Based on the recent salary survey by Ziprecruiter, the average annual salary for the
                                Certified ScrumMaster is $116,659 a year.</li>
                            <li>CSM® certification enables you to work across major companies like IBM, Tata
                                Consultancy Services, CapGemini, Honeywell, BOSCH, Accenture, Deloitte and many more
                                in several job roles, such as:</li>
                            <ul>
                                <li>Scrum Master</li>
                                <li>Delivery Lead</li>
                                <li>Agile Scrum Master</li>
                                <li>Program Manager</li>
                                <li>Project Manager</li>
                                <li>Agile Coach</li>
                                <li>Automation Engineer</li>
                                <li>Project Lead</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="patterns-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"> <a href="#overview-4-tab-43-1" aria-controls="overview-4-tab-43-1" role="tab" data-toggle="tab">Organizational Benefits</a> </li>
                            <li role="presentation"> <a href="#overview-4-tab-43-2" aria-controls="overview-4-tab-43-2" role="tab" data-toggle="tab">Individual Benefits</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show in" id="overview-4-tab-43-1">
                                <div class="editor-content">
                                    <p>Today, most of the IT as well as non-IT industry majors are hiring candidates
                                        who are familiar with the Scrum framework. A Certified ScrumMaster® can
                                        upscale an organization in the following ways:&nbsp;&nbsp;</p>
                                    <ul>
                                        <li>Guide team members through the product development</li>
                                        <li>Help the team deliver quality products</li>
                                        <li>Participate in the team activities with ease and also learn how to own a
                                            task</li>
                                        <li>Resolve the impediments and enhance the team’s collaboration</li>
                                        <li>Act as a change agent and enable a culture in which teams can flourish
                                        </li>
                                        <li>Become a servant leader for Scrum teams that are involved in developing
                                            high-end products</li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="overview-4-tab-43-2">
                                <div class="editor-content">
                                    <p>Scrum framework believes in ‘self-organization’. Making a career in Scrum as
                                        a Scrum Master will help an individual to-</p>
                                    <ul>
                                        <li>Gain a high degree of proficiency in executing Scrum.</li>
                                        <li>Contribute in creating a healthy work environment.</li>
                                        <li>Earn the skills that make an individual immune to internal and external
                                            distractions.</li>
                                        <li>Become self-motivated to escalate the performance of the team.</li>
                                        <li>Get more job opportunities in IT as well as non-IT organizations with a
                                            good pay.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process-steps" id="process-steps-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">Process to become a Certified Scrum Master</h2>
                    <div class="step-by-step-process">
                        <h3>Steps to become a CSM</h3> <img src="{{asset('images/steps_to_become_a_csm.webp')}}">
                        <ul>
                            <li>
                                <p><b>Step 1:&nbsp;</b>Follow an easy and hassle-free approach to register on
                                    KnowledgeHut, a Global REA of Scrum Alliance (SA).</p>
                            </li>
                            <li>
                                <p><b>Step 2:</b> Take the 2-day CSM course and get instructed by Certified Scrum
                                    Trainers® (CSTs).</p>
                            </li>
                            <li>
                                <p><b>Step 3:</b> SA will send you a link to create login credentials on successful
                                    completion of course.</p>
                            </li>
                            <li>
                                <p><b>Step 4: </b>Click on the link received from Scrum Alliance and create your own
                                    login credentials.</p>
                            </li>
                            <li>
                                <p><b>Step 5:</b> Take the 1 hour online CSM® test which comprises of 50 MCQs by
                                    using those credentials.</p>
                            </li>
                            <li>
                                <p><b>Step 6: </b>Score a minimum of&nbsp; 74% to pass the CSM® test, after
                                    completing the course.</p>
                            </li>
                            <li>
                                <p><b>Step 7: </b>Once the test is cleared, you will be requested to accept a
                                    license agreement.</p>
                            </li>
                            <li>
                                <div><b>Step 8: </b>After accepting it, you will receive CSM designation &amp; a
                                    2-year membership from SA.&nbsp;Also, refer to our getting started
                                    guide:&nbsp;<a href="#" target="_blank" style="background-color:#fff;">How To Become A Certified
                                        Scrum Master</a>.</div>
                            </li>
                            <li>
                                <p><b>Step 9:&nbsp;</b>You have to&nbsp;<a href="#" target="_blank" style="background-color:#fff;" rel="nofollow">renew the
                                        certification</a>&nbsp;once every two years.<br></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-you-will-learn-1" id="what-you-will-learn-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3>What You Will Learn in this CSM Workshop</h3>
                    <div class="learn-overview hidden-xs">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>1. Learn Fundamentals</h4>
                                    <p>Understand the foundation of Agile and Scrum concepts and help Scrum teams in
                                        using Scrum effectively.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>2. Terminologies and Concepts</h4>
                                    <p>Acquire knowledge of Scrum terminologies, various concepts, and the complete
                                        Scrum process.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>3. Scrum Roles</h4>
                                    <p>Understand various roles involved in Scrum and the scope of the Scrum Master
                                        role in Scrum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>4. Core Competencies</h4>
                                    <p>Learn key Scrum Master core competencies and protect the team from internal
                                        and external distractions.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>5. Scrum Ceremonies</h4>
                                    <p>Daily Scrum, Sprint Review, Sprint Retrospective, Product Backlog, Sprint
                                        Backlog, Definition of Done.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>6. Facilitate Teams</h4>
                                    <p>Facilitate the Development Team, Product Owner, and the organization while
                                        responding to change.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>7. Improve Transparency</h4>
                                    <p>Inspect and adapt and increase transparency in each of the Scrum events and
                                        make the team’s work visible.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="learn-overview-list editor-content">
                                    <h4>8. Acts as a Servant Leader</h4>
                                    <p>Learn to help the team members work collaboratively and follow every Scrum
                                        process involved in it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="learn-overview visible-xs">
                        <div class="owl-carousel owl-theme" style="opacity: 0; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1600px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>1. Learn Fundamentals</h4>
                                                <p>Understand the foundation of Agile and Scrum concepts and help
                                                    Scrum teams in using Scrum effectively.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>2. Terminologies and Concepts</h4>
                                                <p>Acquire knowledge of Scrum terminologies, various concepts, and
                                                    the complete Scrum process.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>3. Scrum Roles</h4>
                                                <p>Understand various roles involved in Scrum and the scope of the
                                                    Scrum Master role in Scrum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>4. Core Competencies</h4>
                                                <p>Learn key Scrum Master core competencies and protect the team
                                                    from internal and external distractions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>5. Scrum Ceremonies</h4>
                                                <p>Daily Scrum, Sprint Review, Sprint Retrospective, Product
                                                    Backlog, Sprint Backlog, Definition of Done.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>6. Facilitate Teams</h4>
                                                <p>Facilitate the Development Team, Product Owner, and the
                                                    organization while responding to change.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>7. Improve Transparency</h4>
                                                <p>Inspect and adapt and increase transparency in each of the Scrum
                                                    events and make the team’s work visible.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 100px;">
                                        <div class="item">
                                            <div class="learn-overview-list editor-content">
                                                <h4>8. Acts as a Servant Leader</h4>
                                                <p>Learn to help the team members work collaboratively and follow
                                                    every Scrum process involved in it.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="prerequisites" id="prerequisite-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-2">
                            <h5 class="text-uppercase">Prerequisites</h5>
                        </div>
                        <div class="col-md-10">
                            <div class="editor-content">
                                <p>There is no set of eligibility requirements to attend this <a href="#" target="_blank">Scrum Master Certification </a>course and it can be
                                    taken&nbsp;by freshers&nbsp;or professionals who want to:&nbsp;&nbsp;</p>
                                <ul>
                                    <li data-leveltext="●" data-font="Arial, Arial_MSFontService, sans-serif" data-listid="9" aria-setsize="-1" data-aria-posinset="2" data-aria-level="1">Further&nbsp;their career in&nbsp;project
                                        management.&nbsp;</li>
                                    <li data-leveltext="●" data-font="Arial, Arial_MSFontService, sans-serif" data-listid="9" aria-setsize="-1" data-aria-posinset="3" data-aria-level="1">Deepen their understanding of Scrum.&nbsp;</li>
                                </ul>
                                <p> </p>
                                <p>Our experienced CSTs deliver training in such a way that is
                                    suitable&nbsp;for&nbsp;both novice&nbsp;and experienced professionals.&nbsp;But,
                                    it is recommended that you have basic knowledge of using Scrum in a real-world
                                    context, in order to get the most from the training. You can do this by
                                    following the 1-day&nbsp;<a href="#" target="_blank">Agile and Scrum foundation training</a>&nbsp;by
                                    KnowledgeHut.&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="who-should-attend-1" id="who-should-attend-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Who Usually Attend CSM Training</h2>
                    <ul class="clearfix">
                        <li>Software Engineers</li>
                        <li>Product Managers</li>
                        <li>Project Managers</li>
                        <li>Team Leaders</li>
                        <li>Business Analysts</li>
                        <li>Development team members</li>
                        <li>Testers</li>
                        <li>Anyone who would like to build a career as a Scrum Master</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="experience-1" id="knowledgehut-experience-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">KnowledgeHut Experience</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-1"></i> </div>
                                    <div class="media-body">
                                        <h4>EXPERIENTIAL WORKSHOPS</h4>
                                        <div class="editor-content">
                                            <p>Learn from the real-world experience of accredited industry experts
                                                and take advantage of engaging in-class activities and simulations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-2"></i> </div>
                                    <div class="media-body">
                                        <h4>ELITE PANEL OF CSTs</h4>
                                        <div class="editor-content">
                                            <p>Interact with accredited CSTs who also have years of experience as
                                                active Scrum practitioners.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-3"></i> </div>
                                    <div class="media-body">
                                        <h4>MENTORSHIP BY INDUSTRY EXPERTS</h4>
                                        <div class="editor-content">
                                            <p>Get real-world tips and time-tested techniques from highly qualified
                                                mentors with industry experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-4"></i> </div>
                                    <div class="media-body">
                                        <h4>GATEWAY TO SCRUM COMMUNITIES</h4>
                                        <div class="editor-content">
                                            <p>Get access to a wider community of active Scrum professionals and
                                                enhance your practical knowledge of Scrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-5"></i> </div>
                                    <div class="media-body">
                                        <h4>CONTINUOUS LEARNING AND SUPPORT</h4>
                                        <div class="editor-content">
                                            <p>Avail continuous support through monthly webinars, e-books, and
                                                conferences and keep pace with the latest industry updates.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-6"></i> </div>
                                    <div class="media-body">
                                        <h4>POST-CLASS CAREER SUPPORT</h4>
                                        <div class="editor-content">
                                            <p>Six months of post-training mentor guidance to overcome challenges in
                                                your Scrum career and accelerate professional growth.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-7"></i> </div>
                                    <div class="media-body">
                                        <h4>GLOBAL REA</h4>
                                        <div class="editor-content">
                                            <p>KnowledgeHut is a Scrum Alliance Registered Education Ally (REA);
                                                several thousands of professionals trained across 100+
                                                countries.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="experience-list">
                                <div class="media">
                                    <div class="media-left"> <i class="lazy bg-experience-icons experience-1-csm-a-8"></i> </div>
                                    <div class="media-body">
                                        <h4>100% SUCCESS GUARANTEED</h4>
                                        <div class="editor-content">
                                            <p>Our CSM training program comes with a 100% Success Rate and 100%
                                                Money-Back Guarantee. Over 35,000+ professionals trained globally!
                                            </p>
                                            <p><br></p>
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
    <section class="curriculum" id="curriculum-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">CSM Course Curriculum from Scrum Alliance</h2>
                    <div class="panel-group accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="heading-curriculum-11">
                                <h4 class="panel-title"> <a class="" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-11" aria-expanded="true" aria-controls="collapse-curriculum-11"> <span class="left">1</span> <span class="right">Agile and Scrum
                                            Overview</span> </a> </h4>
                            </div>
                            <div id="collapse-curriculum-11" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-curriculum-11">
                                <div class="panel-body editor-content">
                                    <p>Get familiar with the 12 principles and 4 values stated in the Agile
                                        Manifesto through our popular in-class activity- “Draw and demonstrate”.
                                        Herein, you will be asked to form groups and illustrate all 12 principles
                                        pictorially.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong></p>
                                    <p>At the end of this activity, you will be able to-<strong><br></strong></p>
                                    <ul>
                                        <li>Explain the 12 principles and 4 values listed in the Agile Manifesto.
                                        </li>
                                        <li>Demonstrate the benefits of “responding to change” in Agile over
                                            “following a plan” in traditional project management.</li>
                                        <li>Describe how the Scrum values (courage, focus, commitment, respect,
                                            openness) relate to the Scrum artifacts, events, and roles.</li>
                                        <li>List and explain the three pillars in Scrum ― Transparency, Inspection,
                                            Adaptation.</li>
                                        <li>Explain the differences between framework and methodology and understand
                                            why Scrum is called a framework.</li>
                                        <li>List 5 ways to develop an Agile mindset.</li>
                                        <li>Illustrate 2 differences between Agile and Scrum and explain why these
                                            two terms cannot be used interchangeably.</li>
                                    </ul>
                                    <p><strong>Topics covered<br></strong></p>
                                    <ul>
                                        <li>Agile Manifesto</li>
                                        <li>12 Principles</li>
                                        <li>4 values</li>
                                        <li>Scrum Foundations (5 Scrum Values)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-12">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-12" aria-expanded="false" aria-controls="collapse-curriculum-12"> <span class="left">2</span> <span class="right">The three roles in
                                            Scrum</span> </a> </h4>
                            </div>
                            <div id="collapse-curriculum-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-12">
                                <div class="panel-body editor-content">
                                    <p>Learn more about the three roles in Scrum with role-based activities. Each
                                        group will play a simulation game called “candy catch” that will have three
                                        iterations. The Scrum Master and Product Owner (chosen by group members)
                                        will coordinate and help the team achieve the highest target within the
                                        shortest time.</p>
                                    <p><strong><br>What you will learn</strong></p>
                                    <p>At the end of this activity, you will be able to-<strong><br></strong></p>
                                    <ul>
                                        <li>Conduct a retrospective to list 3 techniques to improve the performance
                                            and turnaround time.</li>
                                        <li>Explain the <a href="#" target="_blank">roles and responsibilities</a> of a Scrum Master and
                                            a Product Owner.</li>
                                        <li>List 3 differences between a Scrum Master and a Product Owner and
                                            understand why these two roles should not overlap.</li>
                                        <li>Discuss how a product owner acts as a bridge between the development
                                            team and the stakeholders.</li>
                                        <li>Understand why a Scrum Master is not an active participant but a
                                            facilitator in the Scrum events and ceremonies.</li>
                                        <li>List 3 demerits of having a development team of less than 3 members or
                                            greater than 10 members.</li>
                                    </ul>
                                    <p><strong>Topics covered<br></strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Scrum Master roles and challenges</li>
                                        <li>Product Owner roles and responsibilities</li>
                                        <li>Development team roles and responsibilities</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-13">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-13" aria-expanded="false" aria-controls="collapse-curriculum-13"> <span class="left">3</span> <span class="right">Scrum Ceremonies</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-13">
                                <div class="panel-body editor-content">
                                    <p>Take part in the Scrum Paper Plane game and learn how the 5 Scrum ceremonies
                                        work. There will be 3 sprints, each lasting 15 minutes. You need to prepare
                                        the user stories that will cover the features and functionalities along with
                                        acceptance criteria.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong></p>
                                    <p>At the end of this activity, you will be able to-<strong><br></strong></p>
                                    <ul>
                                        <li>Explain the “why” and “how” of sprint planning, daily scrum, sprint
                                            review, and retrospective.</li>
                                        <li>Understand why the scope and duration of a sprint are fixed.</li>
                                        <li>List 3 ways to avoid sprint backlog spillover.</li>
                                        <li>Define sprint goals and discuss 5 benefits of having a sprint goal.</li>
                                        <li>Understand how the Scrum Master and the Product Owner should coordinate
                                            with the team and list 5 points to improve such communications.</li>
                                        <li>Discuss 3 damaging impacts of sprint cancellation and how to avoid it.
                                        </li>
                                        <li>List 10 sprint anti-patterns (E.g. sprint cancellation, variable sprint
                                            length) and understand how these impact the delivery and turnaround
                                            time.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Sprint planning</li>
                                        <li>Daily Scrum</li>
                                        <li>Sprint Review</li>
                                        <li>Sprint Retrospective</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-14">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-14" aria-expanded="false" aria-controls="collapse-curriculum-14"> <span class="left">4</span> <span class="right">Scrum Artifacts</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-14">
                                <div class="panel-body editor-content">
                                    <p>Experience how scrum works in real projects with our simulation game “Crime
                                        Teller”. The activity will be divided into 3 sprints, wherein the
                                        participants will actively employ Product backlog refinement among other
                                        scrum artifacts to solve a given “crime” story.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>List and demonstrate 5 salient features of a well-formed product backlog
                                            (E.g. estimated, prioritized).</li>
                                        <li>Discuss 2 responsibilities of the Product Owner, Scrum Master, and the
                                            Development team in creating and maintaining a product backlog.</li>
                                        <li>The objective of having a product backlog and best approaches to product
                                            backlog refinement.</li>
                                        <li>Analyze and discuss the ideal time and capacity to be dedicated to
                                            product backlog refinement.</li>
                                        <li>Demonstrate 3 activities (E.g. budget and timeline, release schedule)
                                            that take place during a sprint review.</li>
                                        <li>List 5 sprint review anti-patterns (E.g. delayed &nbsp;&nbsp;acceptance)
                                            and their negative impacts</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Product Backlog</li>
                                        <li>Sprint Backlog</li>
                                        <li>Product Increment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-15">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-15" aria-expanded="false" aria-controls="collapse-curriculum-15"> <span class="left">5</span> <span class="right">Sprint Execution</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-15">
                                <div class="panel-body editor-content">
                                    <p>Learn about Scrum life cycle by taking part in the “coin game”. The
                                        participants will be linking ceremonies to create effective sprint goals.
                                        This module will focus on the common challenges in sprint execution and
                                        enable team members to improvise.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Explain the difference between resolution meetings and daily standups.
                                        </li>
                                        <li>Explain the benefits of collaborations with product owners.</li>
                                        <li>List 3 demerits of over collaboration of the product owners.</li>
                                        <li>Demonstrate 3 ways to break the barriers and collaborate</li>
                                        <li>Demonstrate creation of sprint burndown chart</li>
                                        <li>Explain 3 approaches to increase efficiency in the team</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Sprint Execution Planning</li>
                                        <li>Flow management</li>
                                        <li>Resolution meetings</li>
                                        <li>Communication (Taskboard, Sprint burndown chart using story points,
                                            hours effort)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-16">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-16" aria-expanded="false" aria-controls="collapse-curriculum-16"> <span class="left">6</span> <span class="right">Daily Scrum and Sprint
                                            Retrospective</span> </a> </h4>
                            </div>
                            <div id="collapse-curriculum-16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-16">
                                <div class="panel-body editor-content">
                                    <p>Play the “Marshmellow Tower” game and learn more about daily scrum and sprint
                                        retrospective in real scrum projects. The tallest tower built with the
                                        minimum raw materials and in the shortest time frame will win. Acceptance
                                        criteria will be defined by the instructor.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Explain the importance of 15-minute timebox for daily scrum meetings.
                                        </li>
                                        <li>List 3 differences between traditional meetings and daily stand-ups.
                                        </li>
                                        <li>Describe 2 roles played by the Scrum Master, Product Owner, and the
                                            Development team in daily scrum.</li>
                                        <li>List the 3 critical questions pertaining to the daily scrum agenda.</li>
                                        <li>List 2 responsibilities of the Scrum Master, Product Owner, and the
                                            Development team during the sprint retrospective.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Activities in daily scrum</li>
                                        <li>Activities in sprint retrospective</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-17">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-17" aria-expanded="false" aria-controls="collapse-curriculum-17"> <span class="left">7</span> <span class="right">Definition of Done (DoD) and
                                            Acceptance Criteria</span> </a> </h4>
                            </div>
                            <div id="collapse-curriculum-17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-17">
                                <div class="panel-body editor-content">
                                    <p>Familiarise yourself with Definition of Done (DoD) and Acceptance Criteria
                                        with the “Crazy Juggler” game wherein you need to pass a fixed number of
                                        balls to non-adjacent team members within a certain time frame and collect
                                        them in a paper bag once marked as “done”.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Explain Definition of Done at three levels ― user story (e.g. writing
                                            code), sprint, and release (e.g. preparing release notes).</li>
                                        <li>List 3 benefits of Definition of Done and explain why it can evolve over
                                            a certain period of time.</li>
                                        <li>Prepare a checklist (with a minimum of 7 entries) of an ideal DoD.</li>
                                        <li>Mention 3 risks associated with an ill-formed DoD.</li>
                                        <li>List 5 characteristics of good acceptance criteria.</li>
                                        <li>Understand who all should be involved in drafting the acceptance
                                            criteria.</li>
                                        <li>List 3 negative impacts of not following the acceptance criteria.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Definition of Done for a feature (user story or product backlog item)
                                        </li>
                                        <li>Definition of Done for a sprint</li>
                                        <li>Definition of Done for a release</li>
                                        <li>Definition of Done vs. Acceptance criteria</li>
                                        <li>Done vs. Done-Done.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-18">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-18" aria-expanded="false" aria-controls="collapse-curriculum-18"> <span class="left">8</span> <span class="right">Definition of Ready</span>
                                    </a> </h4>
                            </div>
                            <div id="collapse-curriculum-18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-18">
                                <div class="panel-body editor-content">
                                    <p>Acquaint yourself with the Definition of Ready with our Lego blocks game
                                        wherein the attendees will be asked to build a city out of Lego building
                                        blocks. The “definition of ready” checklist for the final deliverable will
                                        be determined by the instructor.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Create an ultimate checklist of Definition of Done.</li>
                                        <li>List 3 negative impacts of an ill-formed Definition of Done.</li>
                                        <li>Identify at least 3 benefits of a shared Definition of Done for multiple
                                            teams working on the same product backlog.</li>
                                        <li>List 2 ways to improve Definition of Done.</li>
                                        <li>Clearly understand the differences between “done” and “done done”.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Definition of Ready for user story</li>
                                        <li>Definition of Ready for sprint</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-19">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-19" aria-expanded="false" aria-controls="collapse-curriculum-19"> <span class="left">9</span> <span class="right">Release Planning</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-19">
                                <div class="panel-body editor-content">
                                    <p>Play the self-organization game “Human Knots” by forming teams of 5-6. Groups
                                        where team members can untie themselves first win. The time frame for this
                                        activity will be decided by your instructor. Each team will have a Scrum
                                        Master and Product Owner chosen by group members.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Define and understand the steps involved in release planning.</li>
                                        <li>List 3 benefits of a well-organized release planning.</li>
                                        <li>List 3 outputs of release planning.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Definition of release planning</li>
                                        <li>Who takes part in release planning</li>
                                        <li>Steps in Release planning</li>
                                        <li>Output of Release Planning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-110">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-110" aria-expanded="false" aria-controls="collapse-curriculum-110"> <span class="left">10</span> <span class="right">Sprint Burndown Chart</span>
                                    </a> </h4>
                            </div>
                            <div id="collapse-curriculum-110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-110">
                                <div class="panel-body editor-content">
                                    <p>Acquaint yourself with the Sprint Burndown Chart concepts by taking part in
                                        the ball point game. There will be 5 iterations and the number of points
                                        being expected at the end of the release will be communicated to the team.
                                    </p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Define and understand sprint burndown chart.</li>
                                        <li>List 3 primary reasons to use a burndown chart.</li>
                                        <li>Learn how to create and calculate a burndown chart.</li>
                                        <li>Explain how to adjust upcoming sprints based on the burndown.</li>
                                        <li>List 3 critical information obtained from a burndown chart.</li>
                                        <li>List 5 merits and 2 demerits of using a burndown chart.</li>
                                        <li>Understand 5 common errors that lead to misleading information in
                                            burndown charts.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Definition</li>
                                        <li>Why and when to use a sprint burndown chart</li>
                                        <li>Information obtained from sprint burndown chart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-111">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-111" aria-expanded="false" aria-controls="collapse-curriculum-111"> <span class="left">11</span> <span class="right">Release Burn-Up Chart</span>
                                    </a> </h4>
                            </div>
                            <div id="collapse-curriculum-111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-111">
                                <div class="panel-body editor-content">
                                    <p>Take part in the ball point game and understand the in-depth concepts of
                                        release burn-up charts and why Scrum teams use them. There will be 5
                                        iterations and once the sprint is completed, the team will put a mark on the
                                        release burn-up as to how many points are completed.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Understand the importance of having a release goal (based on historical
                                            data and agreement).</li>
                                        <li>Demonstrate the importance of release burn-up in understanding the
                                            current status.</li>
                                        <li>List 2 differences between burndown and burn-up charts.</li>
                                        <li>Explain how to adjust release planning (if needed) based on the burn
                                            down.</li>
                                        <li>Tell one primary advantage of a burnup chart over a burndown chart.
                                            &nbsp;</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <ul>
                                        <li>Definition</li>
                                        <li>Features</li>
                                        <li>How to create a release burn-up chart (steps)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-112">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-112" aria-expanded="false" aria-controls="collapse-curriculum-112"> <span class="left">12</span> <span class="right">Product Planning</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-112" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-112">
                                <div class="panel-body editor-content">
                                    <p><b>Topics covered</b></p>
                                    <ul>
                                        <li>What is product planning</li>
                                        <li>What is product vision</li>
                                        <li>How to create a product backlog</li>
                                        <li>Product Roadmap&nbsp;</li>
                                        <li>Minimum Releasable features (or) Minimum Marketable Features&nbsp;</li>
                                        <li>Minimum Viable Products</li>
                                    </ul>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-113">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-113" aria-expanded="false" aria-controls="collapse-curriculum-113"> <span class="left">13</span> <span class="right">User Stories</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-113">
                                <div class="panel-body editor-content">
                                    <p>Be a part of the Lego Building Blocks game wherein participants will be asked
                                        to write user stories for every activity involved. The game will entail 3
                                        iterations and attendees will prepare user stories that will cover the
                                        features and functionalities along with acceptance criteria.&nbsp;</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn&nbsp;</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>Define and explain user stories and understand the importance of user
                                            stories in real-time projects.</li>
                                        <li>Explain the 3 Cs in user stories.</li>
                                        <li>Discuss the importance of acceptance criteria and list 3 scenarios that
                                            might arise when the acceptance criteria are not met.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>What are user stories?</li>
                                        <li>Structure/format of user stories</li>
                                        <li>INVEST criteria</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-114">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-114" aria-expanded="false" aria-controls="collapse-curriculum-114"> <span class="left">14</span> <span class="right">Agile Estimation</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-114" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-114">
                                <div class="panel-body editor-content">
                                    <p>Learn more about the “what” and “how” of Agile estimation with our in-class
                                        Agile board game “Scrumble”. In an interactive setting, this game will let
                                        you analyze the common challenges faced by Scrum team members during
                                        implementing different estimation techniques in Agile.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn&nbsp;</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>List and demonstrate 5 benefits of Agile estimation.</li>
                                        <li>Understand the 7 popular Agile estimation techniques and decide which
                                            one is the best for your project.</li>
                                        <li>Discuss 3 benefits of Relative Estimation and Planning Poker.</li>
                                        <li>List and explain 3 common mistakes made while using Relative Estimation
                                            and their negative impacts.</li>
                                        <li>Discuss in detail the 5 critical steps in Planning Poker.&nbsp;</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Definition</li>
                                        <li>Benefits of Agile Estimation</li>
                                        <li>Agile estimation techniques</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-curriculum-115">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".accordion" href="#collapse-curriculum-115" aria-expanded="false" aria-controls="collapse-curriculum-115"> <span class="left">15</span> <span class="right">Planning Poker</span> </a>
                                </h4>
                            </div>
                            <div id="collapse-curriculum-115" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-curriculum-115">
                                <div class="panel-body editor-content">
                                    <p>Know everything about planning poker from our popular poker card estimation
                                        game. Team members/estimators have to privately select one card and the
                                        value on each card would represent the story point. Once all cards are
                                        revealed, the values need to be discussed.</p>
                                    <p><strong><br></strong></p>
                                    <p><strong>What you will learn&nbsp;</strong><br></p>
                                    <p>At the end of this activity, you will be able to-</p>
                                    <ul>
                                        <li>List 5 benefits of planning poker estimation technique.</li>
                                        <li>Decide the best sequence for the values (story points) on cards for your
                                            real-time projects.</li>
                                        <li>Discuss in detail the 5 critical steps in Planning Poker.&nbsp;</li>
                                        <li>List 3 points to heed for employing planning poker for distributed
                                            teams.</li>
                                    </ul>
                                    <p><strong>Topics covered</strong></p>
                                    <p> </p>
                                    <ul>
                                        <li>Definition</li>
                                        <li>Benefits</li>
                                        <li>Participants</li>
                                        <li>How to play planning poker</li>
                                        <li>Planning Poker rules</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="career-path" id="career-path-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">JOURNEY OF A CERTIFIED SCRUMMASTER® PROFESSIONAL</h2>
                    <div class="editor-content">
                        <p><img src="{{asset('images/download.jpg')}}" data-filename="Scrum-Alliance-Path-2.jpg" style="width:816px;"><br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq" id="faq-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">FAQs</h2>
                    <h3 id="">KnowledgeHut Support On Your CSM Journey</h3>
                    <div class="panel-group faq-accordion-1" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="faq-heading-1-1">
                                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-1" aria-expanded="true" aria-controls="faq-1-1">Why choose KnowledgeHut in your
                                        journey to becoming a CSM certified professional?</a> </h4>
                            </div>
                            <div id="faq-1-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-heading-1-1">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>Here is why you should choose KnowledgeHut to help you get CSM certified:
                                        </p>
                                        <ul>
                                            <li>Global Registered Education Provider of Scrum Alliance</li>
                                            <li>Provided over 1,20,000+ professionals with unique learning
                                                opportunities</li>
                                            <li>Delivers training that meets the exact needs of every individual
                                            </li>
                                            <li>Hires only CSTs approved by Scrum Alliance</li>
                                            <li>We focus on your training needs so you can focus on your career and
                                                business</li>
                                            <li>24/7 support</li>
                                            <li>Provides world-class training</li>
                                            <li>Embeds skills needed to land top-paying jobs</li>
                                            <li>100% satisfaction guarantee.</li>
                                        </ul>
                                        <p>Looking to know everything about CSM certification training with
                                            KnowledgeHut? <a href="#" target="_blank">Check out this blog!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-2">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-2" aria-expanded="false" aria-controls="faq-1-2">How good are the trainers at
                                        KnowledgeHut?</a> </h4>
                            </div>
                            <div id="faq-1-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-2">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>Our energetic and dedicated trainers are your best choice. As highly
                                            skilled professionals with vast experience in delivering courses, our
                                            instructors invest their time in understanding the various challenges
                                            involved in enterprises and know what is required to succeed in the
                                            fast-paced and dynamic world.</p>
                                        <p><br></p>
                                        <p>Our instructors keep themselves up to date on developments and trends in
                                            their respective fields. With years of industry experience, they aim at
                                            delivering the training in a way that helps you build expertise in your
                                            field and get ahead in your career.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-3">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-3" aria-expanded="false" aria-controls="faq-1-3">Where will the Certified
                                        ScrumMaster workshop be held?</a> </h4>
                            </div>
                            <div id="faq-1-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-3">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>The venue will be listed on the KnowledgeHut website under the selected
                                            workshop. If it is not, then you can please contact our supporting team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-4">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-4" aria-expanded="false" aria-controls="faq-1-4">Do you provide any training
                                        material for CSM certification?</a> </h4>
                            </div>
                            <div id="faq-1-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-4">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>We provide the hard copy of the courseware for our classroom
                                            participants.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-5">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-5" aria-expanded="false" aria-controls="faq-1-5">Which are the cities in which
                                        KnowledgeHut conducts CSM® certification training?</a> </h4>
                            </div>
                            <div id="faq-1-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-5">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>KnowledgeHut is a leading Registered Education Ally (REA) of Scrum
                                            Alliance offering good knowledge to corporate organizations and
                                            professionals across the globe. It is the fastest growing CSM®
                                            certification training firm, with footprints in 70+ countries. We
                                            frequently conduct CSM training in all the cities across the globe and
                                            here are a few listed for your reference:</p>
                                        <p><br></p>
                                        <table border="0" cellpadding="0" cellspacing="0" width="408" style="width:306pt;">
                                            <colgroup>
                                                <col width="133" style="mso-width-source:userset;mso-width-alt:4864;width:100pt;">
                                                <col width="140" style="mso-width-source:userset;mso-width-alt:5120;width:105pt;">
                                                <col width="135" style="mso-width-source:userset;mso-width-alt:4937;width:101pt;">
                                            </colgroup>
                                            <tbody>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" width="133" style="text-align:center;height:15pt;width:100pt;"><a href="#" target="_blank">Bangalore&nbsp;</a></td>
                                                    <td class="xl65" width="140" style="text-align:center;width:105pt;"><a href="#" target="_blank">Hyderabad</a></td>
                                                    <td class="xl65" width="135" style="text-align:center;width:101pt;"><a href="#" target="_blank">Mumbai</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">Delhi</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Kolkata</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Gurgaon</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">Noida</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Chennai</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Cochin</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">Pune</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">New York</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Chicago</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">San Francisco</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Atlanta</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Washington</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">Houston</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Austin</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="agile-management/csm-certification-training" target="_blank">Los Angeles</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">Dallas</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Boston</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Seattle</a></td>
                                                </tr>
                                                <tr height="20" style="height:15pt;">
                                                    <td height="20" class="xl65" style="text-align:center;height:15pt;"><a href="#" target="_blank">San Jose</a></td>
                                                    <td class="xl65" style="text-align:center;"><a href="#" target="_blank">Singapore</a></td>
                                                    <td class="xl66" style="text-align:center;"><a href="#" target="_blank">Kuala Lumpur</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-6">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-6" aria-expanded="false" aria-controls="faq-1-6">Is this a live CSM training,
                                        or will I watch pre-recorded videos?</a> </h4>
                            </div>
                            <div id="faq-1-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-6">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>Our CSM training is live and is available in both Live Instructor-Led
                                            Virtual and Classroom Training formats.&nbsp;<br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-7">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-7" aria-expanded="false" aria-controls="faq-1-7">Can I change the city, place,
                                        and date after enrolling for the CSM classroom training?</a> </h4>
                            </div>
                            <div id="faq-1-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-7">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>Yes, but this needs to be done at least 10 days prior to the training
                                            start date.</p>
                                        <p><br></p>
                                        <p><b>Note:</b> In some instances, it also depends on the location, trainer,
                                            discounts/offers availed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-8">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-8" aria-expanded="false" aria-controls="faq-1-8">Do you provide transportation
                                        and refreshments with the Agile Scrum Master training?</a> </h4>
                            </div>
                            <div id="faq-1-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-8">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>We do not provide transportation. Yes, refreshments and lunch will be
                                            provided by KnowledgeHut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-9">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-9" aria-expanded="false" aria-controls="faq-1-9">Do you provide any discount
                                        for CSM certification training programs?</a> </h4>
                            </div>
                            <div id="faq-1-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-9">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>We offer a variety of discounts with the dates and time that fits your
                                            requirements. The larger the group, the larger the overall discount. Our
                                            discounts vary depending on various factors such as size of the group,
                                            training location, etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-10">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-10" aria-expanded="false" aria-controls="faq-1-10">What payment options are
                                        available?</a> </h4>
                            </div>
                            <div id="faq-1-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-10">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>The process of enrolling for CSM classroom training is simple. The
                                            payment can be made through different options by using a debit/credit
                                            card which includes MasterCard, Visa Card, American Express or through
                                            PayPal. Acknowledgment will be issued automatically via email to the
                                            candidates once payment is done.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-11">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-11" aria-expanded="false" aria-controls="faq-1-11">If I cancel the enrolment,
                                        will I get a refund?</a> </h4>
                            </div>
                            <div id="faq-1-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-11">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>With our 100% Satisfaction Guarantee policy, you are assured of the
                                            highest standards of quality. At KnowledgeHut, we strive to ensure that
                                            your learning experience with us is beyond reproach. However, if for any
                                            reason your expectations are not met, we will refund the course fee in
                                            accordance with our <a href="#" target="_blank">100% Satisfaction Guarantee policy</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq-heading-1-12">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".faq-accordion-1" href="#faq-1-12" aria-expanded="false" aria-controls="faq-1-12">I’d like to learn more about
                                        this CSM certification training program. Whom should I contact?</a> </h4>
                            </div>
                            <div id="faq-1-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-heading-1-12">
                                <div class="panel-body">
                                    <div class="editor-content">
                                        <p>To ask further questions, please send in an email to <a href="mailto:support@knowledgehut.com" target="_blank" rel="nofollow">support@knowledgehut.com</a>, and we will answer any
                                            queries you may have!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cert-and-exam" id="seo-unique-content-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="section-heading">CSM Training and Certification FAQs</h2>
                    <div class="cert-and-exam-section" id="certification-process-certified-scrummaster">
                        <h3>Certified ScrumMaster®</h3>
                        <div class="panel-group accordion seo-content-accordion-1" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="seo-content-heading-1-1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-1" aria-expanded="true" aria-controls="seo-content-1-1">Who is a Certified
                                            ScrumMaster®?</a> </h4>
                                </div>
                                <div id="seo-content-1-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="seo-content-heading-1-1">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>A Certified ScrumMaster® is a professional designated by Scrum
                                                Alliance as a Scrum practitioner who can skillfully lead project
                                                teams. A Scrum Master is not a project leader or project manager but
                                                instead, a Servant Leader who assists the team to succeed with the
                                                Scrum framework.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-2">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-2" aria-expanded="false" aria-controls="seo-content-1-2">What are the roles
                                            and responsibilities of a Certified ScrumMaster®?</a> </h4>
                                </div>
                                <div id="seo-content-1-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-2">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>When it comes to being a successful Scrum Master, there are certain
                                                roles and responsibilities that need to be performed. Following are
                                                the primary roles and responsibilities of a scrum master:</p>
                                            <ul>
                                                <li>Act as a facilitator and servant leader who encourages
                                                    self-organization</li>
                                                <li>Remove obstacles so that the team can focus more on work and
                                                    follow practices of Scrum</li>
                                                <li>Protect the team from internal and external distractions</li>
                                                <li>Ensure a good relationship between the product owner and the
                                                    team along with the members outside the team</li>
                                                <li>Set up an environment where the team can perform more
                                                    effectively</li>
                                                <li>Manage the scrum process in coordination with the scrum team
                                                </li>
                                                <li>Conduct retrospective meetings</li>
                                                <li>Address team progress</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-3">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-3" aria-expanded="false" aria-controls="seo-content-1-3">What are the most
                                            important skills that a Scrum Master should have?</a> </h4>
                                </div>
                                <div id="seo-content-1-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-3">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The most important skills that every Scrum Master should have are as
                                                follows:</p>
                                            <ul>
                                                <li><b>Systems Thinking:</b> This skill helps the Scrum Master to
                                                    build a comprehensive perspective towards the whole organization
                                                    as a system.&nbsp;</li>
                                                <li><b>Facilitation ability:</b> The Scrum Master facilitates the
                                                    Scrum events for the team members to reach a high-end decision.
                                                </li>
                                                <li><b>Complex Problem Solving:</b> The Scrum Master will be able to
                                                    handle various complex situations while undertaking product
                                                    development.</li>
                                                <li><b>Coaching:</b> Team members need someone to guide and coach
                                                    them to follow Scrum principles properly, which the Scrum Master
                                                    does.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-4">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-4" aria-expanded="false" aria-controls="seo-content-1-4">How does
                                            ScrumMaster certification come into play?</a> </h4>
                                </div>
                                <div id="seo-content-1-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-4">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The exponential growth of Scrum, combined with the rising Scrum
                                                adoption in 65% of IT enterprises globally indicates the need for
                                                Certified ScrumMasters who can facilitate complex project execution.
                                                A CSM certification from any Global REP (Registered Education
                                                Provider) helps reinforce your industry identity as an Agilist who
                                                can lead projects to successful execution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-5">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-5" aria-expanded="false" aria-controls="seo-content-1-5">What are the
                                            different Scrum Master Certifications available?</a> </h4>
                                </div>
                                <div id="seo-content-1-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-5">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The Scrum Master role is created to be a part of the Scrum framework.
                                                The name itself indicates that a person is an expert at Scrum and
                                                ensures that his/her team is also following the Scrum framework
                                                correctly. Scrum Master is responsible for creating a culture of
                                                trust, self-organizing teams, and transparency while removing the
                                                obstacles that are inhibiting the project’s progress. Here is a list
                                                of several <a href="#" target="_blank">Scrum Master certifications</a> along with the
                                                certification bodies:</p>
                                            <p><br></p>
                                            <div dir="ltr" style="margin-left:0pt;"></div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Certification Body&nbsp;</b></td>
                                                        <td><b>Certificate Name</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scrum Alliance</td>
                                                        <td>Certified ScrumMaster® (CSM®)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scrum.org</td>
                                                        <td>Professional Scrum Master (PSM ™ )</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scaled Agile Academy&nbsp;</td>
                                                        <td>SAFe® Advanced Scrum Master (SASM)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Project Management Institute (PMI)®</td>
                                                        <td>Project Management Institute- Agile Certified
                                                            Practitioner (PMI-ACP)®</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SCRUMstudy</td>
                                                        <td>Scrum Master Certified (SMC ™ )<br></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-6">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-6" aria-expanded="false" aria-controls="seo-content-1-6">How is Scrum
                                            Alliance different from other certifying bodies?</a> </h4>
                                </div>
                                <div id="seo-content-1-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-6">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Scrum Alliance, the renowned Agile membership and certification
                                                organization for the professionals offers various levels of
                                                certification to become proficient in Scrum. The certifying body
                                                always believes in a high level of personal interaction to
                                                understand Scrum. The newly designed course model of Scrum Alliance
                                                fosters collaboration, increased productivity, and success among the
                                                team members.</p>
                                            <p><br></p>
                                            <p>Membership of the Scrum Alliance community offers you a networking
                                                platform if you are interested in your Agile journey and lets you
                                                connect with other Scrum practitioners. It aids you to get future
                                                growth through certification, knowledge sharing, and community
                                                support, which is very rare in the IT domain.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-7">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-7" aria-expanded="false" aria-controls="seo-content-1-7">What does it mean
                                            to have a Certified ScrumMaster® (CSM) designation?</a> </h4>
                                </div>
                                <div id="seo-content-1-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-7">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>A Certified ScrumMaster® (CSM) training workshop is conducted by a
                                                Certified Scrum Trainer (CST) and teaches the Scrum terminology,
                                                practices, and principles that will enable the participant to act as
                                                a Scrum Master or Scrum team member. This credential is a first step
                                                on the path to a successful Agile career.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-8">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-8" aria-expanded="false" aria-controls="seo-content-1-8">Does Scrum
                                            Alliance offer an online/virtual CSM course?</a> </h4>
                                </div>
                                <div id="seo-content-1-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-8">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Yes, there is an online/virtual course for CSM.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-9">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-9" aria-expanded="false" aria-controls="seo-content-1-9">What are the
                                            benefits of "2-year membership with Scrum Alliance"?</a> </h4>
                                </div>
                                <div id="seo-content-1-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-9">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Through this membership you can join local user groups, online social
                                                networks, gain access to deep discounts on gatherings, and
                                                additional member-only resources.&nbsp; In addition, CSMs can use a
                                                specially designed logo to highlight their credentials.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-10">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-10" aria-expanded="false" aria-controls="seo-content-1-10">How does the CSM
                                            course help an individual/professional?</a> </h4>
                                </div>
                                <div id="seo-content-1-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-10">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>According to Scrum Alliance, a Certified ScrumMaster® course helps
                                                increase the likelihood of a project’s overall success by applying
                                                Scrum principles and techniques in the right way. By understanding
                                                the values, practices, and applications, you can act as a ‘servant
                                                leader’ rising above and beyond an average project manager and
                                                helping your organization achieve meaningful goals</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-11">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-11" aria-expanded="false" aria-controls="seo-content-1-11">Will new job
                                            placement opportunities available to me after Scrum Master training?</a>
                                    </h4>
                                </div>
                                <div id="seo-content-1-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-11">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Job opportunities are continuously increasing in number which in turn
                                                is raising the demand for professional and skilled scrum masters.
                                                Our training will give you&nbsp;an&nbsp;edge in your job search and
                                                help you to get a high-paying job that will set you up to go in a
                                                new direction in your Agile journey.<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-12">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-12" aria-expanded="false" aria-controls="seo-content-1-12">Top companies
                                            that have hired CSM certified professionals globally</a> </h4>
                                </div>
                                <div id="seo-content-1-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-12">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Not just software companies but many other industries are looking for
                                                Scrum Masters to improve their organizational processes. Here is the
                                                list of top industries and companies that have hired <wbr>Certified Scrum Masters:
                                            </p>
                                            <p><br></p>
                                            <p><b>Information Technology:</b></p>
                                            <ul>
                                                <li>Philips</li>
                                                <li>Dell</li>
                                                <li>Honeywell</li>
                                                <li>Allstate India</li>
                                                <li>Goldman Sachs</li>
                                                <li>Siemens</li>
                                                <li>Informatica</li>
                                                <li>Capgemini</li>
                                                <li>Intel</li>
                                                <li>Zensar Technologies</li>
                                                <li>Accenture</li>
                                            </ul>
                                            <div>
                                                <div><b>Telecom:</b></div>
                                                <ul>
                                                    <li>Vodafone India Services Private Limited</li>
                                                    <li>Techstar Software Development India Pvt</li>
                                                    <li>Nokia Siemens Networks Ltd</li>
                                                    <li>France Telecom</li>
                                                    <li>NewWave Telecom &amp; Technologies</li>
                                                    <li>ENGIE Insight</li>
                                                    <li>Rockwell Automation</li>
                                                    <li>Synacor</li>
                                                    <li>Frontier Communications Corporation</li>
                                                </ul>
                                                <div><b>Federal:</b></div>
                                                <ul>
                                                    <li>First Tech Federal Credit Union</li>
                                                </ul>
                                                <div><b>Manufacturing companies:</b></div>
                                                <ul>
                                                    <li>Applied Materials India Private Limited</li>
                                                    <li>Applied Materials</li>
                                                    <li>Johnson Controls</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-13">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-13" aria-expanded="false" aria-controls="seo-content-1-13">Best Scrum tools
                                            to enhance your team’s productivity</a> </h4>
                                </div>
                                <div id="seo-content-1-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-13">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p><span id="docs-internal-guid-bd185a60-7fff-3bb0-a920-9c893f30866c"></span>
                                            </p>
                                            <div dir="ltr" style="margin-left:0pt;">
                                                <table style="border:none;border-collapse:collapse;">
                                                    <colgroup>
                                                        <col width="146">
                                                        <col width="207">
                                                        <col width="163">
                                                    </colgroup>
                                                    <tbody>
                                                        <tr style="height:16pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><b>Tool
                                                                            Name</b></span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><b>Features</b></span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre-wrap;"><b>Cost</b></span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:63pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Jira</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">The
                                                                        most popular and widely used cloud and
                                                                        subscription-based software for Agile
                                                                        teams.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$10/month
                                                                        for up to 10 users</span>
                                                                </p>
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$7/month
                                                                        for 11-100 users</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:48pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Vivify
                                                                        Scrum</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">A
                                                                        well-balanced tool with an appealing UI and
                                                                        useful Scrum features.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Offers
                                                                        free version for 14-days</span>
                                                                </p>
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$8/user/month</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:48pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">ScrumDO</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">This
                                                                        is the tool built and priced to scale your
                                                                        Agile projects.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$8.99/month
                                                                        for up to 10 users</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:63pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Manuscript</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">A
                                                                        new tool built for the real-world barriers
                                                                        that exist in a software development
                                                                        environment.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$62/month
                                                                        for 5 users</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:63pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Axosoft</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">This
                                                                        scrum tool offers organization and structure
                                                                        to many components of Scrum project
                                                                        management.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$25/month
                                                                        for 5 users</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:79pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Targetprocess</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">This
                                                                        Scrum tool enables software development
                                                                        teams to speed up product delivery at all
                                                                        levels of the organization.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Offers
                                                                        free Team version</span>
                                                                </p>
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$20/user/month</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:63pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Yodiz</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">It
                                                                        offers a greater degree of visibility into
                                                                        your team’s progress and increases overall
                                                                        efficiency.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Offers
                                                                        free version for up to 3 users</span>
                                                                </p>
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$3/user/month</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:63pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Quickscrum</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">This
                                                                        Scrum tool helps your team to collaborate
                                                                        better, reach goals, and improve
                                                                        continuously.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$3/user/month</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:79pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Scrumwise</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">It
                                                                        allows you to focus on your project, improve
                                                                        communication, enhance teamwork and gives
                                                                        you faster results.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$7.50/user/month</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:79pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">ScrumDesk</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Designed
                                                                        for teams implementing Scrum or Kanban and
                                                                        supports Agile practices like root cause
                                                                        analysis or retrospectives.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Free
                                                                        for up to 4 users</span>
                                                                </p>
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$9/month
                                                                        for up to 5 users</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:63pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">ClickUp</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">It
                                                                        helps to make projects more productive with
                                                                        a well-designed and intuitive
                                                                        platform.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$5/user/month</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr style="height:79pt;">
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Zoho
                                                                        Sprints</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">A
                                                                        tool that helps Agile teams plan and track
                                                                        their work.</span>
                                                                </p>
                                                            </td>
                                                            <td style="border-left:solid #d5d5d5 .75pt;border-right:solid #d5d5d5 .75pt;border-bottom:solid #d5d5d5 .75pt;border-top:solid #d5d5d5 .75pt;vertical-align:top;padding:0pt 8pt 0pt 8pt;">
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Offered
                                                                        as a free tool for up to 3 users and 2
                                                                        projects</span>
                                                                </p>
                                                                <p dir="ltr" style="line-height:1.38;margin-top:15pt;margin-bottom:0pt;text-align:justify;">
                                                                    <span style="font-size:10.5pt;font-family:Arial;color:#000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">$8.30/user/month
                                                                        for up to 10 users</span>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-14">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-14" aria-expanded="false" aria-controls="seo-content-1-14">The different
                                            Certifications you can gain in Scrum</a> </h4>
                                </div>
                                <div id="seo-content-1-14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-14">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The certifications offered by Scrum Alliance provide several ways of
                                                proving yourself as a competent and skilled Scrum and Agile
                                                practitioner. Here are the three Scrum Master certification levels
                                                by Scrum Alliance:</p>
                                            <p><br></p>
                                            <p><b>1. CSM (Certified Scrum Master)</b></p>
                                            <p>Introductory course for those wishing to become a Scrum Master or
                                                play a role as a Scrum team member.<br><br><b>2. A-CSM (Advance –
                                                    Certified Scrum Master)</b><br></p>
                                            <p>Advanced course for those who have work experience as a Scrum
                                                Master.<br><br><b>3. CSP (Certified Scrum Professional)</b><br></p>
                                            <p>Pinnacle/Expert-level course for individuals wishing to build mastery
                                                in the Scrum Master role.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-15">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-15" aria-expanded="false" aria-controls="seo-content-1-15">What next after
                                            working as a Certified ScrumMaster® for 1 year?</a> </h4>
                                </div>
                                <div id="seo-content-1-15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-15">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Your next step toward a Certified Scrum Professional after earning
                                                your CSM certification and a year of experience working as a CSM on
                                                a Scrum Team is to achieve your <a href="#" target="_blank">Advanced Certified ScrumMaster (A-CSM℠)</a>
                                                certification.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-16">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-16" aria-expanded="false" aria-controls="seo-content-1-16">What is the
                                            relation between Agile &amp; Scrum?</a> </h4>
                                </div>
                                <div id="seo-content-1-16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-16">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Agile refers to a mindset on how to approach software development.
                                                Scrum is the most widely used Agile framework, amongst others such
                                                as Kanban and Extreme Programming. </p>
                                            <p>The term Agile was coined in 2001 when the "Manifesto for Agile
                                                Software Development" was created. The authors were the two creators
                                                of the Scrum famework, together with 15 others who had a similar
                                                mindset on how to approach software development. The manifesto
                                                stresses the need to deliver software that customers value early and
                                                continuously during development. This way, that what is delivered
                                                can be changed rapidly during development, based on customer
                                                feedback. To make this possible, close collaboration is needed
                                                between developers amongst each other, and with their clients.</p>
                                            <p>Scrum provides a structure on how to work from an Agile mindset.
                                                While originating from software development, Scrum is defined in a
                                                more generic manner. It is also applied in other domains than
                                                software, such as marketing. The framework helps a self-organizing
                                                team to get things done frequently and in close collaboration. There
                                                will be many opportunities during development to inspect what has
                                                been delivered so far, and to improve the way the work is conducted.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-17">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-17" aria-expanded="false" aria-controls="seo-content-1-17">What is the cost
                                            of the Certified ScrumMaster® (CSM®) certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-17">
                                    <div class="panel-body">
                                        <div class="editor-content"> The cost of the 2-day Certified Scrum Master or
                                            CSM course is between $800 and $1500 in US and between INR 18,000 to INR
                                            25000 in India. The cost of the exam is included in this. Apart from
                                            this, you will also have to pay $100 every 2 years to renew the
                                            certification. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-18">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-18" aria-expanded="false" aria-controls="seo-content-1-18">What are the
                                            major differences between CSM &amp; PSM Certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-18">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>CSM and PSM certifications focus on the software development process.
                                                Neither is better than the other. The certificate that you should go
                                                for depends on your current knowledge and your goals. Here are some
                                                differences between the two that will help you make the decision:
                                            </p>
                                            <ul>
                                                <li><b>Getting the certification</b></li>
                                            </ul>
                                            <p>You can get the CSM certification by attending the 2-day training.
                                                You will need to enroll yourself in an institute and undertake the
                                                training. You will have free 2 attempts to pass the exam, within a
                                                90 day period after completion of the course. If you fail the test
                                                twice or take it up only after 90 days, you will be required to pay
                                                a $25 USD test attempt fee. PSM certification from Scrum.org has
                                                three certification levels - PSM I, II, and III. You need to
                                                purchase the password from scrum.org for enrolling yourself. For
                                                taking the PSM I exam, you must have a deep understanding of Scrum.
                                            </p>
                                            <ul>
                                                <li><b>Passing rank</b></li>
                                            </ul>
                                            <p>You need at least 74% marks in the exam to get the CSM certification
                                                exam. For PSM, you need at least 85%.</p>
                                            <ul>
                                                <li><b>Exam pattern</b></li>
                                            </ul>
                                            <p>CSM only has multiple choice questions while PSM might have multiple
                                                choice questions, true/false type questions, multiple answer
                                                questions, and essay type questions depending on the level.</p>
                                            <ul>
                                                <li><b>Cost</b></li>
                                            </ul>
                                            <p>The cost of the CSM certification ranges between $800 and $1500 in US
                                                and between INR 18,000 to INR 25000 in India depending on the
                                                training institute. PSM certification costs differ depending on
                                                their levels. The cost of PSM I, II, and III is $150, $250, and $500
                                                respectively.</p>
                                            <ul>
                                                <li><b>Need for renewal</b></li>
                                            </ul>
                                            <p>CSM certification is valid for only 2 years. You will be required to
                                                pay $100 every two years to renew your certificate. For PSM, on the
                                                other hand, there is no need for renewal. Once you have passed the
                                                exam, the certification will be valid for life.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-19">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-19" aria-expanded="false" aria-controls="seo-content-1-19">How to get CSM
                                            certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-19">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Here is a step-by-step process to get the CSM certification:</p>
                                            <ol>
                                                <li>Attend the in-person or online course from a training institute.
                                                    Make sure that you select the right Certified Scrum Trainer or
                                                    CST.</li>
                                                <li>Once you have completed the course, accept the license
                                                    agreement, and take the CSM test. There are 50 questions that
                                                    you have to answer within 60 minutes. You need to answer 37 out
                                                    of 50 questions correctly to pass the test.</li>
                                                <li>You will be required to earn the Scrum Education Units (SEUs) to
                                                    maintain your certificate. Also, you will need to renew the
                                                    certification every two years.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-20">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-20" aria-expanded="false" aria-controls="seo-content-1-20">What are the
                                            benefits of CSM Certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-20">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>A CSM certification will prove to the companies that you have the
                                                required skills needed for&nbsp; working in a Scrum team as Scrum
                                                Master or team member. Here are some benefits of getting
                                                CSM-certified:</p>
                                            <ul>
                                                <li>Expand your knowledge and overcome obstacles while being part of
                                                    a Scrum team, especially when you are managing teams across
                                                    multiple departments.</li>
                                                <li>Improves team collaboration and management.</li>
                                                <li>Get ahead in the field by becoming a better competitor and
                                                    staying relevant.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-21">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-21" aria-expanded="false" aria-controls="seo-content-1-21">How to apply for
                                            CSM certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-21">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Here are three steps you need to complete to apply for the CSM
                                                certification:&nbsp;</p>
                                            <ul>
                                                <li>Get an understanding of Scrum and make sure that you complete
                                                    all the prerequisites for the CSM course.</li>
                                                <li>Attend the 2-day in-person CSM course led by a Certified Scrum
                                                    Trainer.</li>
                                                <li>Apply for the exam.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-22">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-22" aria-expanded="false" aria-controls="seo-content-1-22">How to apply for
                                            the CSM Exam?</a> </h4>
                                </div>
                                <div id="seo-content-1-22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-22">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>To apply for the CSM exam, visit the official website of Scrum
                                                Alliance. After that, here is what you must do:</p>
                                            <ul>
                                                <li>Sign into your account using your login credentials. These will
                                                    be included in the ‘Welcome CSM’ email.</li>
                                                <li>Hover to the top right-hand corner near Hello, [Your Name], and
                                                    click on ‘My Dashboard’.</li>
                                                <li>Select the ‘Take CSM test’ option.</li>
                                                <li>Choose your preferred language.</li>
                                                <li>As you hit ‘Continue’, you will be redirected to the site where
                                                    you will be taking the exam.</li>
                                            </ul>
                                            <p>Before you give the exam, remember to turn off the popup blockers.
                                                Internet Explorer won’t support the test. Browsers that work best
                                                are Google Chrome, Safari, or Firefox. Also, don’t use the forward
                                                or backward button of the browser. Instead, use the provided buttons
                                                for navigating through the questions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-23">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-23" aria-expanded="false" aria-controls="seo-content-1-23">What is the
                                            validity of CSM Certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-23">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The CSM certification is valid for only 2 years. During this period,
                                                you need to get the requisite credits to maintain the certificate.
                                                You will need to submit a predetermined number of Scrum Education
                                                Units (SEUs) along with a renewal fee, in order to maintain the
                                                certification for a further period of two years.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-24">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-24" aria-expanded="false" aria-controls="seo-content-1-24">How to prepare
                                            for CSM certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-24">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Before you attend the CSM course, you have to familiarize yourself
                                                with the theory and principles of Scrum. It is important to read the
                                                official Scrum Guide and study the Agile Manifesto. A CSM course
                                                usually starts with a short quiz to check if you are ready to begin
                                                the training. To pass this quiz, you must know about the Scrum
                                                theory, roles, events, and artifacts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-25">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-25" aria-expanded="false" aria-controls="seo-content-1-25">What's next after
                                            CSM certification?</a> </h4>
                                </div>
                                <div id="seo-content-1-25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-25">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>After getting your CSM certification, you can go to the next level.
                                                Here are some certification examples you can go for:</p>
                                            <ul>
                                                <li>Advanced Certified Scrum MasterSM (A-CSM SM)</li>
                                                <li>CSPO®</li>
                                                <li>ICP-ATF (Agile Team Facilitator)</li>
                                                <li>ICP-ACC (Agile coaching)</li>
                                                <li>KMP</li>
                                                <li>PMP® certification</li>
                                                <li>PMI-ACP®&nbsp; Certification</li>
                                                <li>SAFe® Agilist</li>
                                                <li>SAFe®- SASM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-1-26">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-1" href="#seo-content-1-26" aria-expanded="false" aria-controls="seo-content-1-26">What is a Scrum
                                            Master?</a> </h4>
                                </div>
                                <div id="seo-content-1-26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-1-26">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Know more about&nbsp;<a href="#" target="_blank" style="background-color:#fff;">what is a Scrum
                                                    Master.</a><br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cert-and-exam-section" id="certification-process-csm-training">
                        <h3>CSM Training</h3>
                        <div class="panel-group accordion seo-content-accordion-2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="seo-content-heading-2-1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-1" aria-expanded="false" aria-controls="seo-content-2-1">Complete CSM
                                            course details that you should know</a> </h4>
                                </div>
                                <div id="seo-content-2-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="seo-content-heading-2-1">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Take a quick look at the complete details of the CSM certification
                                                course before you register:</p>
                                            <p><br></p>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><b>CSM Course</b></td>
                                                        <td><b>Details</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSM Certification Cost</td>
                                                        <td>INR 23999 in India, USD 995 in the US, CAD 1195 in
                                                            Canada<br></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discount<br></td>
                                                        <td>Up to 20%<br></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSM Exam<br></td>
                                                        <td>1hr online test which comprises of 50 MCQs<br></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSM Exam Fee<br></td>
                                                        <td>Included in the certification cost<br></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSM Certification Validity<br></td>
                                                        <td>2 Year Validity<br></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSM Renewal Fees<br></td>
                                                        <td>$100<br></td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSM Salary<br></td>
                                                        <td>$1,15,766 per year<br></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-2">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-2" aria-expanded="false" aria-controls="seo-content-2-2">Is the CSM
                                            training a basic level under Agile management?</a> </h4>
                                </div>
                                <div id="seo-content-2-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-2">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The Certified ScrumMaster® course offers training in the fundamentals
                                                essential for Scrum team members or a professional Scrum Master.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-3">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-3" aria-expanded="false" aria-controls="seo-content-2-3">What are the
                                            prerequisites to attend the CSM certification training?</a> </h4>
                                </div>
                                <div id="seo-content-2-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-3">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>There are no prerequisites for attending the course itself. A degree
                                                of course completion from our Certified Scrum Trainer makes you
                                                eligible for Scrum Alliance’s Online CSM Test.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-4">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-4" aria-expanded="false" aria-controls="seo-content-2-4">What education
                                            background should I have in order to become a Scrum Master?</a> </h4>
                                </div>
                                <div id="seo-content-2-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-4">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>One need not bother with a specific background to become a Scrum
                                                Master. Individuals with Scrum Master skills can emerge out of any
                                                field.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-5">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-5" aria-expanded="false" aria-controls="seo-content-2-5">Who should take
                                            this Scrum Alliance CSM training course?</a> </h4>
                                </div>
                                <div id="seo-content-2-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-5">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The following individuals can take this course:</p>
                                            <ul>
                                                <li>Anyone who would like to build a career as a Scrum Master</li>
                                                <li>Teams transitioning to Scrum</li>
                                                <li>Managers of Scrum teams</li>
                                                <li>Scrum team members such as product owners and developers</li>
                                            </ul>
                                            <p>If you are already working as a Scrum Master, then taking this course
                                                helps to strengthen your Scrum knowledge and skills.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-6">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-6" aria-expanded="false" aria-controls="seo-content-2-6">Who are the
                                            instructors/trainers for your CSM certification training?</a> </h4>
                                </div>
                                <div id="seo-content-2-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-6">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Our Certified Scrum Trainers® (CSTs) are:</p>
                                            <ul>
                                                <li>Professionals licensed by Scrum Alliance to teach the official
                                                    Scrum Alliance curriculum.</li>
                                                <li>Masters in Scrum who have immense experience in leading,
                                                    applying, coaching, and teaching it.</li>
                                                <li>Skilled in product management and software development.</li>
                                                <li>Subject experts who are active in software development and local
                                                    Agile communities, along with the broader global Scrum and Agile
                                                    movements.</li>
                                            </ul>
                                            <p>Our dedicated team of CSTs deliver training on par with the standard
                                                of excellence as set out by Scrum Alliance. So, every candidate
                                                receives the same high-quality content irrespective of the trainer
                                                and the location. They help you further develop the competencies and
                                                skills you need to make a difference in your organization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-7">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-7" aria-expanded="false" aria-controls="seo-content-2-7">Can the CSM online
                                            test be taken without undergoing the Certified ScrumMaster®
                                            training?</a> </h4>
                                </div>
                                <div id="seo-content-2-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-7">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>No, it cannot be taken. Scrum Alliance believes that true learning
                                                requires in-person training and hands-on experience with a CEC or
                                                CST. The CSM exam is not provided as a substitute for formal
                                                training.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-8">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-8" aria-expanded="false" aria-controls="seo-content-2-8">Do I need
                                            membership of Scrum Alliance to attend training for this
                                            certification?</a> </h4>
                                </div>
                                <div id="seo-content-2-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-8">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>No. Certified membership is for individuals who have completed the
                                                CSM classroom training.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-9">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-9" aria-expanded="false" aria-controls="seo-content-2-9">Is your 2 days of
                                            training enough to clear the Scrum Master certification exam?</a> </h4>
                                </div>
                                <div id="seo-content-2-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-9">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>It is advisable that before attending the Certified ScrumMaster®
                                                course, you should familiarize yourself with the resources available
                                                on the Scrum Alliance website. These Scrum resources will help you
                                                embrace the Scrum principles and practices and will lead to greater
                                                success in the CSM exam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-10">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-10" aria-expanded="false" aria-controls="seo-content-2-10">After CSM
                                            training within how many days do I need to take the certification?</a>
                                    </h4>
                                </div>
                                <div id="seo-content-2-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-10">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>After completing your CSM course, you will receive an email from
                                                Scrum Alliance that includes a link to create your login
                                                credentials. After receiving your membership email, you have 90 days
                                                to take and complete the test.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-2-11">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-2" href="#seo-content-2-11" aria-expanded="false" aria-controls="seo-content-2-11">Are the Certified
                                            ScrumMaster® training materials effective in preparing for the CSM
                                            exam?</a> </h4>
                                </div>
                                <div id="seo-content-2-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-2-11">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Our experienced and highly qualified trainers deliver a practical and
                                                interactive training programme with accurate, clear, and updated
                                                materials to help you understand the concepts clearly and pass your
                                                CSM exam without much difficulty.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cert-and-exam-section" id="certification-process-csm-certification-exam">
                        <h3>CSM Certification Exam</h3>
                        <div class="panel-group accordion seo-content-accordion-3" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="seo-content-heading-3-1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-1" aria-expanded="false" aria-controls="seo-content-3-1">What is the
                                            difficulty level of the Certified ScrumMaster® exam?</a> </h4>
                                </div>
                                <div id="seo-content-3-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="seo-content-heading-3-1">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>CSM is an open-book exam and is easy to pass. Together with the
                                                theoretical knowledge gained by <a href="#" target="_blank">passing the Scrum
                                                    Master&nbsp;certification&nbsp;exam</a>,the activity-based
                                                sessions included in the training help in gaining hands-on knowledge
                                                of the Scrum concepts and its practical applicability, which are the
                                                most significant aspects to understand the Scrum
                                                framework.&nbsp;<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-2">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-2" aria-expanded="false" aria-controls="seo-content-3-2">What is the Scrum
                                            Master certification exam pattern and passing score?</a> </h4>
                                </div>
                                <div id="seo-content-3-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-2">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The Certified ScrumMaster certification exam is an online test
                                                comprising of 50 multiple choice questions. Candidates will have
                                                1-hour (60 minutes) to finish it. A candidate has to score 74% in
                                                the exam to pass the Scrum Master certification exam and obtain the
                                                certification. Once you complete the course, you are allowed to take
                                                the exam. This exam pattern was decided by subject matter experts
                                                (SMEs) from the Scrum Alliance community working in partnership with
                                                Scrum Alliance and Prometric, an industry leader in test
                                                development.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-3">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-3" aria-expanded="false" aria-controls="seo-content-3-3">How much does the
                                            Certified Scrum Master certification exam cost?</a> </h4>
                                </div>
                                <div id="seo-content-3-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-3">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The Scrum Alliance CSM certification exam fee is included in the
                                                Certified ScrumMaster training cost.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-4">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-4" aria-expanded="false" aria-controls="seo-content-3-4">Can I retake the
                                            Scrum Master certification test if I fail?</a> </h4>
                                </div>
                                <div id="seo-content-3-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-4">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Yes. The Scrum Alliance allows you to take the Scrum Master exam at
                                                no cost for the first 2 attempts within 90 days after you receive
                                                your welcome email. You will be charged a minimum of $25 each from
                                                the third attempt or after completing your 90 days. Scrum Alliance
                                                suggests to retake the CSM course if you have failed thrice in the
                                                exam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-5">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-5" aria-expanded="false" aria-controls="seo-content-3-5">What is the "CSM
                                            accreditation body"? What is its exam fee refund policy?</a> </h4>
                                </div>
                                <div id="seo-content-3-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-5">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The CSM accreditation body is the Scrum Alliance and its exam fee is
                                                non-refundable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-6">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-6" aria-expanded="false" aria-controls="seo-content-3-6">Is it possible for
                                            me to take a sample test to get a feeling of what the real test would be
                                            like?</a> </h4>
                                </div>
                                <div id="seo-content-3-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-6">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>No. There is no mock test; however, we have published a test
                                                blueprint at the bottom of the <a href="#" target="_blank" rel="nofollow">CSM page</a> under ‘Resources.’
                                                This blueprint outlines the percentage of questions from each domain
                                                that will be on the 50-question test. The new test still follows the
                                                current Learning Objectives as well as the recently published
                                                Learning Objectives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-7">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-7" aria-expanded="false" aria-controls="seo-content-3-7">How to take online
                                            CSM® exam?</a> </h4>
                                </div>
                                <div id="seo-content-3-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-7">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>After completing your CSM course, you will receive an email from
                                                Scrum Alliance® that includes a link to create your login
                                                credentials. The first step will be to take the online exam. Once
                                                the exam is complete, you will be asked to accept a license
                                                agreement and set up your online profile. It could take up to two
                                                weeks after course completion to receive your welcome email.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-8">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-8" aria-expanded="false" aria-controls="seo-content-3-8">How will the
                                            attendees take the CSM test?</a> </h4>
                                </div>
                                <div id="seo-content-3-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-8">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The individuals can take the online test from a computer anywhere in
                                                the world, according to their comfort (home, work, or other
                                                location). The test will not be proctored.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-9">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-9" aria-expanded="false" aria-controls="seo-content-3-9">Will I be able to
                                            pause the test for some time and return to it later?</a> </h4>
                                </div>
                                <div id="seo-content-3-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-9">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>No, you will have a time limit of 60 minutes and will not be able to
                                                pause the test. If you accidentally close the window, then you’ll be
                                                able to reopen it immediately. If you lose internet connection or
                                                lose access to the test for an extended period of time, then you may
                                                reach out to <a href="http://support@scrumalliance.org/" target="_blank" rel="nofollow">support@scrumalliance.org</a> to
                                                have a new test set up.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-10">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-10" aria-expanded="false" aria-controls="seo-content-3-10">How long does it
                                            take to receive CSM exam results?</a> </h4>
                                </div>
                                <div id="seo-content-3-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-10">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Upon finishing the test, you can click on the ‘submit’ button and
                                                results will appear immediately on the screen.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-11">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-11" aria-expanded="false" aria-controls="seo-content-3-11">Why has the CSM
                                            test been updated?</a> </h4>
                                </div>
                                <div id="seo-content-3-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-11">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Scrum Alliance always strives to maintain the quality and relevance
                                                of the CSM certification by validating the best practices in the
                                                Agile industry from active practitioners in the field. The CSM
                                                curriculum incorporates the best in current knowledge, skills, and
                                                abilities necessary to earn the CSM certification.&nbsp; As such,
                                                the Scrum Alliance believes in involving their community to validate
                                                what is important in the role of the Scrum Master and then updates
                                                the tests to reflect these key areas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-12">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-12" aria-expanded="false" aria-controls="seo-content-3-12">If I have
                                            undertaken the CSM certification course in November or December 2018,
                                            will I receive the ‘old’ test or ‘new’ test?</a> </h4>
                                </div>
                                <div id="seo-content-3-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-12">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>If you choose English as your exam language, you will be able to
                                                switch to a newer version as the new test has recently got
                                                published. If you choose a different language then you may take the
                                                older version till that specific language gets published.
                                                Furthermore, according to the Scrum Alliance, the tests will be
                                                launched in other languages in the coming months, as soon as they
                                                inspect and adapt to the launch of the English version.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-13">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-13" aria-expanded="false" aria-controls="seo-content-3-13">What is the test
                                            blueprint? Does it match with the LOs?</a> </h4>
                                </div>
                                <div id="seo-content-3-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-13">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>You will find the test blueprint at the bottom of the CSM page under
                                                ‘Resources’, on the Scrum Alliance website. This test blueprint
                                                covers the stipulated percentage of questions from each domain. The
                                                test blueprint is aligned with the latest version of 2018 LOs.
                                                Moreover, the 2018 CSM LOs matches with the November 2017 Scrum
                                                Guide. The current LOs can be found on the Scrum Alliance CSM
                                                certification webpage and also on ‘Trainer and Coach dashboards’
                                                under “Resources”.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-3-14">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-3" href="#seo-content-3-14" aria-expanded="false" aria-controls="seo-content-3-14">Can the CSM® test
                                            be re-taken to score better marks if I have fared poorly in my previous
                                            attempt?</a> </h4>
                                </div>
                                <div id="seo-content-3-14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-3-14">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>If you've already passed the CSM test, you will not be able to take
                                                it again to receive a better score. Your test score is only
                                                available to you. Nobody else will be able to see your score on the
                                                CSM test.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cert-and-exam-section" id="certification-process-csm-certification">
                        <h3>CSM Certification</h3>
                        <div class="panel-group accordion seo-content-accordion-4" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="seo-content-heading-4-1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-1" aria-expanded="false" aria-controls="seo-content-4-1">What is Certified
                                            ScrumMaster certification?</a> </h4>
                                </div>
                                <div id="seo-content-4-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="seo-content-heading-4-1">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>CSM was the first professional certification awarded by Scrum
                                                Alliance for Scrum Masters. The certification will help you gain a
                                                strong understanding of the Scrum Framework, team members’
                                                activities and roles etc. By acquiring this certification, you will
                                                be helping the Scrum team work together and perform at their highest
                                                level.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-2">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-2" aria-expanded="false" aria-controls="seo-content-4-2">What is the
                                            importance of a CSM certificate?</a> </h4>
                                </div>
                                <div id="seo-content-4-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-2">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Becoming Agile is a continuous process and a CSM certification is a
                                                major milestone towards embracing Agility. Not only will you learn
                                                the roles and responsibilities of a Scrum Master but will know how
                                                to apply it in a variety of environments. It is a validation of your
                                                commitment to continued excellence and quality.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-3">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-3" aria-expanded="false" aria-controls="seo-content-4-3">Why should I go
                                            for Scrum Master accredited certification?</a> </h4>
                                </div>
                                <div id="seo-content-4-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-3">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Since Scrum is the most popular Agile framework for project
                                                management, Scrum Masters are in demand irrespective of the industry
                                                type. If you are working in a company where Agile is being widely
                                                used then CSM should be your first choice.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-4">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-4" aria-expanded="false" aria-controls="seo-content-4-4">Who offers the CSM
                                            certification?</a> </h4>
                                </div>
                                <div id="seo-content-4-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-4">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>You will receive the certification from Scrum Alliance, the CSM
                                                accreditation body designating you as a Certified ScrumMaster®. This
                                                enhances your industry credibility since a certification from Scrum
                                                Alliance is deemed to fulfill the vision of the Agile Manifesto by
                                                boosting greater productivity, success, and collaboration among team
                                                members.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-5">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-5" aria-expanded="false" aria-controls="seo-content-4-5">How long does it
                                            take to get a CSM certification?</a> </h4>
                                </div>
                                <div id="seo-content-4-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-5">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>You will have to attend two days of CSM® training under a Certified
                                                Scrum Trainer (CST®). You need to take an exam to demonstrate your
                                                knowledge of Scrum and get certified. The exam comprises 50 multiple
                                                choice questions (MCQs) out of which you need to answer 37 questions
                                                correctly within an hour. This means that you need to score 74% in
                                                order to pass the exam. Once you pass the exam, you are declared as
                                                CSM® certified and you can download the certificate instantly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-6">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-6" aria-expanded="false" aria-controls="seo-content-4-6">Is the ScrumMaster
                                            certification worth it?</a> </h4>
                                </div>
                                <div id="seo-content-4-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-6">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>CSM is one of the most popular and globally recognized certifications
                                                provided by the reputed Scrum Alliance. The demand for Scrum Master
                                                training and certifications has increased considerably during the
                                                last decade. The reason is that Scrum is now being implemented in
                                                industries beyond IT and hence the demand for a certified Scrum
                                                professional has increased even beyond his/her current industry of
                                                experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-7">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-7" aria-expanded="false" aria-controls="seo-content-4-7">What is the
                                            average salary of a Certified ScrumMaster® Professional?</a> </h4>
                                </div>
                                <div id="seo-content-4-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-7">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>Scrum Master is a role and not a job title. The <a href="https://www.ziprecruiter.com/Salaries/Certified-Scrum-Master-Salary" target="_blank" rel="nofollow">average salary of a Certified
                                                    ScrumMaster®</a> is $100K per year which is really high when
                                                compared with other IT certifications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-4-8">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-4" href="#seo-content-4-8" aria-expanded="false" aria-controls="seo-content-4-8">What are the
                                            career benefits you gain along with the ScrumMaster certification?</a>
                                    </h4>
                                </div>
                                <div id="seo-content-4-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-4-8">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>You will enjoy the following unique <a href="#" target="_blank">benefits with this ScrumMaster
                                                    certification</a>:</p>
                                            <ul>
                                                <li>Master the foundational concepts of Scrum and understand the
                                                    scope of the Scrum Master role</li>
                                                <li>Gain access to resources, networks, and local groups available
                                                    to only Scrum Alliance members</li>
                                                <li>Get ahead in your Agile career</li>
                                                <li>Prove your core Scrum knowledge to your peers</li>
                                                <li>Fulfill the role of a Scrum Master</li>
                                                <li>Engage with a community of Scrum experts</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cert-and-exam-section" id="certification-process-csm-certification-process">
                        <h3>CSM Certification Process</h3>
                        <div class="panel-group accordion seo-content-accordion-5" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="seo-content-heading-5-1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".seo-content-accordion-5" href="#seo-content-5-1" aria-expanded="false" aria-controls="seo-content-5-1">What is the
                                            process to become a Certified ScrumMaster?</a> </h4>
                                </div>
                                <div id="seo-content-5-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="seo-content-heading-5-1">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p><strong>Step 1</strong><strong>:</strong>&nbsp;Take the 2-day CSM®
                                                course from the Global Registered Education Provider of Scrum
                                                Alliance.&nbsp;</p>
                                            <p><strong>Step 2</strong><strong>:</strong>&nbsp;Scrum Alliance will
                                                send you a welcome email containing a link after successful
                                                completion of course.&nbsp;</p>
                                            <p><strong>Step 3:</strong>&nbsp;Click on the link received from Scrum
                                                Alliance and activate your Scrum Alliance® certification account
                                                where you will be able to complete the CSM test.&nbsp;</p>
                                            <p><strong>Step 4</strong><strong>:</strong>&nbsp;Take
                                                the&nbsp;1-hour&nbsp;online CSM® test which comprises of 50 MCQs by
                                                using those credentials.&nbsp;</p>
                                            <p><strong>Step 5:&nbsp;</strong>: After successful completion of the
                                                course you can take the exam, the passing score for which is 74%.
                                            </p>
                                            <p><strong>Step 6:</strong>&nbsp;Once the test is completed with the
                                                minimum passing score, you will be requested to accept a license
                                                agreement.&nbsp;</p>
                                            <p><strong>Step 7:</strong>&nbsp;After accepting it, you will receive
                                                Certified&nbsp;ScrumMaster® (CSM®) designation from Scrum Alliance
                                                and a 2-year membership with Scrum Alliance as well.&nbsp;</p>
                                            <p> </p>
                                            <p><strong>Step 8:</strong>&nbsp;If your certification has expired then
                                                you need to renew it. It must be renewed once in two years.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-5-2">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-5" href="#seo-content-5-2" aria-expanded="false" aria-controls="seo-content-5-2">Why and how should
                                            I renew my certification?</a> </h4>
                                </div>
                                <div id="seo-content-5-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-5-2">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>The Scrum framework is evolving and growing as a result of the
                                                engagement and contributions of those who share their ideas and
                                                practical experiences in the workplace. Renewal of your
                                                certification validates your interest in the growth and evolution of
                                                Scrum.</p>
                                            <p><br></p>
                                            <p>CSM certification renewal needs to be done every 2 years. You need to
                                                pay $100 to extend the credential for a further period of 2 years
                                                from the date of your current expiration. In order to renew your
                                                ScrumMaster certification, login to Scrum Alliance website, go to
                                                your dashboard and choose the ‘Renew Certification’ option available
                                                under the heading ‘Actions’.</p>
                                            <p><br></p>
                                            <p>From February 4, 2019 onwards, CSMs are required to earn 20 Scrum
                                                Educational Units (SEUs) within the past two years, in addition to
                                                the $100 renewal fee that has to be paid. This new requirement has
                                                been mandated to validate your participation and continued
                                                proficiency in the fundamental principles and practices of Scrum.
                                                You can earn the required SEUs by completing an educational training
                                                or a learning opportunity.</p>
                                            <p><br></p>
                                            <p>You have worked really hard to acquire the certification. Don’t let
                                                it get obsolete! Renew now and hold your certification for 2 years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-5-3">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-5" href="#seo-content-5-3" aria-expanded="false" aria-controls="seo-content-5-3">How can we earn
                                            SEUs for certification renewal?</a> </h4>
                                </div>
                                <div id="seo-content-5-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-5-3">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>There are a number of ways in which SEUs can be earned. You can read
                                                <a href="#" target="_blank" rel="nofollow">here</a> about how to earn your
                                                SEUs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cert-and-exam-section" id="certification-process-pdus-and-seus">
                        <h3>PDUs and SEUs</h3>
                        <div class="panel-group accordion seo-content-accordion-6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="seo-content-heading-6-1">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent=".seo-content-accordion-6" href="#seo-content-6-1" aria-expanded="false" aria-controls="seo-content-6-1">What do you mean
                                            by PDUs and SEUs?</a> </h4>
                                </div>
                                <div id="seo-content-6-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="seo-content-heading-6-1">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>PDUs and SEUs are Professional Development Units and Scrum
                                                Educational Units, issued by the Project Management Institute and <a href="https://www.scrumalliance.org/" target="_blank" rel="nofollow">Scrum Alliance</a>, respectively. They can be
                                                earned by completing educational training or learning opportunities,
                                                which serve to validate your participation and continued proficiency
                                                in the principles and practices of Scrum. To maintain your
                                                certification from Scrum Alliance, you are required to earn a
                                                certain number of SEUs every two years.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-6-2">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-6" href="#seo-content-6-2" aria-expanded="false" aria-controls="seo-content-6-2">Where are PDUs and
                                            SEUs applicable?</a> </h4>
                                </div>
                                <div id="seo-content-6-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-6-2">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>PDUs and SEUs are credits awarded by the <a href="https://www.pmi.org/certifications/certification-resources/maintain/earn-pdus" target="_blank" rel="nofollow">Project Management Institute
                                                </a>and the <a href="https://www.scrumalliance.org/get-certified/scrum-education-units" target="_blank" rel="nofollow">Scrum Alliance</a> respectively.
                                                They recognize your dedication to the Agile world through the award
                                                of credits for every educational effort you make throughout your
                                                career. Scrum Alliance members who hold a credential from Scrum
                                                Alliance need to earn SEUs to get re-certified every two years. PDUs
                                                are offered by the PMI®, and every PMI® certification, except the
                                                CAPM®, requires you to earn a specific number of PDUs per three-year
                                                certification cycle.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="seo-content-heading-6-3">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent=".seo-content-accordion-6" href="#seo-content-6-3" aria-expanded="false" aria-controls="seo-content-6-3">How many PDUs and
                                            SEUs will I be eligible for?</a> </h4>
                                </div>
                                <div id="seo-content-6-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="seo-content-heading-6-3">
                                    <div class="panel-body">
                                        <div class="editor-content">
                                            <p>You can get 14-16 PDUs and SEUs by participating in our 2-day
                                                training program.</p>
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
    <section class="testimonials" id="review-1">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="testimonials-summary">
                        <h2 class="section-heading"> Hear From Our Scrum Trainees </h2>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade user-voice active show in">
                            <div class="testimonial-list" data-toggle="view-more-items">
                                <div class="testimonial-thumb">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>Wonderful workshop for beginners .A great learning experience. Thank
                                                You Knowledge Hut. Instructor made it a interactive session which
                                                helped us to understand, learn. Completed successfully CSM course
                                                wit good grade!!</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/pooja-shukla-0b989677" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>pooja Shukla</h4> <span>Senior Software Engineer</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in January 2022 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>Interactive and with enough activities to make the course
                                                interesting. Handle time well according to 2 differrent timezones
                                                Allocate enough time for each activities. Love the Q&amp;A session
                                                Improvement: Answers provided by coach Give more real live scenarios
                                                and how to handle</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/chua-l-78b1a0/" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>Lea Keng Chua</h4> <span>IT</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in December 2020 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>The lecturer is very knowledgeable and very clear in explaining the
                                                concepts. The workshop experience was great. This is a very helpful
                                                course in providing more clarity on how the Scrum framework works in
                                                real life situations.</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/vanessa-wongjy" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>Vanessa Wong</h4> <span>Customer Relationship Manager</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in November 2020 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb" style="display: none;">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>Great experience! The instructor was well-organized and delivered the
                                                class in a very innovative and interactive fashion, making sure we
                                                understood completely the material.</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/dany-mahta-74a9a4a8/" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>Dany Mahta</h4> <span>Consultant</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in November 2020 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb" style="display: none;">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>Really great trainer and facilitator. Lots of hands-on examples,
                                                making it very relatable and easy to understand. Great workshop
                                                management and support after the training by KnowledgeHut team.</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/jeffrey-guss/" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>Jeffrey Guss</h4> <span>Business Product Owner</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in November 2020 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb" style="display: none;">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>Overall experience of the training and workshop was great. Well
                                                explained. Now I look forward to implementing it and growing my
                                                career.</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> </div>
                                                <div class="media-body">
                                                    <h4>Rajeswari Bijaya Sista</h4> <span>Senior Associate</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in November 2020 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb" style="display: none;">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>Great trainer, excellent delivery and very clear explanation. I liked
                                                the activity which enabled us to work on realistic problems. Happy
                                                with the support from KnowledgeHut throughout.</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/mohanshashi/" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>Shashi Mohan</h4> <span>Senior Member Technical Staff</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in November 2020 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-thumb" style="display: none;">
                                    <div class="media">
                                        <div class="media-left"> <img data-src="{{asset('images/1.png')}}" alt="Review image" class="img-circle lazy"> </div>
                                        <div class="media-body">
                                            <p>I am so glad that I attended “Certified Scrum Master (CSM®)
                                                Training/Workshop” organized by KnowledgeHut! on 16 and 17 Nov 2020.
                                                Trainer was excellent and Fantastic , who has proven that he has
                                                expertise with strong knowledge on the Agile Practice. Open to
                                                questions and kept training interesting and networked with in the
                                                team and other trainee fellows. The entire learning group had a mix
                                                of veterans from different industries and companies from PWC, McK,
                                                AXA, etc.</p>
                                            <div class="media">
                                                <div class="media-left media-middle"> <a href="https://www.linkedin.com/in/mahesh-n-8b667940" class="linkedin" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                                                <div class="media-body">
                                                    <h4>Mahesh Natarajan</h4> <span>Team Lead</span>
                                                </div>
                                            </div>
                                            <div class="test-attend"> Attended Certified ScrumMaster (CSM)® workshop
                                                in November 2020 </div>
                                        </div>
                                    </div>
                                </div> <a href="javascript:void(0);" class="load-more-test" data-page="3"><span><i class="fa fa-angle-down"></i></span><strong> Read More testimonials
                                    </strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-questions">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3> Have More Questions? </h3>
                    <div class="mail-call">
                        <div class="row">
                            <div class="col-md-12 col-sm-12"> <span> Mail Us </span> <a href="mailto:support@oneitech.com"> support@oneitech.com </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="mobile-sticky-footer visible-xs visible-sm">
    <div class="row">
        <div class="col-md-6 col-xs-6 advisor-btn"> <a href="javascript:void(0)" class="text-uppercase" data-toggle="modal" data-target="#footer-course-advisor-modal"> <i class="common-icons advisor nitro-lazy"></i> Course Advisor </a> </div>
        <div class="col-md-6 col-xs-6 schedules-btn"> <a rel="nofollow" href="agile-management/csm-certification-training/schedule" class="text-uppercase"> <i class="common-icons schedules nitro-lazy"></i> View Schedules </a> </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('js/csm-certification-training.js')}}"></script>
@endsection
