<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Avance;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia un correo a un determinado usuario';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$avance = new Avance(['actividad_id'=>6,'porcentaje_avance'=>1,'documento_probatorio'=>'/ruta','observacion'=>'Hola']);
        //$avance->save();
        $this->info('Los mensajes de felicitacion han sido enviados correctamente');
    }
}
