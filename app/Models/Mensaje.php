<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Auth;

class Mensaje extends Model
{
    protected $table = 'mensajes';
    protected $fillable = ['id', 'txt_solicitud', 'modo_solicitud', 'fecha_limite', 'doc_evidencia', 'estatus', 'observacion', 'emisor_id', 'receptor_id'];


    public function emisor()
    {
        return $this->BelongsTo('App\User');
    }
    public function receptor()
    {
        return $this->BelongsTo('App\User');
    }

    public function cantidadMensajes()
    {
        $mensajes = $this->where('receptor_id', Auth::user()->id)
            ->where('estatus', 'enviado')->get();
        return $mensajes;
    }
}
