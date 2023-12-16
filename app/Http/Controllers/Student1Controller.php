<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Student1Controller extends Controller
{
    public function index(){
        $students=Student::all();
        return view('students.index',['students'=>$students]);
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'index'=>'required',
            'name'=>'required',
            'emai'=>'required|Email',
        ]);
        $newStudent=Student::create($data);

        return redirect(route('students.index'));
    }

    public function edit(student $student){
        return view('students.edit',['student'=>$student]);
    }

    public function update(student $student, Request $request){
        $data=$request->validate([
            'index'=>'required',
            'name'=>'required',
            'emai'=>'required|Email',
        ]);
        $student->update($data);

        return redirect(route('students.index'))->with('success'.'updated sucessfully');

    }

    public function destroy(student $student){
        $student->delete();

        return redirect(route('students.index'))->with('success'.'deleted sucessfully');
    }
}


   

