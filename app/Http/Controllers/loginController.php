<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    function login(){
        return view('Auth.login');
    }
    function loginPost(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        $user = User::where(['email'=> $request->email])->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                if(Auth::attempt($credentials)){
                    return redirect('');
                }
                
            }
            
        }
        return redirect('log')->with('error','Invalid email or password');
    }

    function logout(){
        Auth::logout();
        return redirect('log');
    }
}
