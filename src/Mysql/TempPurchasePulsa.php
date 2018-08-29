<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class TempPurchasePulsa extends Model
{
    protected $table = 'temp_purchase_pulsa';

  	public function pulsa()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PPulsa', 'id', 'p_pulsa_id');
    }
}
