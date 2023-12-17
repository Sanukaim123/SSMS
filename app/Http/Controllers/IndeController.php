<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Product;
use App\Models\Add;

class IndeController extends Controller
{
    public function ind(){
        $students=Student::all();
        $products=Product::all();
        return view('first.ind',['students'=>$students],['products'=>$products]);
    }
    
    
    public function viw(product $product){
        $students=Student::all();
      
        return view('first.indd',['students'=>$students],['product'=>$product]);
    }
    
    
    public function upd(Request $req){
        $adds=new Add;
        $adds->hourscal = $req->hourscal;
      
        $adds->idcal = $req->idcal;
        $adds->attendcal = $req->attendcal;
        $adds->save();

        
      
    }



    
}
