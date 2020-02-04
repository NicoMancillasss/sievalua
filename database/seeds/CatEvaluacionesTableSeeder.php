<?php

use Illuminate\Database\Seeder;

class CatEvaluacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_evaluaciones')->delete();
        
        \DB::table('cat_evaluaciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Específica de Desempeño',
                'created_at' => '2019-08-27 15:23:27',
                'updated_at' => '2019-08-27 15:23:27',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'De Procesos',
                'created_at' => '2019-08-27 15:23:27',
                'updated_at' => '2019-08-27 15:23:27',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Diseño',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Consistencia y Resultados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Específica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'De Impacto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}