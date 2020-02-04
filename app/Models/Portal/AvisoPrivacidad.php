<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class AvisoPrivacidad extends Model
{
    protected $table = 'portal_aviso_privacidad';
    protected $fillable = ['id', 'documento'];
}
