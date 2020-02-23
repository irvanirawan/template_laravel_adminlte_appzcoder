<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TindakanPelayanan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tindakan_pelayanans';

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
    protected $fillable = ['kode_tarif_pelayanan', 'nama_tarif_pelayanan', 'nilai_tarif_pelayanan', 'kunci_tarif', 'keterangan', 'kategori_tindakan', 'poli', 'status', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    public function kategori_tindakan()
    {
        return $this->belongsTo('App\Models\KategoriTindakan');
    }
    public function poli()
    {
        return $this->belongsTo('App\Models\Poli');
    }
    
}
