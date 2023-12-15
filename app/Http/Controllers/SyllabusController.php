<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syllabus1;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Level;
use App\Models\Semester;
use Illuminate\Support\Collection;

class SyllabusController extends Controller
{
    public function add()
    {
        $subjects = Subject::pluck('S_Code', 'id');
        $levels = Level::pluck('Level', 'id');
        $semesters = Semester::pluck('Semester_name', 'id');
        $courses = Course::pluck('Course_Code', 'id');

        return view('admin.add_syllabus', compact('subjects','levels','semesters', 'courses'));
    }

    public function syllabus_process(Request $request)
    {
        $request->validate([
            'S_Code' => 'required',
            'Level' => 'required',
            'Semester_name' => 'required',
            'Course_Codes' => 'required|array',
        ]);

        $sCode= $request->input('S_Code');
        $level = $request->input('Level');
        $semester = $request->input('Semester_name');
        $courseCodes = $request->input('Course_Codes');

        foreach ($courseCodes as $courseCode) {
           Syllabus1::create([
                'S_Code' =>$sCode,
                'Level'=>$level,
                'Semester_name'=>$semester,
                'Course_Code' => $courseCode,
            ]);
        }

        return redirect()->route('admin.add_syllabus')->with('success', 'Subcourses added successfully');
    }
    public function showCourseUnits($sCode, $level, $semester)
{
    // Retrieve the course codes from the syllabus table based on the given criteria
    $courseCodes = Syllabus1::where('S_Code', $sCode)
                           ->where('Level', $level)
                           ->where('Semester_name', $semester)
                           ->pluck('Course_Code');

    // Retrieve the course units from the courses table based on the course codes
    //$courseUnits = Course::whereIn('Course_Code', $courseCodes)->get();

    return view('student.Matl1s1', compact('courseCodes'));
}


}
