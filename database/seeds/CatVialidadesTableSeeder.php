<?php

use Illuminate\Database\Seeder;

class CatVialidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_vialidades')->delete();
        
        \DB::table('cat_vialidades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Ampliación',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Andador',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Avenida',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Boulevard',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Calle',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Callejón',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Calzada',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Cerrada',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Circuito',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Circunvalación',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Continuación',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Corredor',
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'Diagonal',
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Eje Vial',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Pasaje Peatonal',
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Periférico',
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Privada',
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Prolongación',
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Retorno',
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'Viaducto',
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Carretera',
            ),
        ));
        
        
    }
}