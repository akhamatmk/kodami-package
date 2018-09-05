<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseOrder extends Model
{
	use SoftDeletes;

	public function rfq()
	{
		return $this->hasOne('Kodami\Models\Mysql\RequestForQoutation', 'id', 'rfq_id');
	}

	public function vendor()
	{
		return $this->hasOne('Kodami\Models\Mysql\Vendor', 'id', 'vendor_id');
	}
}