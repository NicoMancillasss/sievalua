<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEvaluacion extends Model
{
    protected $table = 'cat_evaluaciones';
    protected $fillable=['nombre'];
}
