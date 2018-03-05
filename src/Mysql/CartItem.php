<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
	use SoftDeletes;

	 public function product()
    {
        return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'product_id');
    }
}