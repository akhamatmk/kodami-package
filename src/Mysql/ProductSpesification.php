<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSpesification extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'product_id', 'category_spesification_id', 'value', 
    ];

    public function category()
    {
        return $this->hasOne('Kodami\Models\Mysql\CategorySpesification', 'id', 'category_spesification_id');
    }
}