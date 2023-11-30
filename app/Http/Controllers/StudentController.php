<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students', [
            "title" => "Student List",
            "students" => Student::all(),
        ]);
    }

    public function show(Student $student)
    {
        return view('student', [
            "title" => "Student Details",
            "student" => $student,
        ]);
    }
}
