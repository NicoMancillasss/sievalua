<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RechazoUna extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $info;
    protected $solicitud;
    protected $postula;

    public function __construct($request,$solicitud,$postula)
    {
        $this->info = $request;
        $this->solicitud = $solicitud;
        $this->postula = $postula;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('usuarios.administrador.emails.rechazoUna')
        ->subject('Información importante acerca de su registro como despacho evaluador.')
        ->with([
            'data' => $this->info,
            'solicitud' => $this->solicitud,
            'postula' => $this->postula, 
            ]);  
      }
}
