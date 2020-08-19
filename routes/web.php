<?php

use Illuminate\Support\Facades\Route;

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

Route::view('facebook','form');


Route::group(['middleware'=>'checkUser'],function(){

	Route::get('/', function (){
	    return view('welcome');
	});

	Route::get('profile',function(){
		return view('profile');
	});

	Route::post('login','LoginController@index');

	Route::get('logout',function(){
		session()->forget('data');
		return redirect('facebook');
	});
});












