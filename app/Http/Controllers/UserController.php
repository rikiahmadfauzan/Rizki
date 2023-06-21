<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
   function auth(Request $request){
    $credentials = $request->only('email', 'password');

    if(Auth::attempt($credentials)){
        if (Auth::user()->level === "admin"){
            return redirect('admin');
        }else if (Auth::user()->level === "member"){
            return redirect('cafe');
        }
    
    }
    return redirect()->back();
   }


   function daftar(){
    return view('register');
   }

    function create(Request $request){

        $validate = $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'level' => 'required',
            'password' => 'required|min:5'

        ]);
        $validate['password'] = bcrypt($request->password);

        User::create($validate);
        return redirect('/');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
     }
}
