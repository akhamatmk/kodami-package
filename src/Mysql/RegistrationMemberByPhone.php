<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationMemberByPhone extends Model
{
	use SoftDeletes;
    protected $table = 'registration_member_by_phone';

    protected $fillable = [
        'phone_number', 'unique_code', 'expired_code'
    ];
}