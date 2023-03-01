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
        

        //get data using chaining
        $data  = DB::table('users')->select('id','first_name','last_name','avatar','email')->get();

        //but I prefer using the model
        //return view('components.data',['data'=>user::all()]);
        return view('components.data',['data'=>$data]);
    }

    public function getProfile($id){
        return view('components.profile',['user'=>user::find($id)]);

        }
}
