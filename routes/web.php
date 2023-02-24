<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\form;
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



//return view with data as well
 
Route::get('/',[PostController::class,'__invoke'])->name('home');
Route::get('/about',[PostController::class,'about'])->name('about');

Route::get('/home/{id}/{name}',[PostController::class,'show']);



//form related routes
Route::post('submit',[form::class,'sendData']);
Route::get('/form',[form::class,'__invoke'])->name('form');
Route::view('checkage','components.checkage')->name('checkage');