<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddCourses;

class StudentController extends Controller
{
    public function store(Request $request){
        Post::create([
            'courseCode'=>$request->courseCode,
            'courseName'=>$request->courseName,
            'credit'=>$request->credit,
            'subject'=>$request->subject,
            'level'=>$request->level,
            'semester'=>$request->semester,
            'course_content'=>$request->course_content
        ]);

    }
}
