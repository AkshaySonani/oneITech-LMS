<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqsCategory extends Model
{
    use HasFactory;
    public function faqs()
    {
        return $this->hasMany('App\Models\Faqs','faq_category_id','id');
    }
}
