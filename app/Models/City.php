<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table 	= "city";

    public function province()
	{
		return $this->hasOne('App\Models\Province', 'id', 'province_id');
	}
}
