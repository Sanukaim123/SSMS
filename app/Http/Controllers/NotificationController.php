<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
class NotificationController extends Controller
{
    public function index(){
    
        return view('notification.index');
    
}
    public function create(){
    
    return view('demostrator.notification');
    }



    public function store(Request $request){
        $data = $request->validate([
            'file'=>'required','mimes:jpeg,png,pdf','max:2048',
            'add_description'=>'required|string|max:255',
            'subject'=>'required|string|max:255',
            'level'=>'required',
            'course'=>'required',
            'final_submission_date'=>'required'
    
    
        ]);

     
  
        $notification =new Notification();
        $notification->file = $request->input('file');
        $notification->add_description = $request->input('add_description');
        $notification->subject = $request->input('subject');
        $notification->level = $request->input('level');
        $notification->course= $request->input('course');
        $notification->final_submission_date =$request->input('final_submission_date');
        $notification->save();
    
        return redirect(route('notification.index'));
    }
    }


    
    
    