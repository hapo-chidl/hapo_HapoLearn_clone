<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course\Course;
use App\course\Lesson;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->course_search;
        $courses = Course::query();
        if ($keyword) {
            $courses = $courses->where('name', 'like', "%".$keyword."%")
                ->orWhere('description', 'like', "%".$keyword."%");
        }
        $courses = $courses->paginate(config('Paginate.pagination'));
        return view('layouts.listcourse')->with('listCourse', $courses);
    }
    
    public function show($id) {
        $courseDetail = Course::findOrFail(1);
        $lessons = $courseDetail->lessons();
        $teachers = $courseDetail->users();
        $countLesson = $lessons->count();
        return view('layouts.course-detail', compact('lessons', 'courseDetail', 'countLesson','teachers'));
    }
}
