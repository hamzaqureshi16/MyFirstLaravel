<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function save(Request $req){
        //addd password to form and db too
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
    }
}
