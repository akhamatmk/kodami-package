<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JunkCategoryCriteria extends Model
{
	use SoftDeletes;
	protected $table = 'junk_category_criteria';

    protected $fillable = [
        'category_id', 'category_criteria_id'
    ];

    function criteria()
    {
    	return $this->hasOne('Kodami\Models\Mysql\CategoryCriteria', 'id', 'category_criteria_id');
    }

}