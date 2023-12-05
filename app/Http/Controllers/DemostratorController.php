<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemostratorController extends Controller
{
    public function DemostratorDashboard(){
        return view('demostrator.demo_dashboard');
    }
}
