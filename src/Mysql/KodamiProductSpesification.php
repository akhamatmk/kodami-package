<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class KodamiProductSpesification extends Model
{
	use SoftDeletes;

	public function category()
    {
        return $this->hasOne('Kodami\Models\Mysql\CategorySpesification', 'id', 'category_spesification_id');
    }
}