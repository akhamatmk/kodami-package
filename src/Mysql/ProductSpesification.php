<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSpesification extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'category_spesification_id', 'value',
    ];
}