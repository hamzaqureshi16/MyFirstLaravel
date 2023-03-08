<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    public function toupdate($id){
        // $user = DB::table('users')->select('id','first_name','last_name','email')->where('id',$id)->first();

        //changing queries to eloquent
         return view('components.updatepage', ['user' => User::select('id','first_name','last_name',"email")->findOrFail($id)]);
    }

    public function delete($id){
        // $user = User::find($id);
        // $user->delete();


        //eloquent query
        User::destroy($id);
        return redirect()->route('home');
    }

    public function update(Request $req){
        $req->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email'
        ]);

        // $user = User::find($req->id);
        // $user->first_name = $req->first_name;
        // $user->last_name = $req->last_name;
        // $user->email = $req->email;
        //update 
        // $user->save();

        //eloquent query 
        User::findOrFail($req->id)->update(
            [
                'first_name'=>$req->first_name,
                'last_name'=>$req->last_name,
                'email'=>$req->email
            ]
            );
        return redirect()->route('home');

    }
    
}
