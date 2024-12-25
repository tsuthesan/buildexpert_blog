<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tags',TagController::class);
Route::resource('/blogs',BlogController::class);
Route::get('/news',[BlogController::class,'news'])->name('blogs.news');
Route::get('/reviews',[BlogController::class,'review'])->name('blogs.review');
Route::get('/newTechnology',[BlogController::class,'news'])->name('blogs.tech');

Route::get('/register',[AuthController::class,'signup'])->name('user.register');
Route::post('/register/store',[AuthController::class,'register'])->name('register.store');
Route::get('/login',[AuthController::class,'signin'])->name('login');
Route::post('/login/store',[AuthController::class,'login'])->name('login.store');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
