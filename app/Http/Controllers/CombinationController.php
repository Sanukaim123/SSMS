<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combination;

class CombinationController extends Controller
{
    public function add_combination()
    {
        return view('admin.add_combination');
    }

    public function combination_store(Request $request){
        $data=$request->validate([
            
            'Combination_name'=>'required',
            
        ]);

        $newCourse= Combination::create($data);
        return redirect(route('admin.show_combinations'));  
    }

}
