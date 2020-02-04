<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalagoEvaluacion extends Model
{
    protected $table = 'catalago_evaluacion';
    protected $fillable=['id','ejercicio_id','evaluacion_id','catalago_documento_id'];

     public function catalago_documento()
    {
        return $this->BelongsTo('App\Models\CatalogoDocumento','catalago_documento_id');
    }
}
