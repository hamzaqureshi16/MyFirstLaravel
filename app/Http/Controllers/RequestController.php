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
        // $data  = DB::table('users')->select('id','first_name','last_name','avatar','email')->get();

        //but I prefer using the model
        //return view('components.data',['data'=>user::all()]);

        //when you use all you can't use the conditional where so its better to use User::get()

        //now using eloquent 
        return view('components.data',['data'=>User::select('first_name','last_name','id','email','avatar')->paginate(3)]);
    }

    public function getProfile($id){
        //this find or fail will raise ann exception if the user's id isn't found 
        return view('components.profile',['user'=>user::select('id','first_name','last_name','email','avatar')->findOrFail($id)]);

        }
}
