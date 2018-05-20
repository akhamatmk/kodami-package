<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesAndDistribution extends Model
{
	use SoftDeletes;

	public function kodami_product()
	{
		return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'kodami_product_id');
	}

	public function vendor()
	{
		return $this->hasOne('Kodami\Models\Mysql\Vendor', 'id', 'vendor_id');
	}
}