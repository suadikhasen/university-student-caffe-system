<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class usercontroller extends Controller
{
	// public function __construct(){
 //    	Auth::check();
 //    }
	
   public function login(request $request){	
	   	if(Auth::check()){

	   	   return redirect()->route('home1');
	   	}
	   	else{
	   		return view('index');
   	}


   }


  public function home(request $request)
 { 
 	// $request->session()->put("$id", 'sign in');
   $request->validate(['username'=>'required','password'=>'required']);
   $id=$request['username'];
   $credential=$request->only('username','password');
   if(Auth::attempt($credential)){

   	return view('home')->with('controller',0);
   }
   
   else{
   	
   	return redirect()->route('login')->with('message','invalid username or password');
   }

  }


}
