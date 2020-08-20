<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{

	//you will get first letter of email in uc (uppercase)
    public function getEmailAttribute($value)
    {
    	return ucfirst($value);
    }

    //you will get yearly package ie monthly*12
    public function getIncomeAttribute($value)
    {
    	return $value*12;
    }
}
