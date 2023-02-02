<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

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
});

//route fe
Route::get('main', function () {
    return view('layouts.main');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
});

// Route::get('user', function () {
//     return view('dashboard.user');
// });

Route::get('book', function () {
    return view('dashboard.book');
});

Route::get('category', function () {
    return view('dashboard.category');
});

Route::get('rent-log', function () {
    return view('dashboard.rent-log');
});

//route admin
Route::get('/user', [AdminController::class, 'users'])->name('user');

//route register
Route::get('/register',[AuthController::class, 'indexRegister'])->name('register');
Route::post('/storeRegister',[AuthController::class, 'storeRegister'])->name('storeRegister');

Route::get('/login',[AuthController::class, 'indexLogin'])->name('login');

Route::post('/storeMessage',[MessageController::class,'message'])->name('message');

