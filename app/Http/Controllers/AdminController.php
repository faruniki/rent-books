<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard.index');
    }

    public function users(){
        $user = User::get();
        return view('dashboard.user', compact('user'));
    }

    public function edit(){
        
    }

}
