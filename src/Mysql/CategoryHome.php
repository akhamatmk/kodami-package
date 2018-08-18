<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class CategoryHome extends Model
{
    protected $table = 'category_home';
	
	public function productcategory()
    {
    	return $this->hasMany('Kodami\Models\Mysql\ProductCategoryHome', 'category_home_id', 'id');
    }
}
