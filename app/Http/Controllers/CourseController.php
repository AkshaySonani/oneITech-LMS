<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function allCourses()
    {
        $course_categories = CourseCategory::with('courses')->get();
        // $courses = courses::with('highlights')->with('accrediteds')->where('course_category_id',$course_categories->id)->get();
        return response()->json(['course_categories'=>$course_categories,'code'=>200],200);
    }

    public function index()
    {
        //
        $course_categories = CourseCategory::with(['courses'=>function($q){$q->limit(8);}])->get();
        // $courses = courses::with('highlights')->with('accrediteds')->where('course_category_id',$course_categories->id)->get();
        return view('courses.courses',compact('course_categories'));
    }

    public function course($course)
    {
        // return view("courses.$course.index");
        $all_course_categories = CourseCategory::get();
        $course_category = CourseCategory::where('slug',$course)->first();
        // $courses = Course::with('highlights')->with('accrediteds')->where('course_category_id',$course_category->id)->get();
        return view('courses.selectedCoures',compact('course_category','all_course_categories'));
    }

    public function subCourse($course,$subcourse){
        return view("courses.$course.$subcourse");
        // $courses = CourseCategory::where('slug',$course)->with('courses' ,function($q) use ($subcourse){
        //     $q->where('slug',$subcourse )->first();
        // })->first();
        // $subcourses = courses::where('slug',$subcourse)->first();
        // $user_review = UserReview::orderBy('rating','DESC')->get();
        // return view('courses.subCourses',compact('courses','subcourses','user_review'));
    }

    public function bootcampCourse(){
        $course_categories = CourseCategory::with('courses')->get();
        $popular_courses = Course::where('is_popular',true)->get();
        return view('courses.bootcamp-courses',compact('course_categories','popular_courses'));
    }


    public function courseSchedule(){
        return view('courses.schedule');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
