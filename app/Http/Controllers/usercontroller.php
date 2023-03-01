<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class usercontroller extends Controller
{
    public function passreset(Request $request){
        $request->validate([
            'email'=>'required|email',
            'new_password'=>'required|min:8',
            'first_name'=>'required'
        ]);

        $user = User::where('email', $request->email)
            ->where('first_name', $request->first_name)
            ->first();
        if(!$user){
            return "Username or password is not matched";
        }else{
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->route('login');
        }

     return redirect('forgot');

    }


    public function verify(Request $req){
        //addd password to form and db too
        $req->validate([
            'first_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        $user = User::where('email', $req->email)
            ->where('first_name', $req->first_name)
            ->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or password is not matched";
        }else{
            $req->session()->put('user',$user->first_name);
            return redirect()->route('home');
        }

    }

    public function register(Request $request){
        
        $request->validate([
            'first_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|min:8|same:password',
            'last_name'=>'required',
            'avatar'=>'required|url'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->avatar = $request->avatar;
        $user->save();

        
        return redirect()->route('home');

        
    }
}
