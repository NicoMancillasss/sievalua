<?php

use Illuminate\Database\Seeder;

class AccionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('acciones')->delete();
        
        \DB::table('acciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Corrige',
            'descripcion' => 'Corrige actividades o procesos del programa. Se refiere a aquellos aspectos que están relacionados con las Actividades de la Matriz de Indicadores para Resultados (MIR) del programa, tales como mejoras en sus indicadores, cambios no sustantivos en sus Reg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Modifica',
                'descripcion' => 'Modifica apoyos del programa. Se refiere a aquellos aspectos que están relacionados con los Componentes de la MIR del programa, es decir, modificaciones o mejoras en los bienes y/o servicios que brinda.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Adiciona',
                'descripcion' => 'Adiciona o reubica el programa. Se refiere a aquellos aspectos que buscan reforzar el programa por medio de la generación de sinergias con otros programas o incluso la integración de dos o más programas en uno solo, así como acciones para que el programa ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Reorienta',
                'descripcion' => 'Reorienta sustancialmente el programa. Se refiere a aquellos aspectos que están relacionados con el Propósito del programa, como por ejemplo acciones relacionadas con la planeación estratégica, con la focalización, con mejoras en la definición de su pobla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Suspende parcial o totalmente el Programa y/o Política Pública',
                'descripcion' => 'Se refiere a aquellos aspectos que derivan en la suspensión parcial o total del programa.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}