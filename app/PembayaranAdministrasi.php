<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranAdministrasi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pembayaran_administrasis';

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
    protected $fillable = ['no_bukti', 'tgl_bukti', 'nama_pasien', 'sisa', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    
}
