<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'cat_temas';
    protected $fillable=['tipo_evaluacion_id','nombre'];

    public function tipo_evaluacion()
    {
        return $this->belongsTo('App\Models\TipoEvaluacion');
    }
}
