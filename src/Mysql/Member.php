<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];
}