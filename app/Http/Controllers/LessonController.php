<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function showLesson($course_id, $lesson_id)
    {
        $lessonDetail = Lesson::findOrFail($lesson_id);
        return view('layouts.course-detail', compact('lessonDetail'));

    }

}
