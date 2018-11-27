<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi';

    /**
     * Relation Users Table
     * @return object
     */
    public function user()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Users', 'id', 'user_id');
    }
}
