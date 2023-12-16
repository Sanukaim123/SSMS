<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Product;

class DashController extends Controller
{
    public function dah(){
        $students=Student::count();
        $products=Product::count();
        $products1=Product::sum('endtime')-Product::sum('starttime');
        return view('first.dashboard', compact('students','products','products1'));
    }

    public function hour(){
        $sub=Product::table('product')->select(Product::raw('endtime-starttime as difference'))->get();
    }

    
}
