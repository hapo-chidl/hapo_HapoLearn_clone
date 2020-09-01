<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Course;
use SoftDeletes;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_id');
    }
}
