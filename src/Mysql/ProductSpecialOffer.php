<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class ProductSpecialOffer extends Model
{
    public function product()
    {
        return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'kodami_product_id');
    }
}
