<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    /**
     * @return [type]
     */
    public static function access()
    {
    	$arr = [
	    		1 => 'Administrator',
	          	2 => 'Anggota',
	          	3 => 'Teller / Kasir',
	          	4 => 'Customer Service',
	          	5 => 'Operator',
	          	6 => 'Admin Operator',
	          	7 => 'Dropshiper',
                8 => 'Admin Produk'
	        ];

        return $arr;
    }
}
