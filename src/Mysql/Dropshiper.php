<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Dropshiper extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'member_id', 'province_id', 'regency_id', 'district_id', 'village_id', 'has_physical_store', 'occupation', 'place_to_sell', 'postal_code', 'location', 'image', 'is_active', 
    ];
}