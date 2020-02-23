<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'diagnosas';

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
    protected $fillable = ['kode_diagnosa', 'nama_diagnosa', 'created_by', 'updated_by'];

    public function created_by()
    {
        return $this->belongsTo('App\User');
    }
    public function updated_by()
    {
        return $this->belongsTo('App\User');
    }
    
}
