@extends('layouts.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/blog.css') }}">
    <section class="topics">
        <div class="container">
            <h2 class="section-heading">Topics</h2>
            <div class="row">
                <div class="col-md-3 col-sm-3"> <a class="topic-list-overview" href="#"> <span class="topic-list"> <i
                                class="icons icon-topic icon-topic-5 nitro-lazy"></i> <span
                                class="topic-name">Blogs</span> </span> </a> </div>
                <div class="col-md-3 col-sm-3"> <a class="topic-list-overview" href="#"> <span class="topic-list"> <i
                                class="icons icon-topic icon-topic-2 nitro-lazy"></i> <span
                                class="topic-name">Infographics</span> </span> </a> </div>
                <div class="col-md-3 col-sm-3"> <a class="topic-list-overview" href="#"> <span class="topic-list"> <i
                                class="icons icon-topic icon-topic-3 nitro-lazy"></i> <span
                                class="topic-name">News</span> </span> </a> </div>
                <div class="col-md-3 col-sm-3"> <a class="topic-list-overview" href="#"> <span class="topic-list"> <i
                                class="icons icon-topic icon-topic-4 nitro-lazy"></i> <span
                                class="topic-name">Announcements</span> </span> </a> </div>
            </div>
        </div>
    </section>
    <section class="latest-articles">
        <div class="container">
            <h2 class="section-heading">Latest Posts</h2>
            <div class="row post-data">
                <div class="col-md-4 col-sm-6">
                    <div class="blog-listing-thumbnail">
                        <div class="blog-thumb-img">
                            <a href="#">
                                <img src="{{asset('images/data-scientist.webp')}}" alt="Top SAFe Certifications"  />
                            </a>
                        </div>
                        <div class="blog-thumb-overview">
                            <div class="blog-type-likes clearfix">
                                <div class="pull-left"> <a href="#"  class="blog-type"> Blogs </a> </div>
                                <div class="pull-right">
                                    <div class="blog-list-likes"> <i class="fa fa-eye"></i> <span>5480</span>
                                    </div>
                                </div>
                            </div> <a data-toggle="tooltip" title="Top SAFe Certifications "
                                href="#"
                                class="blog-thumb-heading"> Top SAFe Certifications </a>
                            <div class="blog-summary-list">
                                <ul class="list-inline clearfix">
                                    <li> by <a href="#"> Rajesh
                                            Bhagia </a> </li>
                                    <li> 21 Sep 2021 </li>
                                    <li> 20 mins read </li>
                                </ul>
                            </div>
                            <div class="editor-content">
                                <p> Many companies have a challenge using Agile as the... <a
                                        href="#">Read
                                        More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-listing-thumbnail">
                        <div class="blog-thumb-img">
                            <a href="#">
                                <img src="{{asset('images/data-scientist.webp')}}" alt="Top SAFe Certifications"  />
                            </a>
                        </div>
                        <div class="blog-thumb-overview">
                            <div class="blog-type-likes clearfix">
                                <div class="pull-left"> <a href="#"  class="blog-type"> Blogs </a> </div>
                                <div class="pull-right">
                                    <div class="blog-list-likes"> <i class="fa fa-eye"></i> <span>5480</span>
                                    </div>
                                </div>
                            </div> <a data-toggle="tooltip" title="Top SAFe Certifications "
                                href="#"
                                class="blog-thumb-heading"> Top SAFe Certifications </a>
                            <div class="blog-summary-list">
                                <ul class="list-inline clearfix">
                                    <li> by <a href="#"> Rajesh
                                            Bhagia </a> </li>
                                    <li> 21 Sep 2021 </li>
                                    <li> 20 mins read </li>
                                </ul>
                            </div>
                            <div class="editor-content">
                                <p> Many companies have a challenge using Agile as the... <a
                                        href="#">Read
                                        More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-listing-thumbnail">
                        <div class="blog-thumb-img">
                            <a href="#">
                                <img src="{{asset('images/data-scientist.webp')}}" alt="Top SAFe Certifications"  />
                            </a>
                        </div>
                        <div class="blog-thumb-overview">
                            <div class="blog-type-likes clearfix">
                                <div class="pull-left"> <a href="#"  class="blog-type"> Blogs </a> </div>
                                <div class="pull-right">
                                    <div class="blog-list-likes"> <i class="fa fa-eye"></i> <span>5480</span>
                                    </div>
                                </div>
                            </div> <a data-toggle="tooltip" title="Top SAFe Certifications "
                                href="#"
                                class="blog-thumb-heading"> Top SAFe Certifications </a>
                            <div class="blog-summary-list">
                                <ul class="list-inline clearfix">
                                    <li> by <a href="#"> Rajesh
                                            Bhagia </a> </li>
                                    <li> 21 Sep 2021 </li>
                                    <li> 20 mins read </li>
                                </ul>
                            </div>
                            <div class="editor-content">
                                <p> Many companies have a challenge using Agile as the... <a
                                        href="#">Read
                                        More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more text-center"> <button id="blogs-view-more-home" type="button" class="btn btn-success">
                    Load More </button> </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".save-percent").css("opacity", "0").css("top", "117px").css("height", "0").css("z-index", "-1");
            $(".body-top-section-close").on("click", function() {
                $(".body-top-section").css("height", "0");
                $(".save-percent").css("opacity", "1").css("top", "67px").css("z-index", "9999999999");
                $(".nav-togglebar").css("margin-right", "35px").css("transition", "all 2s")
            });
            $(".save-percent").on("click", function() {
                $(".body-top-section").css("height", "50");
                $(".save-percent").css("opacity", "0").css("top", "117px").css("z-index", "-1");
                $(".nav-togglebar").css("margin-right", "-10px").css("transition", "all 2s");
                $("html, body").animate({
                    scrollTop: 0
                }, 500)
            });
            $.extend(formObjs, {
                blogSubscriptionForm: {
                    defaults: {
                        track: {
                            analytics: {
                                name: "Blog Subscription",
                                label: "Blog Subscription Form Submit"
                            }
                        },
                        afterAjax: function(t) {
                            if (t.response.success == false) {
                                notify("error", t.response.result.message);
                                if (typeof t.response.result.validations != "undefined") {
                                    $.each(t.response.result.validations, function(e, s) {
                                        $(t.currentForm).find('input[name="' + e +
                                            '"], textarea[name="' + e +
                                            '"], select[name="' + e + '"]').after(s)
                                    })
                                }
                            }
                            if (t.response.success == true) {
                                t.settings.trackPixel(t);
                                setFieldsIn($(t.currentForm));
                                t.settings.reset(t);
                                $("#blog-subscribe-status").removeClass("fixed-bottom");
                                $("#blog-subscribe-status").addClass("hide");
                                $(".blog-subscribe-status").addClass("fixed-bottom");
                                $(".blog-subscribe-status").removeClass("hide")
                            }
                            $(t.currentForm).find('button[type="submit"]').button("reset")
                        }
                    },
                    validation: {
                        ignore: [],
                        rules: {
                            email: validationRules.email,
                            certifying_authority: validationRules.certifying_authority
                        }
                    }
                }
            });
            $(".subscription-form").formValidation("blogSubscriptionForm");
            $.extend(formObjs, {
                blogSubscriptionActivationForm: {
                    defaults: {
                        track: {
                            analytics: {
                                name: "Blog Subscription Activation",
                                label: "Blog Subscription Activation Form Submit"
                            }
                        },
                        afterAjax: function(t) {
                            if (t.response.success == false) {
                                notify("error", t.response.result.message);
                                if (typeof t.response.result.validations != "undefined") {
                                    $.each(t.response.result.validations, function(e, s) {
                                        $(t.currentForm).find('input[name="' + e +
                                            '"], textarea[name="' + e +
                                            '"], select[name="' + e + '"]').after(s)
                                    })
                                }
                            }
                            if (t.response.success == true) {
                                t.settings.trackPixel(t);
                                setFieldsIn($(t.currentForm));
                                t.settings.reset(t);
                                $(".blogSubscriptionSuccessForm").submit()
                            }
                        }
                    },
                    validation: {
                        ignore: [],
                        rules: {
                            first_name: validationRules.first_name,
                            last_name: validationRules.last_name,
                            email: validationRules.email,
                            certifying_authority: validationRules.certifying_authority
                        }
                    }
                }
            });
            $(".blogSubscriptionActivationForm").formValidation("blogSubscriptionActivationForm");
            $(".blogSearchIcon").on("click", function() {
                if ($("input[name='q']").val().length) $(".blogSearchIcon").closest("form").submit();
                else return
            });
            $(".mode input").change(function() {
                if ($(this).is(":checked")) $("body").addClass("dark");
                else $("body").removeClass("dark")
            });
            $("#blog-post-carousel").owlCarousel({
                itemsCustom: [
                    [0, 1],
                    [450, 1],
                    [600, 1],
                    [700, 1],
                    [1e3, 1],
                    [1200, 1],
                    [1400, 1],
                    [1600, 1]
                ],
                navigation: true,
                slideSpeed: 800,
                autoPlay: false,
                items: 1,
                stopOnHover: true,
                pagination: false,
                navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
            });
            $("#blog-category-carousel").slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 2,
                centerMode: false,
                arrows: false,
                autoplay: false,
                initialSlide: 0,
                variableWidth: true
            })
        });
        $(".social-media-login a").each(function() {
            $(this).attr("is_author", 1)
        });
        $("#btn_strt_wrt").click(function() {
            is_blog_page = 1;
            $("input[name='is_blog_page']").val(1)
        });
        $(".login-modal").on("hidden.bs.modal", function() {
            $("input[name='is_blog_page']").val(0);
            is_blog_page = 0
        });
        var nProgressLoader = new customLoader;
        nProgressLoader.init({
            src: "{{asset('js/nprogress.js')}}",
            id: "id-nprogress",
            _onEvent: function(e) {
                e._loadScript(e)
            },
            _onReady: function() {
                NProgress.configure({
                    showSpinner: false
                });
                NProgress.start();
                setTimeout(function() {
                    NProgress.done();
                    $(".fade").removeClass("out")
                }, 2e3)
            }
        });
        $(".blog-search").click(function(e) {
            e.preventDefault();
            if ($(".blog-search-list").hasClass("open")) {
                $(".blog-search-list").removeClass("open");
                $("html, body").css("overflowY", "auto")
            } else {
                $(".blog-search-list").addClass("open");
                $("html, body").css("overflowY", "hidden")
            }
        });
        $(window).bind("load resize", function(e) {
            e.preventDefault();
            if (window.innerWidth < 1024) {
                $(".blog-search").click(function(e) {
                    $(".blog-search-list").removeClass("open");
                    e.preventDefault();
                    if ($(".blog-search-list").hasClass("open")) {
                        $(".blog-search-list").removeClass("open");
                        $("html, body").css("overflowY", "auto")
                    } else {
                        $(".blog-search-list").addClass("open");
                        $("html, body").css("overflowY", "hidden")
                    }
                })
            } else {
                $(".blog-search-list").removeClass("open");
                $("html, body").css("overflowY", "auto")
            }
        });
        $(".blog-search-list .close").on("click", function() {
            $(".blog-search-list").removeClass("open");
            $("html, body").css("overflowY", "auto")
        });
        var owl = $("#trending-blog-posts");
        owl.owlCarousel({
            itemsCustom: [
                [0, 1.15],
                [360, 1.25],
                [450, 1.15],
                [600, 1],
                [700, 2],
                [1e3, 3],
                [1200, 4],
                [1400, 4],
                [1600, 4]
            ],
            navigation: false,
            center: false,
            rewindNav: true,
            addClassActive: true,
            slideSpeed: 800,
            items: 1,
            stopOnHover: true,
            pagination: false,
            navigation: false,
            autoPlay: true,
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            afterInit: function() {
                owl.find(".owl-wrapper").each(function() {
                    var e = $(this).width() / 2;
                    $(this).width(e);
                    $(this).css("margin", "0 auto")
                })
            },
            afterUpdate: function() {
                owl.find(".owl-wrapper").each(function() {
                    var e = $(this).width() / 2;
                    $(this).width(e);
                    $(this).css("margin", "0 auto")
                })
            }
        });
        var owl = $("#trending-posts");
        owl.owlCarousel({
            itemsCustom: [
                [0, 1],
                [360, 1],
                [450, 1],
                [600, 1],
                [700, 1],
                [1e3, 1],
                [1200, 1],
                [1400, 1],
                [1600, 1]
            ],
            slideSpeed: 800,
            items: 1,
            stopOnHover: true,
            pagination: true,
            navigation: false,
            autoPlay: true
        });
        $(".subscribe-close").click(function() {
            $(".blog-subscribe").fadeOut(1e3);
            $("footer").removeClass("blog-subscribe-mr")
        });
    </script>
@endsection
