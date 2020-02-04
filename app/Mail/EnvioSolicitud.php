<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnvioSolicitud extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $vista;
    protected $solicitud;
    public function __construct($vista,$solicitud)
    {
        $this->vista =$vista;
        $this->solicitud =$solicitud;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->vista)
        ->with([
            'solicitud' => $this->solicitud,
            ]);  
    }
}
