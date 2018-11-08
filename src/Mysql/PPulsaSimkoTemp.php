<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsaSimkoTemp extends Model
{
   protected $table = 'p_pulsa_simko_temp';

   /**
    * relasi ke table  p_pulsa
    * @return one object
    */
   public function pulsa()
   {
   		return $this->hasOne('Kodami\Models\Mysql\PPulsa', 'id', 'p_pulsa_id');
   }

   /**
    * relation table simko_provider 
    * @return row object
    */
   public function provider()
   {
   		return $this->hasOne('Kodami\Models\Mysql\SimkoProvider', 'id', 'simko_provider_id');
   }
}
