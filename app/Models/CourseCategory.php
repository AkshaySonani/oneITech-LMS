<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;
    protected $table = 'course_categories';

    public function courses()
    {
        return $this->hasMany('App\Models\courses','course_category_id','id');
    }

    public function enrolleds()
    {
        return $this->hasMany('App\Models\CourseEnrolled','course_category_id','id');
    }
}
