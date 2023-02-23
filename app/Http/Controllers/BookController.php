<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function book(){
        $book = Book::get();
        return view('dashboard.book', compact('book'));
    }

    public function addBook(){
        return view('dashboard.create-book');
    }

    public function createBook(Request $request){
        $book = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'release_date' => 'required',
            'cover' => 'required',
        ]);

        Book::create($book);

        return redirect('books');
    }
    
    public function deleteBook(Request $request, $id){
        Book::where('id', $id)->delete();
        return redirect(route('books'));
    }
    
    public function editBook($id){
        $book = Book::where('id', $id)->first();
        return view('dashboard.edit-book', compact('book'));
    }

    public function updateBook(Request $request, $id){
        $book = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'release_date' => 'required',
            'cover' => 'required',
        ]);

        $book = Book::where('id', $id)->first();

        $book->update($request->all());

        return redirect('books');
    }
}

