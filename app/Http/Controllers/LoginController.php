<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $req)
    {

    	//flash sessions are get cleared if we refersh site.
    	//while simple sessions are not get cleared on refresh
    	//just put flash instead off put method. other else is same

    	$req->session()->flash('data','Account Added Successfully.');
    	return redirect('facebook');	
    }
}


