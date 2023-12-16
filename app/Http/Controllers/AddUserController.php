<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddUserController extends Controller
{


    function store(Request $req){

        $input = $req->all();

        try{
            $user = User::create($input);
            return redirect('adduser')->with('message', 'Successfully sumitted your response');
        }catch(\Exception $ex){
            if($ex->getCode() == 1){
                $msg = "Cannot Insert Duplicate Record.";
            }else{
                $msg = "Error Code :".$ex->getCode();
            }
            return redirect('adduser')->with('error', $msg);

        }


    }
   
}
