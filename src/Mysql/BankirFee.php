<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankirFee extends Model
{
	use SoftDeletes;
    protected $table = 'bankir_fee';
}