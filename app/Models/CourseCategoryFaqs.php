<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategoryFaqs extends Model
{
    use HasFactory;
    public function faqs()
    {
        return $this->hasMany('App\Models\CourseFaqs','course_category_faqs_id','id');
    }
}
