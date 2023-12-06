<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class Course_unitController extends Controller
{
    public function show_course_units(){
    $courses=Course::all();
    return view('admin.show_course_units',['courses'=>$courses]);
}
    
    
    public function add_course_units(){
        return view('admin.add_course_units');
    }

    public function course_store(Request $request){
        $data=$request->validate([
            
            'Course_Code'=>'required',
            'Course_Name'=>'required',
            'Credit_Value'=>'required',
            'Description'=>'required'
        ]);

        $newCourse= Course::create($data);
        return redirect(route('admin.show_course_units'));  
    }

    public function destroy(Course $course){
        $course->delete();
        return redirect(route('admin.show_course_units'))->with('success','Course unit deleted Succesfully');
    }

}