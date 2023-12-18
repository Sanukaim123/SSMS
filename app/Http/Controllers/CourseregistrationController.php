<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courseregistration;
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
        'name' => 'required',
        'Course_Codes' => 'required|array',
    ]);

    $name = $request->input('name');
    $courseCodes = $request->input('Course_Codes');
//dd($request);
    foreach ($courseCodes as $courseCode) {
        Courseregistration::create([
            'name' => $name,
            'Course_Code' => $courseCode,
        ]);
    }

    return redirect()->route('abc')->with('success', 'Subcourses added successfully');
}
public function showCourseUnits($sCode, $level, $semester)
{
// Retrieve the course codes from the syllabus table based on the given criteria
//dd($sCode, $level, $semester);
    $courseCodes = Courseregistration::where('name', $name)
                        ->where('S_Code', $sCode)
                        
                        ->pluck('Course_Code');
    //dd($courseCodes);
    // Retrieve the course units from the courses table based on the course codes
    //$courseUnits = Course::whereIn('Course_Code', $courseCodes)->get();

    return view('mycourses', compact('courseCodes'));
}
}
