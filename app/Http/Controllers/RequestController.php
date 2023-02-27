<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = Http::get('https://reqres.in/api/users?page=2');
        return view('components.data',['data'=>$data['data']]);
    }
}
