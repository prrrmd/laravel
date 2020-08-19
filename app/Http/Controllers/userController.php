<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function index()
    {
    	$data = DB::table('students')->get();
    	return view('table',['data'=>$data]);
    }
}
