<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class BankirTransaksi extends Model
{
    protected $table = 'bankir_transaksi';

    public function bank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Bank', 'id', 'bank_id');
    }
}