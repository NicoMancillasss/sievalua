<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class TerminosReferencia extends Model
{
    protected $table = 'terminos_referencias';
    protected $fillable = ['id','nombre','descripcion','documento'];
}
