<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function search(Request $request)
    {
        // return $request;
        $query = $request->input('query');
        $students = Student::where('name', 'LIKE', "%{$query}%")
            ->orWhere('gender', 'LIKE', "%{$query}%")
            ->paginate(5);
        return view('student.index', compact('students'));
    }

    public function index()
    {
        $students = Student::paginate(5);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('student.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        // return $request;
        $student = new Student();
        $student->name = $request->name;
        $student->course_id = $request->course_id;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        // return $student;
        return view('student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        // return $student;
        $courses = Course::all();
        return view('student.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // return $request;
        $student->name = $request->name;
        $student->course_id = $request->course_id;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->update();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if ($student) {
            $student->delete();
        }
        return back();
    }
}
