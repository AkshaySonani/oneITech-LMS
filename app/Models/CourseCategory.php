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
        return $this->hasMany('App\Models\Course','course_category_id','id');
    }
}
