<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChartBankirTransaction extends Model
{
	use SoftDeletes;

	public function bank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Bank', 'id', 'bank_id');
    }    
}