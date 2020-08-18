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

Route::view('unauthorised','access_denied');


#-------------Individual Middleware------------------------------------------


#Only 18+ can use facebook as following route contain individual middleware.

Route::get('facebook',function(){
	echo "You are 18+ so Logged in Facebook";
})->middleware('checkage');    //this defined in kernel.php on line 56.

#All can use google as following route doesnt contain individual middleware.

Route::get('google',function(){
	echo "You can use Google";
});


#-------------Grouped Middleware------------------------------------------

#all banks will allowed to withdrow if ammount 500+

Route::group(['middleware'=>['checkamount']],function(){
		
	Route::get('sbi',function(){
		echo "You can withdrow from SBI";
	});

	Route::get('pnb',function(){
		echo "You can withdrow from PNB";
	});
}); #value of middleware is always array because we can apply many middleware on group.






