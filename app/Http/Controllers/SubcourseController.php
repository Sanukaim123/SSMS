<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcourse;
use App\Models\Subject;
use App\Models\Course;
use Illuminate\Support\Collection;

class SubcourseController extends Controller
{
    public function createForm()
    {
        $subjects = Subject::pluck('S_Code', 'id');
        $courses = Course::pluck('Course_Code', 'id');

        return view('admin.subcourse.form', compact('subjects', 'courses'));
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'S_Code' => 'required',
            'Course_Codes' => 'required|array',
        ]);

        $sCode = $request->input('S_Code');
        $courseCodes = $request->input('Course_Codes');

        foreach ($courseCodes as $courseCode) {
            Subcourse::create([
                'S_Code' => $sCode,
                'Course_Code' => $courseCode,
            ]);
        }

        return redirect()->route('admin.subcourse.form')->with('success', 'Subcourses added successfully');
    }

    public function showSubjects()
    {
        $subjects = Subject::all();
        $courseUnits = Course::all()->pluck('Course_Code');

        $groupedSubjects = $subjects->groupBy('S_Code');

        $groupedData = new Collection();

        foreach ($courseUnits as $courseUnit) {
            if ($groupedSubjects->has($courseUnit)) {
                $groupedData[$courseUnit] = $groupedSubjects[$courseUnit];
            }
        }

        return view('admin.subcourse.show', compact('groupedData'));
    }
}
