<?php

namespace App\Http\Controllers;

use App\Models\not; // Assuming your model is named 'not'
use Illuminate\Http\Request;

class notController extends Controller
{
    public function displayNoti()
    {
        $notis = not::all(); // Retrieve all records from the 'notifications' table

        return view('notifistu', compact('notis')); // Pass $notis to the view 'notifistu.blade.php'
    }
}
