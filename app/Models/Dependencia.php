<?php

namespace App\Models;

use App\Models\Mensaje;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Dependencia extends Model
{
    protected $table = 'dependencias';
    protected $fillable = ['id','nombre', 'acronimo', 'tipo_dep'];

    public function user()
    {
        return $this->hasOne('App\User','dependencia_id');
    }

    public function mensajes($postula)
    {
        return $mensaje = Mensaje::where('postula_id', $postula)
            ->get();
    }
}
