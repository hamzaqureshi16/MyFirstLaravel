<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\fallback;
use App\Http\Controllers\PostController;
use App\Http\Controllers\form;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Http;

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

Route::post('registeruser',[usercontroller::class,"register"])->name('registeruser');


//form related routes
Route::post('submit',[usercontroller::class,'verify'])->name('submit');
Route::view('register','components.register')->name('register');
Route::get('/form',[form::class,'__invoke'])->name('form');

Route::get('login',function(){
    
    if(session()->has('user')){
        return redirect()->route('home');
    }
    return redirect()->route('form');
})->name('login');
Route::view('inaccesible','components.inaccesible')->name('inaccesible');
Route::view('userpage','components.userpage')->name('userpage');
Route::view('checkage','components.checkage')->name('checkage')->middleware('age');
Route::get("request",[RequestController::class,'__invoke'])->name('request');

Route::get('logout',function(){
    session()->forget('user');
    return redirect()->route('home');
})->name('logout');

Route::get('Db',[form::class,'getData']);
Route::get('/profile/{id}',[RequestController::class,'getprofile']);
Route::view('forgot', 'components.forgotpassword')->name('forgot');
Route::post('passreset',[usercontroller::class,'passreset'])->name('reset');
Route::fallback(fallback::class);



//sending data directly instead of using controller
// Route::view('request', 'components.data',['data'=>Http::get("https://reqres.in/api/users?page=2")['data']])->name('request');