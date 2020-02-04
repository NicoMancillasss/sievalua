<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table = 'portal_convocatoria';
    protected $fillable = ['id', 'nombre', 'imagenConvocatoria', 'imagenResultados'];

    public function ejercicio()
    {
    	return $this->belongsTo('App\Models\Ejercicio');
    }

}
