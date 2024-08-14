<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/course', CourseController::class);
Route::resource('/student', StudentController::class);
Route::get('/search',[StudentController::class,'search'])->name('student.search');
Route::get('/CourseSearch',[CourseController::class,'search'])->name('course.search');
