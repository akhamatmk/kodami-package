<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCriteria extends Model
{
	use SoftDeletes;
	protected $table = 'product_criteria';

    protected $fillable = [
        'product_id', 'value_category_criteria_id'
    ];

    public function valueCriteria()
    {
        return $this->hasOne('Kodami\Models\Mysql\ValueCategoryCriteria', 'id', 'value_category_criteria_id');
    }
}