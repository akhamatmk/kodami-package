<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PInvoiceDropshiper extends Model
{
    protected $table = 'p_invoice_dropshiper';

    /**
     * Get Dropshiper Detail
     * @return [type] [description]
     */
    public function dropshiper()
    {
    	return $this->hasOne('Kodami\Models\Mysql\Users', 'id', 'dropshiper_id');
    }

    /**
     * Relasi ke Table Invoice
     * @return object
     */
    public function invoice()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PInvoice', 'id', 'p_invoice_id');
    }
}
