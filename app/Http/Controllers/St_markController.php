<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class St_markController extends Controller
{
    public function index()
    {
        $data=User::join('st_marks','st_marks.student_num','=','users.id')
        ->get(['users.id','st_marks.course_unit','st_marks.subject_name','st_marks.grade']);

        return view('join_table',compact('data'));
    }
}
