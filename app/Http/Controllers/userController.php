<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function index()
    {
    	//return DB::select('select * from students');

    	#Select all records
    	//return DB::table('students')->get();

    	#Select specific record
    	// return DB::table('students')
    	// ->where('name','Akash')
    	// ->get();

    	#Delete Record
    	// DB::table('students')
    	// ->where('name','Shubham')
    	// ->delete();

    	#Insert Record
    	// DB::table('students')
    	// ->insert(['name'=>'Shubham']);

    	#Update Record
    	DB::table('students')
    	->where('id',4)
    	->update(['name'=>'Jayant']);

    	// $data=DB::table('students')->find(4); //this will apply on id automatically
    	// print_r($data);

    	// $data=DB::table('students')->count();//give total count of records
    	// echo $data;
    }
}
