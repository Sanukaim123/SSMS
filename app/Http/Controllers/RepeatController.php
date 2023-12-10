<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repeat;
class RepeatController extends Controller
{
    public function index(){
        $repeats=Repeat::all();
        return view('student.money_transfer.payment_form',['repeats'=>$repeats]);
    }

    public function store(Request $request){
      $data=$request->validate([
        'full_name'=>'required',
        'student_num'=>'required',
        'address'=>'required',
        'amount'=>'required|numeric',
        'degree'=>'required',
        'description'=>'required',
      ]);
       
      $newRepeat=Repeat::create($data);
      return redirect(route('/student/money_transfer/payment_pay')); 
    }     
}
