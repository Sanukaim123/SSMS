<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chat;
use App\Http\Controllers\controller;


class chatcontroller extends Controller
{
    // public function  AddChat(Request $req)
    // {
        // $chat=new chat;
        // $chat->Name = $req->Name;
        // $chat->Email = $req->Email;
        // $chat->Level = $req->Level;
        // $chat->Semester = $req->Semester;
        // $chat->Department = $req->Department;
        // $chat->Demonstrator = $req->Demonstrator;
        // $chat->Message = $req->Message;

        // $chat->save();
        // return redirect('chat');
    // }

        public function AddChat(){
            return view('chat');

        }

        public function uploadChatInput(Request $request){
            chat::create([
                'Name' => $request->Name,
                'Email' => $request->Email,
                'Level' => $request->Level,
                'Semester' => $request->Semester,
                'Department' => $request->Department,
                'Demonstrator' => $request->Demonstrator,
                'Message' => $request->Message,
            ]);
        
            return redirect()->back();
        }
        
}
