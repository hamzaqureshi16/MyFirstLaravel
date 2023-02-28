<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class form extends Controller
{
    public function __invoke(){
        return view('components.form');
    }

    public function sendData(Request $req){
        
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $req->session()->put('user',$req->input('name'));
        //remove submit from the url
        return redirect()->route('home',['user'=>session('user')]);
    }

    public function getData(){
        return DB::select("select * from users");
    }

  
}
