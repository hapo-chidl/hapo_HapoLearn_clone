<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Review;
use App\Models\Course;
use SoftDeletes;

class Lesson extends Model
{
    protected $fillable = [
        'name', 'requements', 'description', 'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'lesson_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'leson_id');
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getCourseNameAttribute()
    {
        $course =  $this->courses();
        return $course;
    }

}
