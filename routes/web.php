<?php

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

Route::get('/index-register',[AuthController::class, 'indexRegister'])->name('register');
Route::get('/index-login',[AuthController::class, 'indexLogin'])->name('login');

Route::post('/storeMessage',[MessageController::class,'message'])->name('message');

