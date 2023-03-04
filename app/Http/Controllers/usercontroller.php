<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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

        $user = User::where('email', $req->email)
            ->where('first_name', $req->first_name)
            ->firstOrFail();
        
        if(Hash::check($req->password, $user->password)){
            $req->session()->put('user',$user);
            if($user->hasRole('admin')){
                return "yo you're an admin";
            }
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login');
        }
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
