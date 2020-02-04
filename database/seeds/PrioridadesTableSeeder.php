<?php

use Illuminate\Database\Seeder;

class PrioridadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prioridades')->delete();
        
        \DB::table('prioridades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Muy Alto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Alto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Medio',
                'created_at' => '2019-08-12 12:30:34',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Bajo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}