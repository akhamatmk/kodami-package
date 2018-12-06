<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PlnPaketTokenLangganan extends Model
{
	protected $table = 'pln_paket_token_langganan';

	/**
	 * Relasi Users
	 * @return object
	 */
	public function user()
	{
		return $this->hasOne('\Kodami\Models\Mysql\Users', 'id','user_id');
	}
}