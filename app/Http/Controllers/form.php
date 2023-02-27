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
        
        return $req->input('email');
    }
}
