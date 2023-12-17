<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stprofile;


class StprofileController extends Controller
{
    public function stindex(){
        $stprofiles = Stprofile::all();
        return view('stprofiles.stindex',['stprofiles'=> $stprofiles]);
        
    }

    public function stcreate(){
        return view('stprofiles.stcreate');
    }

    public function store(Request $request){
        $data = $request->validate([
            'fullname'=> 'required',
            'registration_no'=> 'required',
            'level'=> 'required',
            'semester'=> 'required'
        ]);

        $newStprofile = Stprofile::create($data);   

        return redirect(route('stprofiles.stindex'));
}

public function edit(stprofile $stprofile){
    return view('stprofiles.stedit',['stprofile' => $stprofile]);
}
public function update(stprofile $stprofile, Request $request){
    $data=$request->validate([
        'fullname'=>'required',
        'registration_no'=>'required',
        'level'=>'required',
        'semester'=>'required'

    ]);

    $stprofile->update($data);
    return redirect(route('stprofiles.stindex'))->with('success','profile update Successfully');
}

}


