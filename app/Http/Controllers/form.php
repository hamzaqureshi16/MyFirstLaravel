<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        return redirect()->route('home',['name'=>session('user')]);
    }

  
}
