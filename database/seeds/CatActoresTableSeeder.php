<?php

use Illuminate\Database\Seeder;

class CatActoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_actores')->delete();
        
        \DB::table('cat_actores')->insert(array (
            0 => 
            array (
                'id' => 1,
            'nombre' => 'Unidad Responsable (UR)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
            'nombre' => 'Unidad de Evaluación (UE)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Otras áreas de la Dependencia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Otras Dependencias y/o entidades',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Gobierno Estatal/Municipal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}