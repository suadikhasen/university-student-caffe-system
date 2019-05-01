<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Student;
use App\Temporary;
class homecontroller extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function logout(request $request){
      $request->session()->flush();
      Auth::logout();
      Temporary::truncate();
      return redirect()->route('login');
      
    }

    public function home(){
    	return view('home')->with('controller',0);
    }
}
