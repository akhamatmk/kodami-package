<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'parent_id', 'has_children', 'order_num', 'active', 'slug', 'permalink', 'description',
    ];     
}