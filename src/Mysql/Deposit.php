<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $table = 'deposit';

     /**
     * TYPE
     * - 1 => Deposit awal
     * - 2 => Topup
     * - 3 => Simpanan Pokok
     * - 4 => Simpanan Sukarela
     * - 5 => Simpanan Wajib
     */
    
    /**
     * STATUS
     * 1 => Submit Pembayaran
     * 2 => konfirmasi Pembayaran oleh anggota berikut upload bukti pembayaran
     * 3 => Approve atau status pembayaran oke sudah diterima
     * 4 => Denied / Reject status pembayaran belum diterima 
     */

    /**
     * [user_proses description]
     * @return [type] [description]
     */
    public function user_proses()
    {
        return $this->hasOne('\App\UserModel', 'id', 'proses_user_id');
    }
    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
        return $this->hasOne('\Kodami\Models\Mysql\Users', 'id', 'user_id');
    }

    /**
     * [rekening_bank description]
     * @return [type] [description]
     */
    public function rekening_bank()
    {
    	return $this->belongsTo('Kodami\Models\Mysql\RekeningBank');
    }

    /**
     * [rekening_bank_user description]
     * @return [type] [description]
     */
    public function rekening_bank_user()
    {
    	return $this->belongsTo('Kodami\Models\Mysql\RekeningBankUser');
    }
}
