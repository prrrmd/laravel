<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\worker;

class workerController extends Controller
{
    function insert(Request $req)
    {
    	$worker = new worker;
    	$worker->name = $req->name;
    	$worker->password = $req->password;
    	$worker->email = $req->email;
    	$worker->income = $req->income;
    	$worker->birthdate = $req->birthdate;
    	$worker->save();
    }

    function update(Request $req)
    {
    	worker::where('id',$req->id)
    	->update(['name'=>$req->name,'password'=>$req->password]);
    }

    function delete(Request $req)
    {
    	$worker = worker::find($req->id);
    	$worker->delete();
    }
}
