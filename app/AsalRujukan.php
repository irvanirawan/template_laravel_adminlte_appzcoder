<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsalRujukan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asal_rujukans';

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
    protected $fillable = ['kode_asal_rujukan', 'nama_asal_rujukan', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    
}
