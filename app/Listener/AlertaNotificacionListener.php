<?php

namespace App\Listener;

use App\Events\NuevaAlerta;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Alerta;

class AlertaNotificacionListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NuevaAlerta  $event
     * @return void
     */
    public function handle(NuevaAlerta $event)
    {
        $alerta = new Alerta();
        $alerta->titulo = $event->alerta['titulo'];
        $alerta->mensaje = $event->alerta['mensaje'];
        $alerta->ruta = $event->alerta['ruta'];
        $alerta->user_id = $event->alerta['user_id'];
        $alerta->tipo = $event->alerta['tipo'];
        $alerta->save();
       // dd($event->alerta['titulo']);
    }
}
