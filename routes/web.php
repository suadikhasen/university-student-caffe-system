<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
	return view('hasen');
});
// Route::get('/', 'usercontroller@login')->name('login');
Route::post('home','usercontroller@home')->name('home');
Route::get('logout','homecontroller@logout')->name('logout');
Route::get('home','homecontroller@home')->name('home1');
Route::post('student','Studentcontroller@check')->name('student');
Route::get('student','homecontroller@home')->name('student1');
Route::get('admin','AdminController@login')->name('admin');
Route::post('admin','AdminController@adminhome')->name('adminhome');
Route::get('adminlogout','Adminhomecontroller@logout')->name('adminlogout');
Route::get('add_user','Adminhomecontroller@add_user')->name('add_user');
Route::post('add_user','Adminhomecontroller@add_user_control')->name('add_user_control');
Route::get('add_one','Adminhomecontroller@add_one')->name('add_one');
Route::post('add_one','Adminhomecontroller@add_one_control')->name('add_one_control');
Route::get('delete_one','Adminhomecontroller@delete_one')->name('delete_one');
Route::post('delete_one','Adminhomecontroller@delete_one_control')->name('delete_one_control');
Route::get('delete_all','Adminhomecontroller@delete_all')->name('delete_all');
Route::get('duration','Adminhomecontroller@duration')->name('duration');
Route::post('duration','Adminhomecontroller@duration_control')->name('duration_control');
Route::get('add_multi','Adminhomecontroller@add_multi')->name('add_multi');
Route::get('/choiser',function(){
	return view('choiser');
});