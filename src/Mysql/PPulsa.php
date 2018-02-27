<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsa extends Model
{
    protected $table = 'p_pulsa';

    /**
     * [operator description]
     * @return [type] [description]
     */
    public function vendor()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PVendor', 'id', 'p_vendor_id');
    }
}
