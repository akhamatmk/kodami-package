<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
 	
 	protected $table = 'mutations';
    
    /**
     * [bank description]
     * @return [type] [description]
     */
    public function bank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Bank', 'id', 'bank_id');
    }   
}
