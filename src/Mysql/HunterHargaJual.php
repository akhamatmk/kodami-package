<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class HunterHargaJual extends Model
{
    protected $table = 'hunter_harga_jual';

    /**
     * Relasi ke Table Pulsa
     * @return object
     */
    public function pulsa()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PPulsa', 'id', 'p_pulsa_id');
    }
}
