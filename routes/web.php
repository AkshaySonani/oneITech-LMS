<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home
Route::get('/',[HomeController::class,'index'])->name('home');
//courses
Route::get('all-courses',[CourseController::class,'allCourses'])->name('all-courses');
Route::prefix('courses')->group(function () {
    Route::get('/',[CourseController::class,'index'])->name('courses');
    Route::get('/{course}',[CourseController::class,'course'])->name('courses.course');
    Route::get('/{course}/{subcourse}',[CourseController::class,'subCourse'])->name('courses.course.subcourse');
    Route::get('/popular/{subcourse}',[CourseController::class,'subCourse'])->name('courses.popular.subcourse');
});
Route::get('course/bootcamp',[CourseController::class,'bootcampCourse'])->name('courses.bootcamp_courses');

//blog
Route::get('blog', [HomeController::class,'blog'])->name('blog');

//faqs
Route::get('faqs', [HomeController::class,'faqs'])->name('faqs');

//contact-us
Route::get('contact-us', [HomeController::class,'contactUs'])->name('contact-us');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
