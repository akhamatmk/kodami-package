<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JunkCategorySpesification extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'category_id', 'category_spesification_id'
    ];

    function spesification()
    {
    	return $this->hasOne('Kodami\Models\Mysql\CategorySpesification', 'id', 'category_spesification_id');
    }

}