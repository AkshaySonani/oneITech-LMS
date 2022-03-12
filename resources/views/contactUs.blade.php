@extends('layouts.index')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/blog.css') }}">
<link rel="stylesheet" href="{{ asset('assets/contact.css') }}">
    <section class="contact-us-banner static-banner">
        <div class="static-overlay"></div>
        <div class="container">
            <h1 class="text-center">CONNECT WITH US!</h1>
        </div>
        <div class="basic-breadcrumb hidden-xs position-absolute breadcrumb-absolute">
            <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a
                        href="https://www.knowledgehut.com/" itemprop="item"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
                    <span itemprop="name">contact us</span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </section>
    <section class="contact-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6"> <a href="javascript:void($zopim.livechat.window.openPopout())"
                        class="contact-us-info bg-white text-center"> <i
                            class="icons icons-contact-us icon-chat-new nitro-lazy"></i> <span
                            class="contact-name">Chat</span> <span class="contact-mail">Average Time Less than 1
                            minute</span> </a> </div>
                <div class="col-md-3 col-sm-6"> <a href="mailto:support@knowledgehut.com"
                        class="contact-us-info bg-white text-center"><i
                            class="icons icons-contact-us icon-supports nitro-lazy"></i>
                        <span class="contact-name">Support</span> <span
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
            </div>
            <div class="contact-us-form">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="bg-white">
                            <h2 class="section-heading text-center">Contact Us Form</h2>
                            <form action="#" method="post"
                                class="form-list" id="contactUsForm" utm-params="true" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group input-field"> <input type="text" class="form-control"
                                                maxlength="100" name="first_name" required="" /> <i
                                                class="icons icons-contact icon-fullname nitro-lazy"></i> <label>First
                                                name</label> </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group input-field"> <input type="text" class="form-control"
                                                maxlength="100" name="last_name" required="" /> <i
                                                class="icons icons-contact icon-fullname nitro-lazy"></i> <label>Last
                                                name</label> </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group input-field"> <input type="text" class="form-control"
                                                maxlength="100" name="email" required="" /> <i
                                                class="icons icons-contact icon-email nitro-lazy"></i>
                                            <label>E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <div class="form-group">
                                                    <div class="right-inner-addon"> <i
                                                            class="icons select-icon nitro-lazy"></i>
                                                            <select name="isd"
                                                            class="form-control isd-code select-picker">
                                                        </select> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group input-field"> <input type="text"
                                                        class="form-control" maxlength="100" name="phone" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || (event.keyCode == 8 || event.keyCode == 46
                                                        || event.keyCode == 37 || event.keyCode == 39)' required="" />
                                                    <i class="icons icons-contact icon-phone nitro-lazy"></i>
                                                    <label>Phone</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="right-inner-addon"> <i class="icons select-icon nitro-lazy"></i>
                                                <select name="course_id" class="form-control">
                                                    <option value="" selected="selected">Select Course</option>
                                                </select> <i class="icons icons-contact icon-fullname nitro-lazy"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message" maxlength="500" rows="4" class="form-control" name="query"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 hide">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-success"> <input id="contact-us-checkbox-agree"
                                                    class="styled checkbox-agree used" name="agree_gdpr" type="checkbox" />
                                                <label for="contact-us-checkbox-agree">I consent to receive communications
                                                    by email, SMS, phone and other electronic means from KnowledgeHut.
                                                    See our <a href="https://www.knowledgehut.com/privacy-policy"
                                                        class="color-3" target="_blank">privacy policy</a> and
                                                    <a href="https://www.knowledgehut.com/terms-conditions"
                                                        class="color-3" target="_blank">terms &amp;
                                                        conditions</a> for your rights under GDPR.</label> </div>
                                        </div>
                                    </div>
                                </div> <button type="submit" class="btn btn-success waves-effect waves-light">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
