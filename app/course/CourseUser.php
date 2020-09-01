<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class CourseUser extends Model
{
    protected $table = 'course_user';
    protected $fillable = [
        'course_id', 'user_id',
    ];
}
