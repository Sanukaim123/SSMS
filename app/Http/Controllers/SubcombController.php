<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Combination;
use App\Models\Subcomb;
use Illuminate\Support\Collection;

class SubcombController extends Controller
{
    public function createForm()
    {
        $combinations = Combination::pluck('Combination_name', 'id');
        $subjects = Subject::pluck('S_Code', 'id');

        return view('admin.assignsubCombination', compact('combinations', 'subjects'));
    }
    public function processForm(Request $request)
    {
        $request->validate([
            'Combination_name' => 'required',
            'S_Code' => 'required|array',
        ]);

        $combName = $request->input('Combination_name');
        $sCodes = $request->input('S_Codes');

        foreach ($sCodes as $sCode) {
            Subcomb::create([
                'Combination_name' => $combName,
                'S_Code' => $sCode,
            ]);
        }

        return redirect()->route('admin.assignsubCombination,show')->with('success', 'Subcourses added successfully');
    }

}
