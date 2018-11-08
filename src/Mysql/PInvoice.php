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
    	return $this->hasOne('Kodami\Models\Mysql\PInvoiceDropshiper', 'p_invoice_id', 'id');
    }

    /**
     * Relation Users Table
     * @return object
     */
    public function user()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Users', 'id', 'user_id');
    }

    /**
     * Relasi ke Model PInvoiceTransfer
     * @return row object
     */
    public function transfer()
    {
        return $this->hasOne('Kodami\Models\Mysql\PInvoiceTransfer', 'p_invoice_id', 'id');
    }
}
