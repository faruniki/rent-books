<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->isAdmin == true){
                return redirect('/dashboard');
            }
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials does not match our records!',
        ])->onlyInput('email');

        // return back()->with('loginerror', 'Login gagal, silahkan coba lagi');
    }

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('');
    }
}
