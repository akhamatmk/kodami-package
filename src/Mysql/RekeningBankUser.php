<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class RekeningBankUser extends Model
{
    protected $table = 'rekening_bank_user';

    /**
     * Relations to Banks Table
     * @return [type] [description]
     */
    public function bank()
    {
    	return $this->belongsTo('Kodami\Models\Mysql\Bank');
    }
}
