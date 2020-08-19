<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $req)
    {
    	//return $req->input();
    	$req->session()->put('data',$req->input()); //here we are put our data from req->input() to inside varaible 'data'. We access this data using 'data' variable with session.

    	//print session data by following way
    	//return $req->session()->get('data');

    	//But now we dont want to show data. we just want to chek user is login or not.(form submitted or not) if sabmitees then add data to session.
    	//And if session has data then only give access of pageto user. else redirect to home page.

    	if($req->session()->has('data'))
    		return redirect('profile'); 	

    }

}


