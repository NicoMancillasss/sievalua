<?php

use Illuminate\Database\Seeder;

class AspectosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aspectos')->delete();
        
        \DB::table('aspectos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Específico',
                'created_at' => '2019-08-27 12:26:56',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Institucional',
                'created_at' => '2019-08-27 12:27:21',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Interinstitucional',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Intergubernamental',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}