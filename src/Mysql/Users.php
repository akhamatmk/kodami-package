<?php

namespace Kodami\Models\Mysql;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    /**
     * @return [type]
     */
    public static function access()
    {
    	$arr = [
	    		1 => 'Administrator',
	          	2 => 'Anggota',
	          	3 => 'Teller / Kasir',
	          	4 => 'Customer Service',
	          	5 => 'Operator',
	          	6 => 'Admin Operator',
	          	7 => 'Dropshiper',
                8 => 'Admin Produk',
                9 => 'Monitoring',
                10=> 'Hunter'
	        ];

        return $arr;
    }   

    /**
     * Relasi table user anggota
     * @return object
     */
    public function user_dropshiper()
    {
        return $this->hasOne('\Kodami\Models\Mysql\UserDropshiper', 'user_id', 'id');
    }

    /**
     * get domisili kecamatan
     * @return [type] [description]
     */
    public function domisiliKecamatan()
    {
        return $this->hasOne('Kodami\Models\Mysql\Kecamatan', 'id_kec', 'domisili_kecamatan_id');
    }

    /**
     * [domisiliKelurahan description]
     * @return [type] [description]
     */
    public function domisiliKelurahan()
    {
        return $this->hasOne('Kodami\Models\Mysql\Kelurahan', 'id_kel', 'domisili_kelurahan_id');
    }

    /**
     * [domisiliKelurahan description]
     * @return [type] [description]
     */
    public function domisiliKabupaten()
    {
        return $this->hasOne('Kodami\Models\Mysql\Kabupaten', 'id_kab', 'domisili_kabupaten_id');
    }

    /**
     * [ktpProvinsi description]
     * @return [type] [description]
     */
    public function domisiliKabupatenByProvinsi()
    {
        return $this->hasMany('\App\Kabupaten', 'id_prov', 'domisili_provinsi_id');
    }

    /**
     * [domisiliKecamatanByKabupaten description]
     * @return [type] [description]
     */
    public function domisiliKecamatanByKabupaten()
    {
        return $this->hasMany('\App\Kecamatan', 'id_kab', 'domisili_kabupaten_id');
    }

    /**
     * [domisiliKelurahanByKecamatan description]
     * @return [type] [description]
     */
    public function domisiliKelurahanByKecamatan()
    {
        return $this->hasMany('\App\Kelurahan', 'id_kec', 'domisili_kecamatan_id');
    }

     /**
     * [ktpProvinsi description]
     * @return [type] [description]
     */
    public function ktpKabupatenByProvinsi()
    {
        return $this->hasMany('\App\Kabupaten', 'id_prov', 'ktp_provinsi_id');
    }

    /**
     * [domisiliKecamatanByKabupaten description]
     * @return [type] [description]
     */
    public function ktpKecamatanByKabupaten()
    {
        return $this->hasMany('\App\Kecamatan', 'id_kab', 'ktp_kabupaten_id');
    }

    /**
     * [domisiliKelurahanByKecamatan description]
     * @return [type] [description]
     */
    public function ktpKelurahanByKecamatan()
    {
        return $this->hasMany('\App\Kelurahan', 'id_kec', 'ktp_kecamatan_id');
    }

    /**
     * [bank description]
     * @return [type] [description]
     */
    public function RekeningBankUser()
    {
        return $this->hasMany('\Kodami\Models\Mysql\RekeningBankUser', 'user_id', 'id');
    }
}
