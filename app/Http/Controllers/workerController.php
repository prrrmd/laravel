<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\worker;

class workerController extends Controller
{
    function index()
    {
    	return worker::all();
    }
}
