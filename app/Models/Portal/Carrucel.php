<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Carrucel extends Model
{
    protected $table = 'portal_carrusel';
    protected $fillable = ['id', 'titulo', 'descripcion', 'imagen','link'];
}
