<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee;
class FeeController extends Controller
{
    public function storeFees()
    {
        // Insert data into the "fees" table
        Fee::create(['fee_type' => 'examination fees']);
        Fee::create(['fee_type' => 'registration fees']);
        Fee::create(['fee_type' => 'hostel fees']);
        Fee::create(['fee_type' => 'library fees']);
        Fee::create(['fee_type' => 'medical fees']);

       

        // Optionally, you might redirect or return a response
        //return redirect()->route('fees.index')->with('success', 'Fees created successfully');
    }

    public function index()
    {
        $fees = Fee::all();

        return view('student/money_transfer/payment_home', compact('fees'));
    }

}
