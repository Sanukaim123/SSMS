<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'date'=>'required|Date',
            'starttime'=>'required',
            'endtime'=>'required',
            
        ]);
        $newProduct=Product::create($data);

        return redirect(route('products.index'));
    }

    public function edit(product $product){
        return view('products.edit',['product'=>$product]);
    }

    public function update(product $product, Request $request){
        $data=$request->validate([
            'date'=>'required|Date',
            'starttime'=>'required',
            'endtime'=>'required',
           
        ]);
        $product->update($data);

        return redirect(route('products.index'))->with('success'.'updated sucessfully');

    }

    public function destroy(product $product){
        $product->delete();

        return redirect(route('products.index'))->with('success'.'deleted sucessfully');
    }

   
}
