<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestForQoutation extends Model
{
	use SoftDeletes;
	protected $table = 'request_for_qoutation';
}