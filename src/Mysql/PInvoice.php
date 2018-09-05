<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PInvoice extends Model
{
    protected $table = 'p_invoice';

    /**
     * [dropshiper description]
     * @return [type] [description]
     */
    public function dropshiper()
    {
    	return $this->hasOne('App\ModelUser', 'id', 'user_id');
    }
}
