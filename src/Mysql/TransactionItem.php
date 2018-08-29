<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionItem extends Model
{
	use SoftDeletes;

	public function district()
    {
    	return $this->hasOne('Kodami\Models\Mysql\District', 'id', 'district_id');
    }

    public function product()
    {
    	return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'kodami_product_id');	
    }
}