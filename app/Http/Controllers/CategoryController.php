<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function category(){
        $category = Category::get();
        return view('dashboard.category', compact('category'));
    }

    public function addCategory(){
        return view('dashboard.create-category');
    }

    public function createCategory(Request $request){
        $category = $request->validate([
            'name' => 'required',
        ]);

        Category::create($category);

        return redirect('category');
    }
    
    public function deleteCategory(Request $request, $id){
        Category::where('id', $id)->delete();
        return redirect(route('category'));
    }
}
