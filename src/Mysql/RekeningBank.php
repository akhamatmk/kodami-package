<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class RekeningBank extends Model
{
    protected $table = 'rekening_bank';

    /**
     * Relations to Banks Table
     * @return [type] [description]
     */
    public function bank()
    {
    	return $this->belongsTo('Kodami\Models\Mysql\Bank');
    }

    /**
     * relasi bank
     * @return object
     */
    public function bank_()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Bank', 'id', 'bank_id');
    }
}
