<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class SimkoProduk extends Model
{	
 	protected $table = 'simko_produk';

 	public function provider()
 	{
 		return $this->hasOne('\Kodami\Models\Mysql\SimkoProvider', 'id', 'simko_provider_id');
 	}
}
