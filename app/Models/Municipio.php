<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'cat_municipios';
    protected $fillable=['clave','nombre','activo','estado_id'];

    public function estado(){
        return $this->belongsTo('App\Models\Estado','estado_id');
    }
}
