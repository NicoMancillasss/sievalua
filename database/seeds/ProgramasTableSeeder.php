<?php

use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programa::create([
        	'id'=>1,
        	'nombre'=>'Fondo de Aportación para Nómina Educativa y Gasto Operativo (FONE)'
    	]);
    	Programa::create([
        	'id'=>2,
        	'nombre'=>'Fondo de Aportaciones para los Servicios de Salud (FASSA)'
    	]);
    	Programa::create([
        	'id'=>3,
        	'nombre'=>'Fondo de Aportaciones para la Educación Tecnológica y de adultos (FAETA) vertiente educación para adultos'
    	]);

    	Programa::create([
        	'id'=>4,
        	'nombre'=>'Fondo Minero'
    	]);

    	Programa::create([
        	'id'=>5,
        	'nombre'=>'Fondo Metropolitano'
        ]);

        Programa::create([
        	'id'=>6,
        	'nombre'=>'Fondo Regional'
        ]);

        Programa::create([
        	'id'=>7,
        	'nombre'=>'Programa Asistencia Social Alimentaria'
        ]);
    }
}
