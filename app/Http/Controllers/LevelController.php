<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use Auth;

class LevelController extends Controller
{
    public function level_list()
    {
        $data['header_title'] = "Level List";
        return view('admin.level_list');
    }

    public function add_levels()
    {
        $data['header_title'] = "Add new Level";
        return view('admin.add_levels');
    }

    public function level_store(Request $request){
        $data=$request->validate([
            'Level'=>'required',
            'Semester'=>'required'
        ]);

        $newLevel= Level::create($data);
        return redirect(route('admin.level_list'));
    }

    public function show_levels(){
        $levels=Level::all();
        return view('admin.show_levels',['levels'=>$levels]);
    }
    public function destroy(Level $level){
        $level->delete();
        return redirect(route('admin.show_levels'))->with('success','Product deleted Succesfully');
    }

}
