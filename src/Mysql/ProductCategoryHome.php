<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryHome extends Model
{
    protected $table = 'product_category_home';

    public function product()
    {
    	return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'kodami_product_id');
    }
}
