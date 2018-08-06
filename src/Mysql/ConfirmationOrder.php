<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class ConfirmationOrder extends Model
{
    public function bank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Bank', 'id', 'bank_id');
    }

	public function user()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function transaction(){
    	// if($this->transaction_type)
    		return $this->hasOne('Kodami\Models\Mysql\PPulsaTransaksi', 'id', 'transaction_id');
    	// else
    	// 	return null;
    }
}
