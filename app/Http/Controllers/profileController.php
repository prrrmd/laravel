<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;

class profileController extends Controller
{
    function index()
    {

    	//here data given in below link in json format. where it contain id profile etc. We are just fetching id and profile

    	$data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
    	return view('profile',['data'=>$data]);
    }
}
