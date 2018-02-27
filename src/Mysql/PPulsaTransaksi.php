<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsaTransaksi extends Model
{
    protected $table = 'p_pulsa_transaksi';

    /**
     * [pulsa description]
     * @return [type] [description]
     */
    public function pulsa()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PPulsa', 'id', 'p_pulsa_id');
    }

    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
    	return $this->hasOne('App\ModelUser', 'id', 'user_id');
    }
}
