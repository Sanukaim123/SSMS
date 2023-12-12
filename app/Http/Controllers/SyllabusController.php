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

    public function process(Request $request)
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


}
