<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repeat;
class RepeatController extends Controller
{
    public function index(){
        
        return view('student.money_transfer.payment_form');
    } 

    //store data into the database
    public function store(Request $request){
      $data=$request->validate([
        'full_name'=>'required',
        'student_num'=>'required',
        'address'=>'required',
        'amount'=>'required|numeric',
        'degree'=>'required',
        'description'=>'required',
      ]);

      $repeat =new Repeat();
      $repeat->full_name = $request->input('full_name');
      $repeat->student_num = $request->input('student_num');
      $repeat->address = $request->input('address');
      $repeat->amount = $request->input('amount');
      $repeat->degree= $request->input('degree');
      $repeat->description =$request->input('description');
      $repeat->save();

      
      
      return redirect('student/money_transfer/payment_pay'); 
    }



        
}
