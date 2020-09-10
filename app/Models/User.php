<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Lesson;
use App\Models\Course;
use SoftDeletes;

class User extends Model
{
    protected $fillable = [
        'name', 'avatar', 'role', 'password', 'link_facebook', 'email', 'link_slack', 'introduction',
    ];

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
