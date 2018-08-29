<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class ChoiceOfOurProductFront extends Model
{
    protected $table = 'choice_of_our_product_front';

    public function product()
    {
    	return $this->hasOne('Kodami\Models\Mysql\KodamiProduct', 'id', 'kodami_product_id');
    }
}
