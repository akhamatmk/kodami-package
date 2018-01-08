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

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')->where('active', 1);

    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->where('active', 1);
    }
}