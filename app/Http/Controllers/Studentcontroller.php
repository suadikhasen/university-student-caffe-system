<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Temporary;



class Studentcontroller extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function check(request $request){
    	$request->session()->put('hour', $request['hour']);
        $request->session()->put('minute', $request['minute']);
        $request->session()->put('second', $request['second']);
    	$request->validate(['id'=>'required']);
    	$id=$request['id'];
    	$find=Student::find($id);
    	
    	if(Student::find($id)){
    		if(Student::find($id)->Temporary){
    			$controller=2;
                return view('home')->with(['data'=>$find,'controller'=>$controller]);
    		}

    		else{

    			if(Temporary::create(['student_id'=>$id])){
    				$controller=1;
    				return view('home')->with(['data'=>$find,'controller'=>$controller]);
    			}
    			
    		}
           
    	}
    	else{
    		return view('home')->with('controller',3);
    	}
    	
    }
}
