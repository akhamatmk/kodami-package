<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regency extends Model
{
	use SoftDeletes;
    protected $table = 'regencies';

    public function province()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Province', 'id', 'province_id');
    }
}