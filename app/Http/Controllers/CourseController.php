<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function search(Request $request)
    {
        $query = $request->input('query');
        $courses = Course::where('name', 'LIKE', "%{$query}%")
            ->orWhere('register', 'LIKE', "%{$query}%")->paginate(5);
        return view('course.index', compact('courses'));
    }

    public function index()
    {
        $courses = Course::paginate(5);
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        // return $request;
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->student_limit = $request->student_limit;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $course->register = $request->register;
        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // return $course;
        return view('course.detail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        // return $course;
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        // return $course;
        // return $request;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->student_limit = $request->student_limit;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $course->register = $request->register;
        $course->update();
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if ($course) {
            $course->delete();
        };
        return back();
    }
}
