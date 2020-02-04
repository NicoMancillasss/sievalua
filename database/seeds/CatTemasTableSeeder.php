<?php

use Illuminate\Database\Seeder;

class CatTemasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_temas')->delete();
        
        \DB::table('cat_temas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo_evaluacion_id' => 4,
                'nombre' => 'Diseño',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tipo_evaluacion_id' => 4,
                'nombre' => 'Cobertura y Focalización',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tipo_evaluacion_id' => 4,
                'nombre' => 'Planeación y Orientación a Resultados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tipo_evaluacion_id' => 4,
                'nombre' => 'Percepción de la Población atendida',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tipo_evaluacion_id' => 4,
                'nombre' => 'Medición de Resultados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tipo_evaluacion_id' => 4,
                'nombre' => 'Operación ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tipo_evaluacion_id' => 3,
                'nombre' => 'Justificación de la creación o modificación sustancial del diseño del programa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tipo_evaluacion_id' => 3,
                'nombre' => 'Contribución del programa para el cumplimiento de las Metas Nacionales y planeación orientada a resultados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tipo_evaluacion_id' => 3,
                'nombre' => 'Poblaciones o áreas de enfoque potencial y objetivo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tipo_evaluacion_id' => 3,
                'nombre' => 'Matriz de Indicadores para Resultados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tipo_evaluacion_id' => 3,
                'nombre' => 'Análisis de posibles complementariedades o coincidencias con otros Pp.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tipo_evaluacion_id' => 2,
            'nombre' => 'Planeación (planeación estratégica, programación y presupuestación)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Difusión del Programa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Solicitud de Apoyos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Selección de beneficiarios',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Producción de bienes o servicios',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Distribución de apoyos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Entrega de apoyos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Seguimiento a beneficiarios y monitoreo de apoyos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Contraloría social y satisfacción de usuarios',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tipo_evaluacion_id' => 2,
                'nombre' => 'Evaluación y monitoreo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}