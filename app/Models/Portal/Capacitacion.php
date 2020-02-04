<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = 'portal_capacitacion';
    protected $fillable = ['id', 'titulo', 'descripcion', 'documento'];
}
