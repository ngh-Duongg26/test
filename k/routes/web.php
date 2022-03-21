<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('blog/{name?}', function ( $name='nguyen thi trang') {
       return ($name.view ('blog'));

     });
Route::get('/', function () {
    return view('blog');
});
Route::get("blog-post", [BlogpostController::class,'index']);
Route::get("blog", [BlogController::class,'index']);


Route::get("register", [RegisterController::class,'index']);
Route::get("login", [LoginController::class,'index']);

