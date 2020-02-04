<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class SistemaEstatal extends Model
{
    protected $table = 'portal_sistema_estatal';
    protected $fillable = ['id', 'nombre', 'link'];
}
