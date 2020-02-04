<?php

use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ejercicio::create(['id'=>1,'año'=>2018,'activo'=>1,'fecha_cierre'=>'2019-06-30']);
    }
}
