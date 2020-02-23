<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenagaMedi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tenaga_medis';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_pegawai', 'nama_pegawai', 'jabatan', 'jenis_kelamin', 'alamat', 'agama', 'telp', 'email', 'keterangan', 'tanggal_lahir', 'mulai_bekerja', 'akhir_bekerja', 'golongan', 'pendidikan_akhir', 'bidang_peminatan', 'dokter_atau_bidan', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan');
    }
    
}
