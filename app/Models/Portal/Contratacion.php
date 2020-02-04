<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    protected $table = 'portal_contratacion';
    protected $fillable = ['id', 'titulo', 'descripcion', 'documento'];
}
