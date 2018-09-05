<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	/**
	 * Field Type :  
	 * 0 Setting Untuk Semua
	 * 1 Setting Punya http://kodami.co.id, 
	 * 2 Setting Punya Pulsa http://pulsa.kodami.id
	 * 
	 */
	protected $table = 'setting';
}