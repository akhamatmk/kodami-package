<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
	use SoftDeletes;

	public function regency()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Regency', 'id', 'regency_id');
    }
}