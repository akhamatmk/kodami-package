<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WholeSalePrice extends Model
{
	use SoftDeletes;
    protected $table = 'wholesale_price';

    protected $fillable = [
        'product_id', 'from', 'to', 'price'
    ];
}