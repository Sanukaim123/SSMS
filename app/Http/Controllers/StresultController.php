<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stresult;

class StresultController extends Controller
{
    public function add_stresult(){
        return view('admin.add_stresults');
    }
    
    public function stresult_store(Request $request){
        $data=$request->validate([
            'reg_no'=>'required',
            'course_code'=>'required',
            'course_name'=>'required',
            'result'=>'required'
        ]);

        $newStresult= Stresult::create($data);
        return redirect(route('admin.add_stresults'))->with('success','result added successfully');
    }
}
