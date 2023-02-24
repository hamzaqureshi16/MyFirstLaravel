<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function __invoke(){
        return view('components.form');
    }
}
