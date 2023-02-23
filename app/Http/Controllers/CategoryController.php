<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
        return redirect(route('categories'));
    }

    public function editCategory($id){
        $category = Category::where('id', $id)->first();
        return view('dashboard.edit-category', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $category = $request->validate([
            'name' => 'required'
        ]);

        $category = Category::where('id', $id)->first();

        $category->update($request->all());

        return redirect('category');
    }
}
