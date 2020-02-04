<?php

namespace App\Listener;

use App\Events\Bitacora;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;
use App\Models\BitacoraRegistro;

class BitacoraListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
   
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  Bitacora  $event
     * @return void
     */
    public function handle(Bitacora $event)
    {
        $registro = new BitacoraRegistro();
        $registro->user_id=Auth::user()->id;
        $registro->tabla=$event->registro->getTabla();
        $registro->accion=$event->accion;
        $registro->id_registro_modificado=$event->registro->id;
        $registro->descripcion=$event->descripcion;
        $registro->save();

    }
}
