<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/list-course', 'CourseController@index')->name('list_course');
Route::get('/list-course/{id}', 'CourseController@show')->name('course_detail');
Route::get('/list-course/{course_id}/{lesson_id}','LessonController@showLesson')->name('lesson');
