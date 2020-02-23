<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersentasiDokterDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'persentasi_dokter_details';

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
    protected $fillable = ['header_id', 'tindakan_pelayanan', 'persentasi', 'nilai_persentasi', 'keterangan', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    public function header_id()
    {
        return $this->belongsTo('App\Models\PersentasiDokterHeader');
    }
    public function tindakan_pelayanan()
    {
        return $this->belongsTo('App\Models\TindakanPelayanan');
    }
    
}
