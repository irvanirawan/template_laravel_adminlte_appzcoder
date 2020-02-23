<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPerawatan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenis_perawatans';

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
    protected $fillable = ['kode_jenis_perawatan', 'nama_jenis_perawatan', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    
}
