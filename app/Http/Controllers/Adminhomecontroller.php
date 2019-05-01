<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\User;
use App\Student;
use App\time;
class Adminhomecontroller extends Controller
{
   public function __construct(){
      $this->middleware('auth:admin');
   }

   public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route('admin');
   }

   public function add_user(){
    return view('AddedUser');

   }

   public function add_user_control(request $request){
      $validate=$request->only('name','username','password');
      $request['password']=bcrypt($request['password']);
      $validate=$request->only('name','username','password');
      $user = User::create($validate);
      if($user){
            return redirect()->route('add_user')->with('admin_message','successfully added');

      }

     else{
        return redirect()->route('add_user')->with('admin_message','registration error');

     }
   }

   public function add_one(){
    return view('addone');
   }

   public function add_one_control(request $request){
     $validate=$request->only(['name','id','department','sex']);
     $student=Student::create($validate);
     if($student){
        return redirect()->route('add_one')->with('admin_message_one','registerd successfully');
     }
     else{
        return redirect()->route('add_one')->with('admin_message_one_error','registerd error');
     }
   }

   public function delete_one(){
    return view('deleteone');
   }

   public function delete_one_control(request $request){
    $validate=$request->only('id');
    $student=Student::destroy($validate);
    if($student){
        return redirect()->route('delete_one')->with('delete_one_message','Deleted successfully');
    }

    else{
        return redirect()->route('delete_one')->with('delete_one_message_error','deleting error');
    }

   }

   public function delete_all(){
     $student=Student::truncate();
     if($student){
        return redirect()->route('adminhome')->with('delete_all_message','deleted Successfully');
     }

     else{
        return redirect()->route('adminhome')->with('delete_all_message_error','deleting error');
     }
   }

   public function duration(){
    return view('duration');
   }

   public function duration_control(request $request){
    $validate=$request->only(['hour','minutr']);
    $time=time::find(1);
    $time->hour=$request['hour'];
    $time->minute=$request['minute'];
    $check=$time->save();
    if($check){
        return redirect()->route('duration')->with('duration_message','time is changed successfully');
    }else
        {
            return redirect()->route('duration')->with('duration_message_error','time changing error');
        }
   }

   public function add_multi(){
    return view('addmulti');
   }
}
