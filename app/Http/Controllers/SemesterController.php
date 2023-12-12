<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterController extends Controller
{
    public function add_semester()
    {
        return view('admin.add_semester');
    }

    public function semester_store(Request $request){
        $data=$request->validate([
            
            'Semester_name'=>'required',
            
        ]);

        $newSemester= Semester::create($data);
        return redirect(route('admin.show'));  
    }
}
