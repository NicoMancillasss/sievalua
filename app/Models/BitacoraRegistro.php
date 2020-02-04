<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BitacoraRegistro extends Model
{
    protected $table="registro_bitacora";
    protected $fillable=['tabla','accion','id_registro_modificado','descripcion'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
