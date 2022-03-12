<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;

    public function addedBy()
    {
        return $this->hasMany('App\Models\User','id','added_by');
    }

    public function course()
    {
        return $this->hasMany('App\Models\courses','id','course_id');
    }
}
