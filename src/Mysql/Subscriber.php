<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'email', 'is_active',
    ];
}