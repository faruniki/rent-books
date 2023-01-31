<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request){
        $request->validate([
            'nama' => 'required',
            'message' => 'required'
        ]);

        Message::create($request->all());
        
        return redirect('/');
    }
}
