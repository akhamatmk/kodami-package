<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class MutasiMoota extends Model
{
    protected $table = 'mutations';
    public function bank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Bank', 'id', 'bank_id');
    }
}
