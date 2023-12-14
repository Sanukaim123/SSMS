<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repeat;
class RepeatController extends Controller
{
    public function index(){
        
        return view('student.money_transfer.payment_form');
    } 
    public function home(){
        
      return view('student.money_transfer.payment_home');
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
        'file' => 'required|file|mimes:pdf,doc,docx|max:10240', // Adjust the validation rules as needed
    
        
      ]);

      $repeat =new Repeat();
      $repeat->full_name = $request->input('full_name');
      $repeat->student_num = $request->input('student_num');
      $repeat->address = $request->input('address');
      $repeat->amount = $request->input('amount');
      $repeat->degree= $request->input('degree');
      $repeat->description =$request->input('description');
      $repeat->file = $request->file('file');
      //$filePath = $repeat->store('uploads');
      $repeat->save();

      
      
      return redirect('student/money_transfer/payment_pay'); 
    }

    


    function show(){
      $repeats = Repeat::all();
      return view ('admin.show_payment',['repeats'=>$repeats]);
  }


        
}
