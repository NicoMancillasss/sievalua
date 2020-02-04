<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class Mosaico extends Model
{
    protected $table = 'portal_mosaicos';
    protected $fillable = ['id', 'nombre', 'imagen', 'link'];
}
