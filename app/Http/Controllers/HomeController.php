<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course = Course::orderBy('id', 'ASC')->limit(config('Paginate.course'))->get();
        $courseOld = Course::orderBy('id', 'DESC')->limit(config('Paginate.course'))->get();
        $courseCount = Course::count();
        $lessonCount = Lesson::count();
        $reviews = Review::query();
        foreach($reviews as $key => $review)
        {
            dd($review->comment_content);
            echo($review->comment_content);
        }
        return view('index', compact('course', 'courseOld','courseCount','lessonCount','reviews'));
    }
}
