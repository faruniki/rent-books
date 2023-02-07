<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function storeRegister(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',
            'address' => 'required',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        return redirect('login');
    }
}
