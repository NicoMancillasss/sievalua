<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\CatalagoEvaluacion;

class CatalogoDocumento extends Model
{
    protected $table = 'catalago_documentos';
    protected $fillable=['id','nombre','descripcion','tipo_documento'];

    public function ejercicio()
    {
        return $this->BelongsTo('App\Models\Ejercicio','ejercicio_id');
    }

    
}

