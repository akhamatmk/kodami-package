<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'email', 'is_active',
    ];
}