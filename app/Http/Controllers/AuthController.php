<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'np_hp' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        return redirect('login');
    }

    public function indexLogin(){
        return view('auth.login');
    }

}
