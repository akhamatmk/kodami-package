<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Member extends Model implements Authenticatable, JWTSubject
{
	use SoftDeletes;
	use AuthenticableTrait;

    protected $primaryKey = 'id';
    public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	public function getJWTCustomClaims()
	{
		return [];
	}

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];

    public function shop()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Koprasi', 'member_id', 'id');
    }

     public function dropshiper()
    {
        return $this->hasOne('Kodami\Models\Mysql\Dropshiper', 'member_id', 'id');
    }
}