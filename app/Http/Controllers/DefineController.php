<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Product;
use App\Models\Add;
use Illuminate\Support\Facades\DB;



class DefineController extends Controller
{
    public function edi(product $product,student $student){
      
        return view('products.edi',['student'=>$student,'product'=>$product]);
    }

    

    public function last(){
        $adds = DB::table('adds')
    ->select('idcal', Add::raw('SUM(hourscal) as total_attend_hours'))
    ->where('attendcal', 'attend')
    ->groupBy('idcal')
    ->get();

    $products=Product::sum('endtime')-Product::sum('starttime');
   
    return view('first.last', compact('adds','products'));
    
    

    
    // Perform any necessary operations with the student index number and total attend hours

    }

}
