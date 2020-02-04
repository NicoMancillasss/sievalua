<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class SitioInteres extends Model
{
    protected $table = 'portal_sitios_interes';
    protected $fillable = ['id', 'nombre', 'imagen', 'link'];
}
