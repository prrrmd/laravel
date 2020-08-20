<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function index()
    {
    	$data = DB::table('students')->paginate(3);
    	return view('table',['data'=>$data]);
    }
}
