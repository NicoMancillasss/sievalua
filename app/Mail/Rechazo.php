<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Rechazo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $info;
    protected $solicitud;

    public function __construct($request,$solicitud)
    {
        $this->info = $request;
        $this->solicitud = $solicitud;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('usuarios.administrador.emails.rechazo')
        ->subject('Información importante acerca de su registro como despacho evaluador.')
        ->with([
            'data' => $this->info,
            'solicitud' => $this->solicitud,
            ]);  
      }
}
