<?php

use Illuminate\Database\Seeder;

class PostulaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('postula')->delete();
        
        \DB::table('postula')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estatus' => 1,
                'cita' => '2020-01-02T01:00',
                'lugar' => 'Circuito Cerro del Gato Edificio H, Prueba',
                'firma_contrato' => '0',
                'solicitud_id' => 1,
                'evaluacion_id' => 1,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:33:43',
            ),
            1 => 
            array (
                'id' => 2,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 1,
                'evaluacion_id' => 2,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            2 => 
            array (
                'id' => 3,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 1,
                'evaluacion_id' => 3,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            3 => 
            array (
                'id' => 4,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 1,
                'evaluacion_id' => 6,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            4 => 
            array (
                'id' => 5,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 1,
                'evaluacion_id' => 7,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            5 => 
            array (
                'id' => 6,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 1,
                'evaluacion_id' => 68,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            6 => 
            array (
                'id' => 7,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 2,
                'evaluacion_id' => 1,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            7 => 
            array (
                'id' => 8,
                'estatus' => 1,
                'cita' => '2019-01-01T01:00',
                'lugar' => 'wqedqweqwe',
                'firma_contrato' => '0',
                'solicitud_id' => 2,
                'evaluacion_id' => 2,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-08-02 14:00:33',
            ),
            8 => 
            array (
                'id' => 9,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 2,
                'evaluacion_id' => 3,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            9 => 
            array (
                'id' => 10,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 2,
                'evaluacion_id' => 6,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            10 => 
            array (
                'id' => 11,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 2,
                'evaluacion_id' => 7,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            11 => 
            array (
                'id' => 12,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 2,
                'evaluacion_id' => 68,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            12 => 
            array (
                'id' => 13,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 3,
                'evaluacion_id' => 1,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            13 => 
            array (
                'id' => 14,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 3,
                'evaluacion_id' => 2,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            14 => 
            array (
                'id' => 15,
                'estatus' => 1,
                'cita' => '2019-01-02T01:01',
                'lugar' => 'wqedqweqwe',
                'firma_contrato' => '0',
                'solicitud_id' => 3,
                'evaluacion_id' => 3,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-08-02 14:00:57',
            ),
            15 => 
            array (
                'id' => 16,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 3,
                'evaluacion_id' => 6,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            16 => 
            array (
                'id' => 17,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 3,
                'evaluacion_id' => 7,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            17 => 
            array (
                'id' => 18,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 3,
                'evaluacion_id' => 68,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            18 => 
            array (
                'id' => 19,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 4,
                'evaluacion_id' => 1,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            19 => 
            array (
                'id' => 20,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 4,
                'evaluacion_id' => 2,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            20 => 
            array (
                'id' => 21,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 4,
                'evaluacion_id' => 3,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            21 => 
            array (
                'id' => 22,
                'estatus' => 1,
                'cita' => '2019-01-01T01:01',
                'lugar' => 'wqedqweqwe',
                'firma_contrato' => '0',
                'solicitud_id' => 4,
                'evaluacion_id' => 6,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-08-02 14:01:18',
            ),
            22 => 
            array (
                'id' => 23,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 4,
                'evaluacion_id' => 7,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            23 => 
            array (
                'id' => 24,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 4,
                'evaluacion_id' => 68,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            24 => 
            array (
                'id' => 25,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 5,
                'evaluacion_id' => 1,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            25 => 
            array (
                'id' => 26,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 5,
                'evaluacion_id' => 2,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            26 => 
            array (
                'id' => 27,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 5,
                'evaluacion_id' => 3,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            27 => 
            array (
                'id' => 28,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 5,
                'evaluacion_id' => 6,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            28 => 
            array (
                'id' => 29,
                'estatus' => 1,
                'cita' => '2019-01-03T01:01',
                'lugar' => 'wqedqweqwe',
                'firma_contrato' => '0',
                'solicitud_id' => 5,
                'evaluacion_id' => 7,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-08-02 14:01:45',
            ),
            29 => 
            array (
                'id' => 30,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 5,
                'evaluacion_id' => 68,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            30 => 
            array (
                'id' => 31,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 6,
                'evaluacion_id' => 1,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            31 => 
            array (
                'id' => 32,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 6,
                'evaluacion_id' => 2,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            32 => 
            array (
                'id' => 33,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 6,
                'evaluacion_id' => 3,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            33 => 
            array (
                'id' => 34,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 6,
                'evaluacion_id' => 6,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            34 => 
            array (
                'id' => 35,
                'estatus' => 1,
                'cita' => NULL,
                'lugar' => NULL,
                'firma_contrato' => '0',
                'solicitud_id' => 6,
                'evaluacion_id' => 7,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-07-16 17:32:34',
            ),
            35 => 
            array (
                'id' => 36,
                'estatus' => 1,
                'cita' => '2019-01-01T01:00',
                'lugar' => 'wqedqweqwe',
                'firma_contrato' => '0',
                'solicitud_id' => 6,
                'evaluacion_id' => 68,
                'created_at' => '2019-07-16 17:32:34',
                'updated_at' => '2019-08-02 14:02:08',
            ),
        ));
        
        
    }
}