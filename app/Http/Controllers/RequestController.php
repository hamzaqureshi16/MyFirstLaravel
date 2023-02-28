<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
class RequestController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('components.data',['data'=>user::all()]);
    }
}
