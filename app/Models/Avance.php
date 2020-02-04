<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $table = 'avances';
    protected $fillable=['actividad_id','porcentaje_avance','documento_probatorio','observacion'];

	public function actividad()
    {
    	return $this->belongsTo('App\Models\Actividad');
    }

     public function estatus()
    {
        return $this->belongsTo('App\Models\Estatus');
    }
}
