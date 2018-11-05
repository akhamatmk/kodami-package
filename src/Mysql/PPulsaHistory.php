<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class PPulsaHistory extends Model
{
    protected $table = 'p_pulsa_history';

    /**
     * [user description]
     * @return [type] [description]
     */
    public function user()
    {
    	return $this->hasOne('\Kodami\Models\Mysql\Users', 'id', 'user_id');
    }

    /**
     * [pulsa description]
     * @return [type] [description]
     */
    public function pulsa()
    {
    	return $this->hasOne('\Kodami\Models\Mysql\PPulsa', 'id', 'p_pulsa_id');
    }
}
