@extends('layouts.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/faqs.css') }}">
    <section class="faq-banner static-banner">
        <div class="static-overlay"></div>
        <div class="container">
            <h1 class="text-center text-uppercase">Faqs</h1>
        </div>
        <div class="basic-breadcrumb hidden-xs position-absolute breadcrumb-absolute">
            <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{ route('home') }}" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
                    <span itemprop="name">faqs</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </section>
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="bg-white categories">
                        <h4 class="text-uppercase"> Categories </h4>
                        <ul class="ul-categories" data-toggle="view-more-categories">
                            @foreach ($faq_categories as $faq_category)
                                <li role="presentation" class="{{$faq_category->id == 1 ? "active" : ""}}"> <a href="#faq_{{ $faq_category->id }}"
                                        aria-controls="faq_{{ $faq_category->id }}" role="tab"
                                        data-toggle="tab">{{ $faq_category->name }} <span
                                            class="">{{ $faq_category->faqs->count() }}</span></a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="media visible-sm visible-xs">
                                <div class="media-left media-middle text-uppercase"> Category : </div>
                                <div class="media-body">
                                    <form>
                                        <div class="form-group inner-addon right-addon">
                                            <i class="fa fa-angle-down input-icon"></i>
                                            <select name="faq_category" class="form-control icon-down">
                                                <option value="1">About KnowledgeHut</option>
                                                <option value="2">Courses</option>
                                                <option value="3">Registration</option>
                                                <option value="4">Instructors</option>
                                                <option value="5">Traning Affiliations</option>
                                                <option value="6">Pricing/Refunds</option>
                                                <option value="7">Support</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-questions bg-white tab-content">
                        @foreach ($faq_categories as $faq_category)
                        <div role="tabpanel" class="tab-pane fade in {{$faq_category->id == 1 ? "active" : ""}}" id="faq_{{$faq_category->id}}">
                            <div aria-multiselectable="true" role="tablist" id="faqs-accordion-1" class="faq-s panel-group">
                                @foreach ($faq_category->faqs as $faq)
                                @php $n = 0; @endphp
                                <div class="panel panel-default">
                                    <div id="faqs{{ $faq->id }}" role="tab" class="panel-heading">
                                        <h4 class="panel-title"><a aria-controls="learn{{ $faq->id }}"
                                                aria-expanded="false" href="#learn{{ $faq->id }}"
                                                data-parent="#faqs-accordion-{{ $n++ }}" data-toggle="collapse"
                                                role="button" class=" "><span
                                                    class="question-circle">{{ $faq->id }}</span>{{ $faq->question }}</a>
                                        </h4>
                                    </div>
                                    <div aria-labelledby="faqs{{ $faq->id }}" role="tabpanel"
                                        class="panel-collapse collapse in" id="learn{{ $faq->id }}"
                                        aria-expanded="false">
                                        <div class="panel-body">
                                            <div class="editor-content">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="faqs-cant-find">
                <h2 class="section-heading text-center">CAN'T FIND ANSWER? ASK US DIRECTLY! </h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6"> <a href="mailto:support@knowledgehut.com"
                            class="contact-us-info bg-white text-center"><i
                                class="icons icons-contact-us icon-supports nitro-lazy"></i> <span
                                class="contact-name">Support</span> <span
                                class="contact-mail">support@knowledgehut.com</span></a> </div>
                    <div class="col-md-3 col-sm-6"> <a href="mailto:corporate@knowledgehut.com"
                            class="contact-us-info bg-white text-center"><i
                                class="icons icons-contact-us icon-corporate-support nitro-lazy"></i> <span
                                class="contact-name">Corporate</span> <span
                                class="contact-mail">corporate@knowledgehut.com</span></a> </div>
                    <div class="col-md-3 col-sm-6"> <a href="mailto:invoice@knowledgehut.com"
                            class="contact-us-info bg-white text-center"><i
                                class="icons icons-contact-us icon-invoice-support nitro-lazy"></i> <span
                                class="contact-name">Invoice</span> <span
                                class="contact-mail">invoice@knowledgehut.com</span></a> </div>
                    <div class="col-md-3 col-sm-6"> <a href="mailto:technicalsupport@knowledgehut.com"
                            class="contact-us-info bg-white text-center"><i
                                class="icons icons-contact-us icon-technical-support nitro-lazy"></i> <span
                                class="contact-name">Technical Support</span> <span
                                class="contact-mail">technicalsupport@knowledgehut.com</span></a> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="company-summary text-center text-uppercase">
        <div class="container">
           <div class="row">
              <div class="col-md-3 col-sm-3">
                 <i class="icons icon-summary icon-course-summary nitro-lazy"></i>
                 <h3><span class="counter">250</span>+</h3>
                 <h6>Best courses</h6>
              </div>
              <div class="col-md-3 col-sm-3">
                 <i class="icons icon-summary icon-teacher-summary nitro-lazy"></i>
                 <h3><span class="counter">500</span>+</h3>
                 <h6>Best teachers</h6>
              </div>
              <div class="col-md-3 col-sm-3">
                 <i class="icons icon-summary icon-country-summary nitro-lazy"></i>
                 <h3><span class="counter">70</span></h3>
                 <h6>countries</h6>
              </div>
              <div class="col-md-3 col-sm-3">
                 <i class="icons icon-summary icon-learners-summary nitro-lazy"></i>
                 <h3><span class="counter">2,50,750</span></h3>
                 <h6>Learners</h6>
              </div>
           </div>
        </div>
     </section>
@endsection
@section('script')
<script src="{{asset('js/faqs.js')}}"></script>
@endsection
