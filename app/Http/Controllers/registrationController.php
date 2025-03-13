<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class registrationController extends Controller
{
    function registration(){
        return view('Auth.register');
    }
    function registerPost(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
       $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
        
    }
}
