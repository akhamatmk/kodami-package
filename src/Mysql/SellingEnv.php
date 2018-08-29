<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellingEnv extends Model
{
	use SoftDeletes;
	protected $table = 'selling_env';

    protected $fillable = [
        'name'
    ];
}