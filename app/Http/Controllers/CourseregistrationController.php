<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courseregistretion;
use App\Models\User;
use App\Models\Course;

use Illuminate\Support\Collection;

class CourseregistrationController extends Controller
{
    public function createForm()
    {
        $users=User::pluck('name','id');
        $courses = Course::pluck('Course_Code', 'id');

        return view('abc', compact('users','courses'));
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'Course_Codes' => 'required|array'
        ]);

       
        $courseCodes = $request->input('Course_Codes');

        foreach ($courseCodes as $courseCode) {
            Course::create([
               
                'Course_Code' => $courseCode,
            ]);
        }

        return redirect()->route('abc')->with('success', 'Subcourses added successfully');
    }
}
