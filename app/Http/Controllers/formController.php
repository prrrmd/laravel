<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function index(Request $req)
    {
    	$path = $req->file('doc')->store('uploads');
    	return ['path'=>'Your File Path : '.$path];
    }
}
