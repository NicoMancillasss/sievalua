<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use \App\Models\Asm;
use \App\Models\Alerta;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Compartir una variable para todas las vistas ->where('tipo','<>','Recomendado')*/
        $asm = Asm::where('estatus_id', 1)->where('tipo','<>','Administrador')->get();
        View::share('globalasm', $asm);


        /*
                $alerta = new Alerta();
                View::share('alertas','Holi');
                */ }
}
