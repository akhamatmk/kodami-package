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
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
        return $this->hasOne('App\UserModel', 'id', 'user_id');
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
