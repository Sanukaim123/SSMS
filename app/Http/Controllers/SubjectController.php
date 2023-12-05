<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{   public function show_subjects(){
        $subjects=Subject::all();
        return view('admin.show_subjects',['subjects'=>$subjects]);
    }




    public function add_subjects(){
        return view('admin.add_subjects');
    }

    

    public function sub_store(Request $request){
        $data=$request->validate([
            'S_Code'=>'required',
            'S_Name'=>'required'
        ]);

        $newSubject= Subject::create($data);
        return redirect(route('admin.show_subjects'));
    }

    public function destroy(Subject $subject){
        $subject->delete();
        return redirect(route('admin.show_subjects'))->with('success','Product deleted Succesfully');
    }


}
