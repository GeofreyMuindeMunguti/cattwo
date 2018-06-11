<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use DB;

class Fees extends Model
{
	public function students()
	{
		return $this->belongsToMany('App/Student');
	}
    //
}
