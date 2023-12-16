<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class DemonstratorController extends Controller
{
    public function displayMessages()
    {
        $messages = Message::select('Name', 'Email', 'Message')->get();

        return view('display_messages', compact('messages'));
    }
}
