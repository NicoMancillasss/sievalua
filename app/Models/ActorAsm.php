<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActorAsm extends Model
{
    protected $table = 'actores_asm';

    public function actor()
    {
    	return $this->belongsTo('App\Models\Actor');
    }
}
