<?php

use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estatus')->delete();
        
        \DB::table('estatus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estatus' => 'revisión',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'estatus' => 'corrección',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'estatus' => 'aceptado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'estatus' => 'captura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
             4 => 
            array (
                'id' => 5,
                'estatus' => 'enviado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
        ));
        
        
    }
}