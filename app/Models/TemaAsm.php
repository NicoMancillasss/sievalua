<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemaAsm extends Model
{
    protected $table = 'temas_asm';
    protected $fillable=['asm_id','tema_id'];

    public function tema()
    {
    	return $this->belongsTo('App\Models\Tema');
    }
}
