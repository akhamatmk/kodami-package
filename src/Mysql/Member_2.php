<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Member_2 extends Model
{
	use SoftDeletes;

    protected $table = 'members';

    public function shop()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Koprasi', 'member_id', 'id');
    }

     public function dropshiper()
    {
        return $this->hasOne('Kodami\Models\Mysql\Dropshiper', 'member_id', 'id');
    }
}