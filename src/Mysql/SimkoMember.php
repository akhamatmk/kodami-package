<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class SimkoMember extends Model
{	
 	protected $table = 'simko_member';

 	/**
 	 * [user description]
 	 * @return [type] [description]
 	 */
 	public function user()
 	{
 		return $this->hasOne('Kodami\Models\Mysql\Users', 'id', 'user_id');
 	}
}
