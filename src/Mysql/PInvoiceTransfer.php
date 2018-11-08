<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PInvoiceTransfer extends Model
{
    protected $table = 'p_invoice_transfer';

    /**
     * Relasi ke Table Invoice
     * @return object
     */
    public function invoice()
    {
    	return $this->hasOne('Kodami\Models\Mysql\PInvoice', 'id', 'p_invoice_id');
    }

    /**
     * Relasi ke table rekening_bank
     * @return row object
     */
    public function rekeningBank()
    {
    	return $this->hasOne('Kodami\Models\Mysql\RekeningBank', 'id', 'rekening_bank_id');
    }
}
