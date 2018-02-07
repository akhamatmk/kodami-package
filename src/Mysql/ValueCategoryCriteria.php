<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ValueCategoryCriteria extends Model
{
	use SoftDeletes;
    protected $table = 'value_category_criteria';

    protected $fillable = [
        'category_criteria_id', 'value'
    ];

    public function criteria()
    {
        return $this->hasOne('Kodami\Models\Mysql\CategoryCriteria', 'id', 'category_criteria_id');
    }
}