<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Combination1; 
use App\Models\Combination; 
use App\Models\Subject; 
use Illuminate\Support\Collection;




class Combination1Controller extends Controller
{
    public function createForm()
    {
        $combinations=Combination::pluck('Combination_name','id');
        $subjects = Subject::pluck('S_Code', 'id');
       
        return view('admin.combination.form', compact('combinations','subjects'));
    }


    public function processForm(Request $request)
    {
        $request->validate([
            'Combination_name'=>'required',
            'S_Codes' => 'required|array',
            
        ]);
        //dd($request);

        $combName= $request->input('Combination_name');
        $sCodes = $request->input('S_Codes');
        

        foreach ($sCodes as $sCode) {
            Combination1::create([
                'Combination_name'=>$combName,
                'S_Code' => $sCode
                
            ]);
        }

        return redirect()->route('admin.combination.form')->with('success', 'Subcourses added successfully');
    
    }

}
