<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class BannerSlideshow extends Model
{
    protected $table = 'banner_slideshow';

    public function product()
    {
    	return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'kodami_product_id');
    }
}
