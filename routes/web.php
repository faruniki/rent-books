<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//route fe
Route::get('main', function () {
    return view('layouts.main');
});

// Route::get('dashboard', function () {
//     return view('dashboard.index')->middleware('auth');
// });

// Route::get('user', function () {
//     return view('dashboard.user');
// });

Route::get('category', function () {
    return view('dashboard.category');
});

Route::get('rent-log', function () {
    return view('dashboard.rent-log');
});

Route::get('edit', function () {
    return view('dashboard.edit');
});

Route::get('homeuser', function () {
    return view('layouts.user');
});

//route admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware(['admin' , 'auth']);
Route::get('/user', [AdminController::class, 'users'])->name('user')->middleware('admin');
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser')->middleware('admin')->middleware('auth');
Route::post('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser')->middleware('auth');
Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser')->middleware('auth');

//route user
Route::get('/home', [UserController::class, 'index'])->name('index')->middleware('user');

//route register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/storeRegister', [RegisterController::class, 'storeRegister'])->name('storeRegister');

//route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/storeLogin', [LoginController::class, 'login'])->name('storeLogin');

Route::post('/storeMessage',[MessageController::class,'message'])->name('message');

//route logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//books
Route::get('/books', [BookController::class, 'book'])->name('books')->middleware('auth');
Route::get('/addBook', [BookController::class, 'addBook'])->name('addBook')->middleware('auth');
Route::post('/createBook', [BookController::class, 'createBook'])->name('createBook');
Route::post('/deleteBook{id}', [BookController::class, 'deleteBook'])->name('deleteBook');
Route::get('/editBook/{id}', [BookController::class, 'editBook'])->name('editBook')->middleware(['admin', 'auth']);;
Route::post('/updateBook/{id}', [BookController::class, 'updateBook'])->name('updateBook');

//category
Route::get('/category', [CategoryController::class, 'category'])->name('categories')->middleware('auth');
Route::get('/addCategory', [CategoryController::class, 'addCategory'])->name('addCategory')->middleware('auth');
Route::post('/createCategory', [CategoryController::class, 'createCategory'])->name('createCategory');
Route::post('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
Route::get('/editCategory/{id}', [CategoryController::class, 'editCategory'])->name('editCategory')->middleware(['admin', 'auth']);;
Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');


