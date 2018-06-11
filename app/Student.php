<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fees;
use DB;


class Student extends Model
{
	public function feespayments()
	{
		return $this-hasMany('App/Fees');
	}
    //
}
