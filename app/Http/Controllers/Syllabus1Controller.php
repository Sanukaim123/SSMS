<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sylllabus11;
use App\Models\Subject;
use App\Models\Level;
use App\Models\Semester;
use App\Models\Course;
use Illuminate\Support\Collection;

class Syllabus1Controller extends Controller
{
    public function create()
    {
        // Fetch data for dropdowns
        $subjects = Subject::pluck('S_Code', 'id');
        $levels = Level::pluck('Level', 'id');
        $semesters = Semester::pluck('Semester_name', 'id');
        $courses = Course::pluck('Course_code', 'id');

        return view('admin.add_syllabus1', compact('subjects', 'levels', 'semesters', 'courses'));
    }

    public function store(Request $request)
    {
       
        // Validate the form data as needed
        $request->validate([
            'S_Code' => 'required',
            'Level' => 'required',
            'Semester_name' => 'required',
            'Course_code' => 'required',
            //'Course_name' => 'required',
            'Credit' => 'required',
        ]);

        // Create a new Sylllabus11 instance
        $syllabus = new Sylllabus11([
            'S_Code' => $request->input('S_Code'),
            'Level' => $request->input('Level'),
            'Semester_name' => $request->input('Semester_name'),
            'Course_code' => $request->input('Course_code'),
            //'Course_name' => $request->input('Course_name'),
            'Credit' => $request->input('Credit'),
        ]);
       
        
        
        // Save the instance to the database
        $syllabus->save();

        return redirect()->route('syllabus.create')->with('success', 'Syllabus added successfully!');
    }

    public function filter()
    {
        // Assuming you want to filter records here
        $filteredSyllabus = Sylllabus11::where('S_Code', 'MAT')
            ->where('Level', 'Level1')
            ->where('Semester_name', '1')
            ->get();

        return view('filter', compact('filteredSyllabus'));
    }
}
