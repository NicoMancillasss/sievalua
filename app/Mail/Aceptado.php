<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use \Carbon\Carbon;

class Aceptado extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;
    protected $postula;
    protected $cita;
    protected $solicitud;
    public function __construct($request,$postula,$solicitud)
    {
        Carbon::setLocale('es');
        $date = Carbon::parse($request->fecha_hora, 'UTC');
        $this->cita=$date->isoFormat('dddd D MMMM YYYY, h:mm a');
        $this->data=$request;
        $this->postula=$postula;
        $this->solicitud=$solicitud;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->view('usuarios.administrador.emails.aceptacion')
         ->subject('Comunicación SíEvalúa')
        ->with([
            'data' => $this->data,
            'postula' => $this->postula,
            'cita' => $this->cita,
            'solicitud' => $this->solicitud,
            ]);   
            
    }
}
