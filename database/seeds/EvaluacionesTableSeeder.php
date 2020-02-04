<?php

use Illuminate\Database\Seeder;
use App\Models\Evaluacion;

class EvaluacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluacion::create([
        	'id'=>1,
        	'ejercicio_id'=>1,
        	'dependencia_id'=>10,
        	'programa_id'=>1,
        	'tipo_evaluacion'=>1,
        	'entregable'=>'Informe Final'
        ]);
        Evaluacion::create([
            'id'=>2,
            'ejercicio_id'=>1,
            'dependencia_id'=>64,
            'programa_id'=>2,
            'tipo_evaluacion'=>1,
            'entregable'=>'Informe Final'
        ]);
        Evaluacion::create([
            'id'=>3,
            'ejercicio_id'=>1,
            'dependencia_id'=>72,
            'programa_id'=>3,
            'tipo_evaluacion'=>1,
            'entregable'=>'Informe Final'
        ]);
     /*   Evaluacion::create([
            'id'=>4,
            'ejercicio_id'=>1,
            'dependencia_id'=>99,
            'programa_id'=>4,
            'tipo_evaluacion'=>1,
            'entregable'=>'Informe Final'
        ]);*/
       /* Evaluacion::create([
            'id'=>5,
            'ejercicio_id'=>1,
            'dependencia_id'=>100,
            'programa_id'=>4,
            'tipo_evaluacion'=>1,
            'entregable'=>'Informe Final'
        ]);*/
        Evaluacion::create([
            'id'=>6,
            'ejercicio_id'=>1,
            'dependencia_id'=>13,
            'programa_id'=>5,
            'tipo_evaluacion'=>1,
            'entregable'=>'Informe Final'
        ]);
        Evaluacion::create([
            'id'=>7,
            'ejercicio_id'=>1,
            'dependencia_id'=>3,
            'programa_id'=>6,
            'tipo_evaluacion'=>1,
            'entregable'=>'Informe Final'
        ]);
        Evaluacion::create([
            'id'=>68,
            'ejercicio_id'=>1,
            'dependencia_id'=>61,
            'programa_id'=>7,
            'tipo_evaluacion'=>2,
            'entregable'=>'Informe Final'
        ]);
    }
}
