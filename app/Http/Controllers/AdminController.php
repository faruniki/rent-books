<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class AdminController extends Controller
{
    public function dashboard(){
        $book = Book::get();
        $user = User::get();
        return view('dashboard.index', compact('book', 'user'));
    }

    public function users(){
        $user = User::get();
        return view('dashboard.user', compact('user'));
    }

    public function deleteUser(Request  $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect(route('user'));
    }

    public function editUser($id){
        $user = User::where('id', $id)->first();
        return view('dashboard.edit-user', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user = User::where('id', $id)->first();

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect(route('user'))->with('edit', 'Berhasil edit data user');
    }

}
