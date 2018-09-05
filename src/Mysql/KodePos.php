<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KodePos extends Model
{
	use SoftDeletes;
    protected $table = 'tbl_kodepos';
}