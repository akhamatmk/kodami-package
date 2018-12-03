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

    /**
     * [plnToken description]
     * @return [type] [description]
     */
    public function plnToken()
    {
        return $this->hasOne('Kodami\Models\Mysql\TransaksiPlnToken', 'id', 'transaksi_pln_token_id');
    }

    /**
     * Relasi profile prabayar
     * @return object
     */
    public function plnPascabayar()
    {
        return $this->hasOne('Kodami\Models\Mysql\TransaksiPlnPascabayar', 'id', 'transaksi_pln_pascabayar_id');
    }
}
