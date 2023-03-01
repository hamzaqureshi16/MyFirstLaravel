<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
class RequestController extends Controller
{
    public function __invoke(Request $request)
    {
        // if you want to use query build you have to do this
        //$data = DB::select('select * from users');
        
        //but i prefer using the model
        return view('components.data',['data'=>user::all()]);
    }

    public function getProfile(Request $request){
        return view('components.profile',['user'=>user::find($request->id)]);
        }
}
