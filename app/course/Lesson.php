<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use User;
use Review;
use Course;
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
}
