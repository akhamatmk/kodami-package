<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'name', 'parent_id', 'has_children', 'order_num', 'active', 'slug', 'permalink', 'description',
    ];     
}