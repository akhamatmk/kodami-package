<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryCriteria extends Model
{
	use SoftDeletes;
    protected $table = 'category_criteria';    

    protected $fillable = [
        'category_id', 'label'
    ];
}