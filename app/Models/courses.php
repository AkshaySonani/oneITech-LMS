<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public function highlights(){
        return $this->hasOne('App\Models\Highlights','course_id','id');
    }

    public function accrediteds()
    {
        return $this->hasMany('App\Models\Accredited','course_id','id');
    }

    public function edge()
    {
        return $this->hasMany('App\Models\Edge','course_id','id');
    }

    public function attends()
    {
        return $this->hasMany('App\Models\Attend','course_id','id');
    }

    public function learn()
    {
        return $this->hasMany('App\Models\Learn','course_id','id');
    }

    public function make_skill()
    {
        return $this->hasMany('App\Models\MakeSkill','course_id','id');
    }

    public function curriculum()
    {
        return $this->hasMany('App\Models\Curriculum','course_id','id');
    }

    public function course_category_faqs()
    {
        return $this->hasMany('App\Models\CourseCategoryFaqs','course_id','id');
    }

    public function overviews()
    {
        return $this->hasMany('App\Models\CourseOverview','course_id','id');
    }

    public function prerequisites()
    {
        return $this->hasMany('App\Models\CoursePrerequisites','course_id','id');
    }

}
