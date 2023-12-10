<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
class Form1Controller extends Controller
{
    public function index(){
        $forms=Form::all();
        return view('student.money_transfer.payment_form',['forms'=>$forms]);
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
       
      $newForm=Form::create($data);
      return redirect('/student/money_transfer/payment_pay'); 
        

}
}
