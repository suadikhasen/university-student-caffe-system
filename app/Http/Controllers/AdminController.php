<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function login(){
    	if(Auth::guard('admin')->check()){
    		return view('adminhome');
    	}
        else
        {
        	return view('admin');
        }

    
    	}

   public function adminhome(request $request){
     $validate=$request->only(['username','password']);
     if(Auth::guard('admin')->attempt($validate)){
     	return view('adminhome');
     }
     else{
     	return redirect()->route('admin')->with('username_password','invalid username or password');
     }


   }
}
