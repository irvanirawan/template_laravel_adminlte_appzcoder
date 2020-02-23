<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjamin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penjamins';

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
    protected $fillable = ['kode_penjamin', 'nama_penjamin', 'alamat', 'telp', 'kontak_person', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    
}
