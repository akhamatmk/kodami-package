<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class UserAnggotaKonfirmasiTransaksi extends Model
{
    protected $table = 'user_anggota_konfirmasi_transaksi';

    /**
     * Relasi Rekening Bank
     */
    public function rekening_bank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\RekeningBank', 'id', 'bank_id');
    }
}
