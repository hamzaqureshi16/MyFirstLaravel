<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
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

Route::get('/',PostController::class);
Route::get('/about',[PostController::class,'about']);
Route::get('/home/{id}',[PostController::class,'show']);


//Post
Route::get('/post',[PostController::class,'create']);
Route::post('/post',[PostController::class,'store']);

Route::get('/post/{id}/edit',[PostController::class,'edit']);
Route::patch('/post/{id}',[PostController::class,'update']);

Route::delete('/post/{id}',[PostController::class,'destroy']);

//for mutiple reqs in the same line

Route::match(['get','post'],'/post/{id}/edit',[PostController::class,'edit']);

//return view with data as well
//Route::view('/',"HomeView",["name"=>"hamza"]);


// Route::get('/', function () {
//     return [PostController::class,'index'];
//     return view('HomeView');
// });

// Route::get('/about', function () {
//     return view('welcome');
// });

// //Route::get('/',[PostController::class,'index']);
// Route::resource('user', PostController::class);