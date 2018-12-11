<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class UserDropshiper extends Model
{
    protected $table = 'user_dropshiper';

    /** Relasi table users */
    public function user()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Users', 'id','user_id');
    }
}
