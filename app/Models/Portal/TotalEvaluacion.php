<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class TotalEvaluacion extends Model
{
    protected $table = 'portal_total_evaluaciones';
    protected $fillable = ['id', 'titulo', 'descripcion', 'documento'];
}
