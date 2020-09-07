<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\course\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(config('Paginate.pagination'));
        return view('layouts.listcourse')->with('listCourse', $courses);
    }

    public function searchCourse(Request $request)
    {
        $keyword = $request->course_search;
        $courses = Course::where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('description', 'like', '%' . $keyword . '%')
                        ->paginate(config('Paginate.pagination'));
        return view('layouts.listcourse')->with('listCourse', $courses);
    }
}
