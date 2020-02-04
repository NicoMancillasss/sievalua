<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class ProgramaAnual extends Model
{
    protected $table = 'portal_programa_anual';
    protected $fillable = ['id', 'titulo', 'descripcion', 'documento'];
}
