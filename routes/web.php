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

//To change default lang go to config/app.php and change 'locale' => 'en'

//To create user defined english & marathi languge create folder mr in resourses/lang. && add file .php in both folder here we uses show.php vut name can be any. 

Route::get('/', function () {
    return view('welcome');
});

Route::view('show','show');

Route::get('show/{lang}',function($lang){
	App::setlocale($lang);     //this will set the languege for view
	return view('show');
});

//to translate page marathi use : http://localhost/laravel/ics_proj1/public/show/mr

//Note : suppose lang code enter in url is not valid then it take Config/app.php 'fallback_locale' value as language.





