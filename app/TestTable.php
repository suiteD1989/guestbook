<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTable extends Model
{
    /**
	* Field to be mass-assigned.
	*
	* @var array
	*/
	protected $fillable = ['title'];
}
