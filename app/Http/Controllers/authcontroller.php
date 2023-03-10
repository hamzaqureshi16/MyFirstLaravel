<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class authcontroller extends Controller
{
    public function seeconfig(){
        return Config::get('login.isloggedin');
    }
    public function passreset(Request $request){
        $request->validate([
            'email'=>'required|email',
            'new_password'=>'required',
            'first_name'=>'required'
        ]);

        
        $user = User::where('email', $request->email)
             ->where('first_name', $request->first_name)
             ->firstOrFail();

        $user->update([
                'password' => Hash::make($request->new_password)
            ]);

        return redirect()->route('login');

        

    }


    public function verify(Request $req){
        //addd password to form and db too
        $req->validate([
            'first_name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = $req->only('email','password');
        if(auth()->attempt($credentials)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login');
        }

        // $user = User::where('email', $req->email)
        //     ->where('first_name', $req->first_name)
        //     ->firstOrFail();
        
        // if(Hash::check($req->password, $user->password)){
            // $req->session()->put('user',$user);
            // Config::set('login.isloggedin', "true");
            // return Config::get("login.isloggedin");
            // Config::set('login.user', $user);

            // return Config::get('login.user')->getRoleNames()->firstOrFail();
        //     return redirect()->route('home');
        // }
        // else{
        //     return redirect()->route('login');
        // }
    }

     

    public function register(Request $request){
        
        $request->validate([
            'first_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'password_confirmation'=>'required|min:8|same:password',
            'last_name'=>'required',
            'avatar'=>'required|url'
        ]);

        // $user = new User();
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->avatar = $request->avatar;
        // $user->save();

        // eloquent to save data

        //find the user according to email 
        $user = User::where('email',$request->email)->first();
        if($user){
            return redirect()->route('register');
        }
        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'avatar'=>$request->avatar
        ]);

        return redirect()->route('home');

        
    }
}
