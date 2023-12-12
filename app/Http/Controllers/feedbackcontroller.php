<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentfeedbacks;

class feedbackcontroller extends Controller
{
    function studentfeedback(Request $req){
        $subject = new studentfeedbacks;
        $subject->subjectselection = $req->subjectselection;
        $subject->A = $req->A;
        $subject->B = $req->B;
        $subject->C = $req->C;
        $subject->D = $req->D;
        $subject->E = $req->E;
        $subject->F = $req->F;
        $subject->G = $req->G;
        $subject->H = $req->H;
        $subject->I = $req->I;
        $subject->J = $req->J;
        $subject->overall = $req->overall;
        $subject->comments = $req->comments;


        $subject->save();
        return redirect('studentfeedback');
    }
    function show(){
        $data = studentfeedbacks::all()->where('subjectselection',3);
        return view ('feedbackform.subject1details',['records'=>$data]);
    }
}
