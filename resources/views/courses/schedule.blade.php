@extends('layouts.index')
@section('css')
    <style>
        footer{
            display: none !important;
        }

    </style>
    <link rel="stylesheet" href="{{asset('assets/css_3_0/minified/csm-certification-training.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="breadcrumb-share clearfix hidden-xs">
        <div class="pull-left">
            <div class="basic-breadcrumb">
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="{{route('home')}}" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="{{route('courses.course',['course'=>$course->slug])}}" itemprop="item">
                            <span itemprop="name">{{$course->name}}</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="{{route('courses.course.subcourse',['course'=>$course->slug,'subcourse'=>$subcourse->slug])}}" itemprop="item">
                            <span itemprop="name">{{$subcourse->name}}</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="name">Schedule</span>
                        <meta itemprop="position" content="4">
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
        {{$course->name}}
        <br>
        <br>
        {{$subcourse->name}}
    </div>
</div>
@endsection
