<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public function highlights()
    {
        return $this->hasMany('App\Models\Highlight','course_id','id');
    }

    public function accrediteds()
    {
        return $this->hasMany('App\Models\CourseAccredited','course_id','id');
    }
    public function enrolleds()
    {
        return $this->hasMany('App\Models\UserCourse','course_id','id');
    }
}
