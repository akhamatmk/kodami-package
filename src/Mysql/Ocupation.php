<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ocupation extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'name'
    ];
}