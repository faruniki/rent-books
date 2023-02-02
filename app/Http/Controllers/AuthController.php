<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    public function storeRegister(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'np_hp' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect('login');
    }

    public function indexLogin(){
        return view('auth.login');
    }

}
