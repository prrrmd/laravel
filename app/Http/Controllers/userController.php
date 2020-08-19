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
    	// DB::table('students')
    	// ->where('id',4)
    	// ->update(['name'=>'Jayant']);

    	#Find record on id=4
    	// $data=DB::table('students')->find(4); 
    	// print_r($data);

    	#count/min/max
    	// $data=DB::table('students')->count();
    	// echo $data;

    	#Join in table employees & students ON ID.
    	return DB::table('students')
    	->join('employees1','students.name','employees1.name')
    	->select('students.id','students.name','employees1.birthdate')
    	->get();
    }
}
