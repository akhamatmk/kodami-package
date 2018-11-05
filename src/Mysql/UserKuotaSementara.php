<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class UserKuotaSementara extends Model
{
 	
 	protected $table = 'user_kuota_sementara';

 	/**
 	 * [user description]
 	 * @return [type] [description]
 	 */
 	public function user()
 	{
 		return $this->hasOne('\Kodami\Models\Mysql\Users', 'id', 'user_id');
 	}
}
