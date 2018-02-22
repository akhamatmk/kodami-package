<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $table = 'deposit';

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
