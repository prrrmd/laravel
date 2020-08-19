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

Route::get('/', function () {
    return view('welcome');
});

Route::view('facebook','form');

Route::get('profile',function(){
	if(!session()->has('data'))
	{
		return redirect('access_denied');
	}
	return view('profile');
});

Route::view('access_denied','access_denied');

Route::post('login','LoginController@index');

Route::get('logout',function(){
	session()->forget('data');
	return redirect('facebook');
});







