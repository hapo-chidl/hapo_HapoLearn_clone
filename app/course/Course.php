<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Tag;
use User;
use Lesson;
use SoftDeletes;

class Course extends Model
{
    protected $fillable = [
        'name', 'image', 'requements', 'description', 'price', 'time',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}
