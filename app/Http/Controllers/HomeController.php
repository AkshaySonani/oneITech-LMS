<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use App\Models\Faqs;
use App\Models\FaqsCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','blog','faqs','contactUs');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course_categories = CourseCategory::with('courses')->get();
        return view('home',compact('course_categories'));
    }
    public function blog(){
        $course_categories = CourseCategory::get();
        return view('blog',compact('course_categories'));
    }
    public function faqs(){
        $faqs = Faqs::get();
        $faq_categories = FaqsCategory::with('faqs')->get();
        return view('faqs',compact('faqs','faq_categories'));
    }
    public function contactUs(){
        return view('contactUs');
    }
}
