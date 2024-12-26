<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ServiceController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('welcome');

Route::resource('/tags',TagController::class);
Route::resource('/blogs',BlogController::class);
Route::resource('/permissions',PermissionController::class);
Route::get('/permissions/{permission}/delete',[PermissionController::class,'delete'])->name('permissions.delete');
Route::get('/blog/news',[BlogController::class,'news'])->name('blogs.news');
Route::get('/blog/reviews',[BlogController::class,'review'])->name('blogs.review');
Route::get('/blog/newTechnology',[BlogController::class,'news'])->name('blogs.tech');

Route::get('/register',[AuthController::class,'signup'])->name('user.register');
Route::post('/register/store',[AuthController::class,'register'])->name('register.store');
Route::get('/login',[AuthController::class,'signin'])->name('login');
Route::post('/login/store',[AuthController::class,'login'])->name('login.store');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/services',[ServiceController::class,'index'])->name('services.index');
Route::get('/services/estimate',[ServiceController::class,'estimate'])->name('services.estimate');
Route::get('/services/draft',[ServiceController::class,'draft'])->name('services.draft');
Route::get('/services/render',[ServiceController::class,'render'])->name('services.render');

