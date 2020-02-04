<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class MarcoJuridico extends Model
{
    protected $table = 'portal_marco_juridico';
    protected $fillable = ['id', 'titulo', 'descripcion', 'documento'];
}
