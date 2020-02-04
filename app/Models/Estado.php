<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
   	protected $table = 'cat_estados';
    protected $fillable=['clave','nombre','activo','abreviatura'];

    public function municipio(){
        return $this->hasMany('App\Models\Municipio');
    }
}
