<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsaPrefix extends Model
{
    protected $table = 'p_pulsa_prefix';

    /**
     * [operator description]
     * @return [type] [description]
     */
    public function simkoProvider()
    {
    	return $this->hasOne('Kodami\Models\Mysql\SimkoProvider', 'id', 'simko_provider_id');
    }
}
