<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Koprasi extends Model
{
	use SoftDeletes;
    protected $table = 'koprasi';

    protected $fillable = [
        'member_id', 'regency_id', 'name', 'url', 'slogan', 'description', 'image', 'pickup_address', 'postal_code',
    ];

    public function regency()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Regency', 'id', 'regency_id');
    }

    public function member_2()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Member_2', 'id', 'member_id');	
    }
    
}