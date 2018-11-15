<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsaHistoryHargaJual extends Model
{
    protected $table = 'p_pulsa_history_harga_jual';

    /*
    **
     * [pulsa description]
     * @return [type] [description]
     */
    public function pulsa()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PPulsa', 'id', 'p_pulsa_id');
    }
}
