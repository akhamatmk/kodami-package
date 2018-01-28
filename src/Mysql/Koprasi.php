<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Koprasi extends Model
{
	use SoftDeletes;
    protected $table = 'koprasi';

    protected $fillable = [
        'regency_id', 'name', 'url', 'slogan', 'description', 'image', 'pickup_address', 'postal_code',
    ];
    
}