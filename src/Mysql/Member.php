<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];
}