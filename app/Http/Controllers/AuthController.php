<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

    // public function 

    public function indexLogin(){
        return view('auth.login');
    }

}
