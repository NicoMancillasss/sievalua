<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_municipios')->delete();
        
        \DB::table('cat_municipios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estado_id' => 1,
                'clave' => '001',
                'nombre' => 'Aguascalientes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'estado_id' => 1,
                'clave' => '002',
                'nombre' => 'Asientos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'estado_id' => 1,
                'clave' => '003',
                'nombre' => 'Calvillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'estado_id' => 1,
                'clave' => '004',
                'nombre' => 'Cosío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'estado_id' => 1,
                'clave' => '005',
                'nombre' => 'Jesús María',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'estado_id' => 1,
                'clave' => '006',
                'nombre' => 'Pabellón de Arteaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'estado_id' => 1,
                'clave' => '007',
                'nombre' => 'Rincón de Romos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'estado_id' => 1,
                'clave' => '008',
                'nombre' => 'San José de Gracia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'estado_id' => 1,
                'clave' => '009',
                'nombre' => 'Tepezalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'estado_id' => 1,
                'clave' => '010',
                'nombre' => 'El Llano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'estado_id' => 1,
                'clave' => '011',
                'nombre' => 'San Francisco de los Romo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'estado_id' => 2,
                'clave' => '001',
                'nombre' => 'Ensenada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'estado_id' => 2,
                'clave' => '002',
                'nombre' => 'Mexicali',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'estado_id' => 2,
                'clave' => '003',
                'nombre' => 'Tecate',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'estado_id' => 2,
                'clave' => '004',
                'nombre' => 'Tijuana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'estado_id' => 2,
                'clave' => '005',
                'nombre' => 'Playas de Rosarito',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'estado_id' => 3,
                'clave' => '001',
                'nombre' => 'Comondú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'estado_id' => 3,
                'clave' => '002',
                'nombre' => 'Mulegé',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'estado_id' => 3,
                'clave' => '003',
                'nombre' => 'La Paz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'estado_id' => 3,
                'clave' => '008',
                'nombre' => 'Los Cabos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'estado_id' => 3,
                'clave' => '009',
                'nombre' => 'Loreto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'estado_id' => 4,
                'clave' => '001',
                'nombre' => 'Calkiní',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'estado_id' => 4,
                'clave' => '002',
                'nombre' => 'Campeche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'estado_id' => 4,
                'clave' => '003',
                'nombre' => 'Carmen',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'estado_id' => 4,
                'clave' => '004',
                'nombre' => 'Champotón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'estado_id' => 4,
                'clave' => '005',
                'nombre' => 'Hecelchakán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'estado_id' => 4,
                'clave' => '006',
                'nombre' => 'Hopelchén',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'estado_id' => 4,
                'clave' => '007',
                'nombre' => 'Palizada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'estado_id' => 4,
                'clave' => '008',
                'nombre' => 'Tenabo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'estado_id' => 4,
                'clave' => '009',
                'nombre' => 'Escárcega',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'estado_id' => 4,
                'clave' => '010',
                'nombre' => 'Calakmul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'estado_id' => 4,
                'clave' => '011',
                'nombre' => 'Candelaria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'estado_id' => 5,
                'clave' => '001',
                'nombre' => 'Abasolo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'estado_id' => 5,
                'clave' => '002',
                'nombre' => 'Acuña',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'estado_id' => 5,
                'clave' => '003',
                'nombre' => 'Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'estado_id' => 5,
                'clave' => '004',
                'nombre' => 'Arteaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'estado_id' => 5,
                'clave' => '005',
                'nombre' => 'Candela',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'estado_id' => 5,
                'clave' => '006',
                'nombre' => 'Castaños',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'estado_id' => 5,
                'clave' => '007',
                'nombre' => 'Cuatro Ciénegas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'estado_id' => 5,
                'clave' => '008',
                'nombre' => 'Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'estado_id' => 5,
                'clave' => '009',
                'nombre' => 'Francisco I. Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'estado_id' => 5,
                'clave' => '010',
                'nombre' => 'Frontera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'estado_id' => 5,
                'clave' => '011',
                'nombre' => 'General Cepeda',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'estado_id' => 5,
                'clave' => '012',
                'nombre' => 'Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'estado_id' => 5,
                'clave' => '013',
                'nombre' => 'Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'estado_id' => 5,
                'clave' => '014',
                'nombre' => 'Jiménez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'estado_id' => 5,
                'clave' => '015',
                'nombre' => 'Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'estado_id' => 5,
                'clave' => '016',
                'nombre' => 'Lamadrid',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'estado_id' => 5,
                'clave' => '017',
                'nombre' => 'Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'estado_id' => 5,
                'clave' => '018',
                'nombre' => 'Monclova',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'estado_id' => 5,
                'clave' => '019',
                'nombre' => 'Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'estado_id' => 5,
                'clave' => '020',
                'nombre' => 'Múzquiz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'estado_id' => 5,
                'clave' => '021',
                'nombre' => 'Nadadores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'estado_id' => 5,
                'clave' => '022',
                'nombre' => 'Nava',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'estado_id' => 5,
                'clave' => '023',
                'nombre' => 'Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'estado_id' => 5,
                'clave' => '024',
                'nombre' => 'Parras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'estado_id' => 5,
                'clave' => '025',
                'nombre' => 'Piedras Negras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'estado_id' => 5,
                'clave' => '026',
                'nombre' => 'Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'estado_id' => 5,
                'clave' => '027',
                'nombre' => 'Ramos Arizpe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'estado_id' => 5,
                'clave' => '028',
                'nombre' => 'Sabinas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'estado_id' => 5,
                'clave' => '029',
                'nombre' => 'Sacramento',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'estado_id' => 5,
                'clave' => '030',
                'nombre' => 'Saltillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'estado_id' => 5,
                'clave' => '031',
                'nombre' => 'San Buenaventura',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'estado_id' => 5,
                'clave' => '032',
                'nombre' => 'San Juan de Sabinas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'estado_id' => 5,
                'clave' => '033',
                'nombre' => 'San Pedro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'estado_id' => 5,
                'clave' => '034',
                'nombre' => 'Sierra Mojada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'estado_id' => 5,
                'clave' => '035',
                'nombre' => 'Torreón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'estado_id' => 5,
                'clave' => '036',
                'nombre' => 'Viesca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'estado_id' => 5,
                'clave' => '037',
                'nombre' => 'Villa Unión',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'estado_id' => 5,
                'clave' => '038',
                'nombre' => 'Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'estado_id' => 6,
                'clave' => '001',
                'nombre' => 'Armería',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'estado_id' => 6,
                'clave' => '002',
                'nombre' => 'Colima',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'estado_id' => 6,
                'clave' => '003',
                'nombre' => 'Comala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'estado_id' => 6,
                'clave' => '004',
                'nombre' => 'Coquimatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'estado_id' => 6,
                'clave' => '005',
                'nombre' => 'Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'estado_id' => 6,
                'clave' => '006',
                'nombre' => 'Ixtlahuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'estado_id' => 6,
                'clave' => '007',
                'nombre' => 'Manzanillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'estado_id' => 6,
                'clave' => '008',
                'nombre' => 'Minatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'estado_id' => 6,
                'clave' => '009',
                'nombre' => 'Tecomán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'estado_id' => 6,
                'clave' => '010',
                'nombre' => 'Villa de Álvarez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'estado_id' => 7,
                'clave' => '001',
                'nombre' => 'Acacoyagua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'estado_id' => 7,
                'clave' => '002',
                'nombre' => 'Acala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'estado_id' => 7,
                'clave' => '003',
                'nombre' => 'Acapetahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'estado_id' => 7,
                'clave' => '004',
                'nombre' => 'Altamirano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'estado_id' => 7,
                'clave' => '005',
                'nombre' => 'Amatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'estado_id' => 7,
                'clave' => '006',
                'nombre' => 'Amatenango de la Frontera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'estado_id' => 7,
                'clave' => '007',
                'nombre' => 'Amatenango del Valle',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'estado_id' => 7,
                'clave' => '008',
                'nombre' => 'Angel Albino Corzo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'estado_id' => 7,
                'clave' => '009',
                'nombre' => 'Arriaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'estado_id' => 7,
                'clave' => '010',
                'nombre' => 'Bejucal de Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'estado_id' => 7,
                'clave' => '011',
                'nombre' => 'Bella Vista',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'estado_id' => 7,
                'clave' => '012',
                'nombre' => 'Berriozábal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'estado_id' => 7,
                'clave' => '013',
                'nombre' => 'Bochil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'estado_id' => 7,
                'clave' => '014',
                'nombre' => 'El Bosque',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'estado_id' => 7,
                'clave' => '015',
                'nombre' => 'Cacahoatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'estado_id' => 7,
                'clave' => '016',
                'nombre' => 'Catazajá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'estado_id' => 7,
                'clave' => '017',
                'nombre' => 'Cintalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'estado_id' => 7,
                'clave' => '018',
                'nombre' => 'Coapilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'estado_id' => 7,
                'clave' => '019',
                'nombre' => 'Comitán de Domínguez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'estado_id' => 7,
                'clave' => '020',
                'nombre' => 'La Concordia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'estado_id' => 7,
                'clave' => '021',
                'nombre' => 'Copainalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'estado_id' => 7,
                'clave' => '022',
                'nombre' => 'Chalchihuitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'estado_id' => 7,
                'clave' => '023',
                'nombre' => 'Chamula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'estado_id' => 7,
                'clave' => '024',
                'nombre' => 'Chanal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'estado_id' => 7,
                'clave' => '025',
                'nombre' => 'Chapultenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'estado_id' => 7,
                'clave' => '026',
                'nombre' => 'Chenalhó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'estado_id' => 7,
                'clave' => '027',
                'nombre' => 'Chiapa de Corzo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'estado_id' => 7,
                'clave' => '028',
                'nombre' => 'Chiapilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'estado_id' => 7,
                'clave' => '029',
                'nombre' => 'Chicoasén',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'estado_id' => 7,
                'clave' => '030',
                'nombre' => 'Chicomuselo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'estado_id' => 7,
                'clave' => '031',
                'nombre' => 'Chilón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'estado_id' => 7,
                'clave' => '032',
                'nombre' => 'Escuintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'estado_id' => 7,
                'clave' => '033',
                'nombre' => 'Francisco León',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'estado_id' => 7,
                'clave' => '034',
                'nombre' => 'Frontera Comalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'estado_id' => 7,
                'clave' => '035',
                'nombre' => 'Frontera Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'estado_id' => 7,
                'clave' => '036',
                'nombre' => 'La Grandeza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'estado_id' => 7,
                'clave' => '037',
                'nombre' => 'Huehuetán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'estado_id' => 7,
                'clave' => '038',
                'nombre' => 'Huixtán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'estado_id' => 7,
                'clave' => '039',
                'nombre' => 'Huitiupán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'estado_id' => 7,
                'clave' => '040',
                'nombre' => 'Huixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'estado_id' => 7,
                'clave' => '041',
                'nombre' => 'La Independencia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'estado_id' => 7,
                'clave' => '042',
                'nombre' => 'Ixhuatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'estado_id' => 7,
                'clave' => '043',
                'nombre' => 'Ixtacomitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'estado_id' => 7,
                'clave' => '044',
                'nombre' => 'Ixtapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'estado_id' => 7,
                'clave' => '045',
                'nombre' => 'Ixtapangajoya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'estado_id' => 7,
                'clave' => '046',
                'nombre' => 'Jiquipilas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'estado_id' => 7,
                'clave' => '047',
                'nombre' => 'Jitotol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'estado_id' => 7,
                'clave' => '048',
                'nombre' => 'Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'estado_id' => 7,
                'clave' => '049',
                'nombre' => 'Larráinzar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'estado_id' => 7,
                'clave' => '050',
                'nombre' => 'La Libertad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'estado_id' => 7,
                'clave' => '051',
                'nombre' => 'Mapastepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'estado_id' => 7,
                'clave' => '052',
                'nombre' => 'Las Margaritas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'estado_id' => 7,
                'clave' => '053',
                'nombre' => 'Mazapa de Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'estado_id' => 7,
                'clave' => '054',
                'nombre' => 'Mazatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'estado_id' => 7,
                'clave' => '055',
                'nombre' => 'Metapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'estado_id' => 7,
                'clave' => '056',
                'nombre' => 'Mitontic',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'estado_id' => 7,
                'clave' => '057',
                'nombre' => 'Motozintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'estado_id' => 7,
                'clave' => '058',
                'nombre' => 'Nicolás Ruíz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'estado_id' => 7,
                'clave' => '059',
                'nombre' => 'Ocosingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'estado_id' => 7,
                'clave' => '060',
                'nombre' => 'Ocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'estado_id' => 7,
                'clave' => '061',
                'nombre' => 'Ocozocoautla de Espinosa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'estado_id' => 7,
                'clave' => '062',
                'nombre' => 'Ostuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'estado_id' => 7,
                'clave' => '063',
                'nombre' => 'Osumacinta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'estado_id' => 7,
                'clave' => '064',
                'nombre' => 'Oxchuc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'estado_id' => 7,
                'clave' => '065',
                'nombre' => 'Palenque',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'estado_id' => 7,
                'clave' => '066',
                'nombre' => 'Pantelhó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'estado_id' => 7,
                'clave' => '067',
                'nombre' => 'Pantepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'estado_id' => 7,
                'clave' => '068',
                'nombre' => 'Pichucalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'estado_id' => 7,
                'clave' => '069',
                'nombre' => 'Pijijiapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'estado_id' => 7,
                'clave' => '070',
                'nombre' => 'El Porvenir',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'estado_id' => 7,
                'clave' => '071',
                'nombre' => 'Villa Comaltitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'estado_id' => 7,
                'clave' => '072',
                'nombre' => 'Pueblo Nuevo Solistahuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'estado_id' => 7,
                'clave' => '073',
                'nombre' => 'Rayón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'estado_id' => 7,
                'clave' => '074',
                'nombre' => 'Reforma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'estado_id' => 7,
                'clave' => '075',
                'nombre' => 'Las Rosas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'estado_id' => 7,
                'clave' => '076',
                'nombre' => 'Sabanilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'estado_id' => 7,
                'clave' => '077',
                'nombre' => 'Salto de Agua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'estado_id' => 7,
                'clave' => '078',
                'nombre' => 'San Cristóbal de las Casas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'estado_id' => 7,
                'clave' => '079',
                'nombre' => 'San Fernando',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'estado_id' => 7,
                'clave' => '080',
                'nombre' => 'Siltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'estado_id' => 7,
                'clave' => '081',
                'nombre' => 'Simojovel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'estado_id' => 7,
                'clave' => '082',
                'nombre' => 'Sitalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'estado_id' => 7,
                'clave' => '083',
                'nombre' => 'Socoltenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'estado_id' => 7,
                'clave' => '084',
                'nombre' => 'Solosuchiapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'estado_id' => 7,
                'clave' => '085',
                'nombre' => 'Soyaló',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'estado_id' => 7,
                'clave' => '086',
                'nombre' => 'Suchiapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'estado_id' => 7,
                'clave' => '087',
                'nombre' => 'Suchiate',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'estado_id' => 7,
                'clave' => '088',
                'nombre' => 'Sunuapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'estado_id' => 7,
                'clave' => '089',
                'nombre' => 'Tapachula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'estado_id' => 7,
                'clave' => '090',
                'nombre' => 'Tapalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'estado_id' => 7,
                'clave' => '091',
                'nombre' => 'Tapilula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'estado_id' => 7,
                'clave' => '092',
                'nombre' => 'Tecpatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'estado_id' => 7,
                'clave' => '093',
                'nombre' => 'Tenejapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'estado_id' => 7,
                'clave' => '094',
                'nombre' => 'Teopisca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'estado_id' => 7,
                'clave' => '096',
                'nombre' => 'Tila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'estado_id' => 7,
                'clave' => '097',
                'nombre' => 'Tonalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'estado_id' => 7,
                'clave' => '098',
                'nombre' => 'Totolapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'estado_id' => 7,
                'clave' => '099',
                'nombre' => 'La Trinitaria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'estado_id' => 7,
                'clave' => '100',
                'nombre' => 'Tumbalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'estado_id' => 7,
                'clave' => '101',
                'nombre' => 'Tuxtla Gutiérrez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'estado_id' => 7,
                'clave' => '102',
                'nombre' => 'Tuxtla Chico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'estado_id' => 7,
                'clave' => '103',
                'nombre' => 'Tuzantán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'estado_id' => 7,
                'clave' => '104',
                'nombre' => 'Tzimol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'estado_id' => 7,
                'clave' => '105',
                'nombre' => 'Unión Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'estado_id' => 7,
                'clave' => '106',
                'nombre' => 'Venustiano Carranza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'estado_id' => 7,
                'clave' => '107',
                'nombre' => 'Villa Corzo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'estado_id' => 7,
                'clave' => '108',
                'nombre' => 'Villaflores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'estado_id' => 7,
                'clave' => '109',
                'nombre' => 'Yajalón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'estado_id' => 7,
                'clave' => '110',
                'nombre' => 'San Lucas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'estado_id' => 7,
                'clave' => '111',
                'nombre' => 'Zinacantán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'estado_id' => 7,
                'clave' => '112',
                'nombre' => 'San Juan Cancuc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'estado_id' => 7,
                'clave' => '113',
                'nombre' => 'Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'estado_id' => 7,
                'clave' => '114',
                'nombre' => 'Benemérito de las Américas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'estado_id' => 7,
                'clave' => '115',
                'nombre' => 'Maravilla Tenejapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'estado_id' => 7,
                'clave' => '116',
                'nombre' => 'Marqués de Comillas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'estado_id' => 7,
                'clave' => '117',
                'nombre' => 'Montecristo de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'estado_id' => 7,
                'clave' => '118',
                'nombre' => 'San Andrés Duraznal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'estado_id' => 7,
                'clave' => '119',
                'nombre' => 'Santiago el Pinar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'estado_id' => 7,
                'clave' => '120',
                'nombre' => 'Capitán Luis Ángel Vidal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'estado_id' => 7,
                'clave' => '121',
                'nombre' => 'Rincón Chamula San Pedro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'estado_id' => 7,
                'clave' => '122',
                'nombre' => 'El Parral',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'estado_id' => 7,
                'clave' => '123',
                'nombre' => 'Emiliano Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'estado_id' => 7,
                'clave' => '124',
                'nombre' => 'Mezcalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'estado_id' => 8,
                'clave' => '001',
                'nombre' => 'Ahumada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'estado_id' => 8,
                'clave' => '002',
                'nombre' => 'Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'estado_id' => 8,
                'clave' => '003',
                'nombre' => 'Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'estado_id' => 8,
                'clave' => '004',
                'nombre' => 'Aquiles Serdán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'estado_id' => 8,
                'clave' => '005',
                'nombre' => 'Ascensión',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'estado_id' => 8,
                'clave' => '006',
                'nombre' => 'Bachíniva',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'estado_id' => 8,
                'clave' => '007',
                'nombre' => 'Balleza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'estado_id' => 8,
                'clave' => '008',
                'nombre' => 'Batopilas de Manuel Gómez Morín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'estado_id' => 8,
                'clave' => '009',
                'nombre' => 'Bocoyna',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'estado_id' => 8,
                'clave' => '010',
                'nombre' => 'Buenaventura',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'estado_id' => 8,
                'clave' => '011',
                'nombre' => 'Camargo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'estado_id' => 8,
                'clave' => '012',
                'nombre' => 'Carichí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'estado_id' => 8,
                'clave' => '013',
                'nombre' => 'Casas Grandes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'estado_id' => 8,
                'clave' => '014',
                'nombre' => 'Coronado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'estado_id' => 8,
                'clave' => '015',
                'nombre' => 'Coyame del Sotol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'estado_id' => 8,
                'clave' => '016',
                'nombre' => 'La Cruz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'estado_id' => 8,
                'clave' => '017',
                'nombre' => 'Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'estado_id' => 8,
                'clave' => '018',
                'nombre' => 'Cusihuiriachi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'estado_id' => 8,
                'clave' => '019',
                'nombre' => 'Chihuahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'estado_id' => 8,
                'clave' => '020',
                'nombre' => 'Chínipas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'estado_id' => 8,
                'clave' => '021',
                'nombre' => 'Delicias',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'estado_id' => 8,
                'clave' => '022',
                'nombre' => 'Dr. Belisario Domínguez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'estado_id' => 8,
                'clave' => '023',
                'nombre' => 'Galeana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'estado_id' => 8,
                'clave' => '024',
                'nombre' => 'Santa Isabel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'estado_id' => 8,
                'clave' => '025',
                'nombre' => 'Gómez Farías',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'estado_id' => 8,
                'clave' => '026',
                'nombre' => 'Gran Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'estado_id' => 8,
                'clave' => '027',
                'nombre' => 'Guachochi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'estado_id' => 8,
                'clave' => '028',
                'nombre' => 'Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'estado_id' => 8,
                'clave' => '029',
                'nombre' => 'Guadalupe y Calvo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'estado_id' => 8,
                'clave' => '030',
                'nombre' => 'Guazapares',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'estado_id' => 8,
                'clave' => '031',
                'nombre' => 'Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'estado_id' => 8,
                'clave' => '032',
                'nombre' => 'Hidalgo del Parral',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'estado_id' => 8,
                'clave' => '033',
                'nombre' => 'Huejotitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'estado_id' => 8,
                'clave' => '034',
                'nombre' => 'Ignacio Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'estado_id' => 8,
                'clave' => '035',
                'nombre' => 'Janos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'estado_id' => 8,
                'clave' => '036',
                'nombre' => 'Jiménez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'estado_id' => 8,
                'clave' => '037',
                'nombre' => 'Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'estado_id' => 8,
                'clave' => '038',
                'nombre' => 'Julimes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'estado_id' => 8,
                'clave' => '039',
                'nombre' => 'López',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'estado_id' => 8,
                'clave' => '040',
                'nombre' => 'Madera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'estado_id' => 8,
                'clave' => '041',
                'nombre' => 'Maguarichi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'estado_id' => 8,
                'clave' => '042',
                'nombre' => 'Manuel Benavides',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'estado_id' => 8,
                'clave' => '043',
                'nombre' => 'Matachí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'estado_id' => 8,
                'clave' => '044',
                'nombre' => 'Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'estado_id' => 8,
                'clave' => '045',
                'nombre' => 'Meoqui',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'estado_id' => 8,
                'clave' => '046',
                'nombre' => 'Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'estado_id' => 8,
                'clave' => '047',
                'nombre' => 'Moris',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'estado_id' => 8,
                'clave' => '048',
                'nombre' => 'Namiquipa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'estado_id' => 8,
                'clave' => '049',
                'nombre' => 'Nonoava',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'estado_id' => 8,
                'clave' => '050',
                'nombre' => 'Nuevo Casas Grandes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'estado_id' => 8,
                'clave' => '051',
                'nombre' => 'Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'estado_id' => 8,
                'clave' => '052',
                'nombre' => 'Ojinaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'estado_id' => 8,
                'clave' => '053',
                'nombre' => 'Praxedis G. Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'estado_id' => 8,
                'clave' => '054',
                'nombre' => 'Riva Palacio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'estado_id' => 8,
                'clave' => '055',
                'nombre' => 'Rosales',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'estado_id' => 8,
                'clave' => '056',
                'nombre' => 'Rosario',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'estado_id' => 8,
                'clave' => '057',
                'nombre' => 'San Francisco de Borja',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'estado_id' => 8,
                'clave' => '058',
                'nombre' => 'San Francisco de Conchos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'estado_id' => 8,
                'clave' => '059',
                'nombre' => 'San Francisco del Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'estado_id' => 8,
                'clave' => '060',
                'nombre' => 'Santa Bárbara',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'estado_id' => 8,
                'clave' => '061',
                'nombre' => 'Satevó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'estado_id' => 8,
                'clave' => '062',
                'nombre' => 'Saucillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'estado_id' => 8,
                'clave' => '063',
                'nombre' => 'Temósachic',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'estado_id' => 8,
                'clave' => '064',
                'nombre' => 'El Tule',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'estado_id' => 8,
                'clave' => '065',
                'nombre' => 'Urique',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'estado_id' => 8,
                'clave' => '066',
                'nombre' => 'Uruachi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'estado_id' => 8,
                'clave' => '067',
                'nombre' => 'Valle de Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'estado_id' => 9,
                'clave' => '002',
                'nombre' => 'Azcapotzalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'estado_id' => 9,
                'clave' => '003',
                'nombre' => 'Coyoacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'estado_id' => 9,
                'clave' => '004',
                'nombre' => 'Cuajimalpa de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'estado_id' => 9,
                'clave' => '005',
                'nombre' => 'Gustavo A. Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'estado_id' => 9,
                'clave' => '006',
                'nombre' => 'Iztacalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'estado_id' => 9,
                'clave' => '007',
                'nombre' => 'Iztapalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'estado_id' => 9,
                'clave' => '008',
                'nombre' => 'La Magdalena Contreras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'estado_id' => 9,
                'clave' => '009',
                'nombre' => 'Milpa Alta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'estado_id' => 9,
                'clave' => '010',
                'nombre' => 'Álvaro Obregón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'estado_id' => 9,
                'clave' => '011',
                'nombre' => 'Tláhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'estado_id' => 9,
                'clave' => '012',
                'nombre' => 'Tlalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'estado_id' => 9,
                'clave' => '013',
                'nombre' => 'Xochimilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'estado_id' => 9,
                'clave' => '014',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'estado_id' => 9,
                'clave' => '015',
                'nombre' => 'Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'estado_id' => 9,
                'clave' => '016',
                'nombre' => 'Miguel Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'estado_id' => 9,
                'clave' => '017',
                'nombre' => 'Venustiano Carranza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'estado_id' => 10,
                'clave' => '001',
                'nombre' => 'Canatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'estado_id' => 10,
                'clave' => '002',
                'nombre' => 'Canelas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'estado_id' => 10,
                'clave' => '003',
                'nombre' => 'Coneto de Comonfort',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'estado_id' => 10,
                'clave' => '004',
                'nombre' => 'Cuencamé',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'estado_id' => 10,
                'clave' => '005',
                'nombre' => 'Durango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'estado_id' => 10,
                'clave' => '006',
                'nombre' => 'General Simón Bolívar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'estado_id' => 10,
                'clave' => '007',
                'nombre' => 'Gómez Palacio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'estado_id' => 10,
                'clave' => '008',
                'nombre' => 'Guadalupe Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'estado_id' => 10,
                'clave' => '009',
                'nombre' => 'Guanaceví',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'estado_id' => 10,
                'clave' => '010',
                'nombre' => 'Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'estado_id' => 10,
                'clave' => '011',
                'nombre' => 'Indé',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'estado_id' => 10,
                'clave' => '012',
                'nombre' => 'Lerdo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'estado_id' => 10,
                'clave' => '013',
                'nombre' => 'Mapimí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'estado_id' => 10,
                'clave' => '014',
                'nombre' => 'Mezquital',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'estado_id' => 10,
                'clave' => '015',
                'nombre' => 'Nazas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'estado_id' => 10,
                'clave' => '016',
                'nombre' => 'Nombre de Dios',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'estado_id' => 10,
                'clave' => '017',
                'nombre' => 'Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'estado_id' => 10,
                'clave' => '018',
                'nombre' => 'El Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'estado_id' => 10,
                'clave' => '019',
                'nombre' => 'Otáez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'estado_id' => 10,
                'clave' => '020',
                'nombre' => 'Pánuco de Coronado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'estado_id' => 10,
                'clave' => '021',
                'nombre' => 'Peñón Blanco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'estado_id' => 10,
                'clave' => '022',
                'nombre' => 'Poanas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'estado_id' => 10,
                'clave' => '023',
                'nombre' => 'Pueblo Nuevo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'estado_id' => 10,
                'clave' => '024',
                'nombre' => 'Rodeo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'estado_id' => 10,
                'clave' => '025',
                'nombre' => 'San Bernardo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'estado_id' => 10,
                'clave' => '026',
                'nombre' => 'San Dimas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'estado_id' => 10,
                'clave' => '027',
                'nombre' => 'San Juan de Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'estado_id' => 10,
                'clave' => '028',
                'nombre' => 'San Juan del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'estado_id' => 10,
                'clave' => '029',
                'nombre' => 'San Luis del Cordero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'estado_id' => 10,
                'clave' => '030',
                'nombre' => 'San Pedro del Gallo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'estado_id' => 10,
                'clave' => '031',
                'nombre' => 'Santa Clara',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'estado_id' => 10,
                'clave' => '032',
                'nombre' => 'Santiago Papasquiaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'estado_id' => 10,
                'clave' => '033',
                'nombre' => 'Súchil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'estado_id' => 10,
                'clave' => '034',
                'nombre' => 'Tamazula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'estado_id' => 10,
                'clave' => '035',
                'nombre' => 'Tepehuanes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'estado_id' => 10,
                'clave' => '036',
                'nombre' => 'Tlahualilo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'estado_id' => 10,
                'clave' => '037',
                'nombre' => 'Topia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'estado_id' => 10,
                'clave' => '038',
                'nombre' => 'Vicente Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'estado_id' => 10,
                'clave' => '039',
                'nombre' => 'Nuevo Ideal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'estado_id' => 11,
                'clave' => '001',
                'nombre' => 'Abasolo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'estado_id' => 11,
                'clave' => '002',
                'nombre' => 'Acámbaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'estado_id' => 11,
                'clave' => '003',
                'nombre' => 'San Miguel de Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'estado_id' => 11,
                'clave' => '004',
                'nombre' => 'Apaseo el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'estado_id' => 11,
                'clave' => '005',
                'nombre' => 'Apaseo el Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'estado_id' => 11,
                'clave' => '006',
                'nombre' => 'Atarjea',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'estado_id' => 11,
                'clave' => '007',
                'nombre' => 'Celaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'estado_id' => 11,
                'clave' => '008',
                'nombre' => 'Manuel Doblado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'estado_id' => 11,
                'clave' => '009',
                'nombre' => 'Comonfort',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'estado_id' => 11,
                'clave' => '010',
                'nombre' => 'Coroneo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'estado_id' => 11,
                'clave' => '011',
                'nombre' => 'Cortazar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'estado_id' => 11,
                'clave' => '012',
                'nombre' => 'Cuerámaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'estado_id' => 11,
                'clave' => '013',
                'nombre' => 'Doctor Mora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'estado_id' => 11,
                'clave' => '014',
                'nombre' => 'Dolores Hidalgo Cuna de la Independencia Nacional',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'estado_id' => 11,
                'clave' => '015',
                'nombre' => 'Guanajuato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'estado_id' => 11,
                'clave' => '016',
                'nombre' => 'Huanímaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'estado_id' => 11,
                'clave' => '017',
                'nombre' => 'Irapuato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'estado_id' => 11,
                'clave' => '018',
                'nombre' => 'Jaral del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'estado_id' => 11,
                'clave' => '019',
                'nombre' => 'Jerécuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'estado_id' => 11,
                'clave' => '020',
                'nombre' => 'León',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'estado_id' => 11,
                'clave' => '021',
                'nombre' => 'Moroleón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'estado_id' => 11,
                'clave' => '022',
                'nombre' => 'Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'estado_id' => 11,
                'clave' => '023',
                'nombre' => 'Pénjamo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'estado_id' => 11,
                'clave' => '024',
                'nombre' => 'Pueblo Nuevo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'estado_id' => 11,
                'clave' => '025',
                'nombre' => 'Purísima del Rincón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'estado_id' => 11,
                'clave' => '026',
                'nombre' => 'Romita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'estado_id' => 11,
                'clave' => '027',
                'nombre' => 'Salamanca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'estado_id' => 11,
                'clave' => '028',
                'nombre' => 'Salvatierra',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'estado_id' => 11,
                'clave' => '029',
                'nombre' => 'San Diego de la Unión',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'estado_id' => 11,
                'clave' => '030',
                'nombre' => 'San Felipe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'estado_id' => 11,
                'clave' => '031',
                'nombre' => 'San Francisco del Rincón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'estado_id' => 11,
                'clave' => '032',
                'nombre' => 'San José Iturbide',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'estado_id' => 11,
                'clave' => '033',
                'nombre' => 'San Luis de la Paz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'estado_id' => 11,
                'clave' => '034',
                'nombre' => 'Santa Catarina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'estado_id' => 11,
                'clave' => '035',
                'nombre' => 'Santa Cruz de Juventino Rosas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'estado_id' => 11,
                'clave' => '036',
                'nombre' => 'Santiago Maravatío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'estado_id' => 11,
                'clave' => '037',
                'nombre' => 'Silao de la Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'estado_id' => 11,
                'clave' => '038',
                'nombre' => 'Tarandacuao',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'estado_id' => 11,
                'clave' => '039',
                'nombre' => 'Tarimoro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'estado_id' => 11,
                'clave' => '040',
                'nombre' => 'Tierra Blanca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'estado_id' => 11,
                'clave' => '041',
                'nombre' => 'Uriangato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'estado_id' => 11,
                'clave' => '042',
                'nombre' => 'Valle de Santiago',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'estado_id' => 11,
                'clave' => '043',
                'nombre' => 'Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'estado_id' => 11,
                'clave' => '044',
                'nombre' => 'Villagrán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'estado_id' => 11,
                'clave' => '045',
                'nombre' => 'Xichú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'estado_id' => 11,
                'clave' => '046',
                'nombre' => 'Yuriria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'estado_id' => 12,
                'clave' => '001',
                'nombre' => 'Acapulco de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'estado_id' => 12,
                'clave' => '002',
                'nombre' => 'Ahuacuotzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'estado_id' => 12,
                'clave' => '003',
                'nombre' => 'Ajuchitlán del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'estado_id' => 12,
                'clave' => '004',
                'nombre' => 'Alcozauca de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'estado_id' => 12,
                'clave' => '005',
                'nombre' => 'Alpoyeca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'estado_id' => 12,
                'clave' => '006',
                'nombre' => 'Apaxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'estado_id' => 12,
                'clave' => '007',
                'nombre' => 'Arcelia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'estado_id' => 12,
                'clave' => '008',
                'nombre' => 'Atenango del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'estado_id' => 12,
                'clave' => '009',
                'nombre' => 'Atlamajalcingo del Monte',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'estado_id' => 12,
                'clave' => '010',
                'nombre' => 'Atlixtac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'estado_id' => 12,
                'clave' => '011',
                'nombre' => 'Atoyac de Álvarez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'estado_id' => 12,
                'clave' => '012',
                'nombre' => 'Ayutla de los Libres',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'estado_id' => 12,
                'clave' => '013',
                'nombre' => 'Azoyú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'estado_id' => 12,
                'clave' => '014',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'estado_id' => 12,
                'clave' => '015',
                'nombre' => 'Buenavista de Cuéllar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'estado_id' => 12,
                'clave' => '016',
                'nombre' => 'Coahuayutla de José María Izazaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'estado_id' => 12,
                'clave' => '017',
                'nombre' => 'Cocula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'estado_id' => 12,
                'clave' => '018',
                'nombre' => 'Copala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'estado_id' => 12,
                'clave' => '019',
                'nombre' => 'Copalillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'estado_id' => 12,
                'clave' => '020',
                'nombre' => 'Copanatoyac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'estado_id' => 12,
                'clave' => '021',
                'nombre' => 'Coyuca de Benítez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'estado_id' => 12,
                'clave' => '022',
                'nombre' => 'Coyuca de Catalán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'estado_id' => 12,
                'clave' => '023',
                'nombre' => 'Cuajinicuilapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'estado_id' => 12,
                'clave' => '024',
                'nombre' => 'Cualác',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'estado_id' => 12,
                'clave' => '025',
                'nombre' => 'Cuautepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'estado_id' => 12,
                'clave' => '026',
                'nombre' => 'Cuetzala del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'estado_id' => 12,
                'clave' => '027',
                'nombre' => 'Cutzamala de Pinzón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'estado_id' => 12,
                'clave' => '028',
                'nombre' => 'Chilapa de Álvarez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'estado_id' => 12,
                'clave' => '029',
                'nombre' => 'Chilpancingo de los Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'estado_id' => 12,
                'clave' => '030',
                'nombre' => 'Florencio Villarreal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'estado_id' => 12,
                'clave' => '031',
                'nombre' => 'General Canuto A. Neri',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'estado_id' => 12,
                'clave' => '032',
                'nombre' => 'General Heliodoro Castillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'estado_id' => 12,
                'clave' => '033',
                'nombre' => 'Huamuxtitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'estado_id' => 12,
                'clave' => '034',
                'nombre' => 'Huitzuco de los Figueroa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'estado_id' => 12,
                'clave' => '035',
                'nombre' => 'Iguala de la Independencia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'estado_id' => 12,
                'clave' => '036',
                'nombre' => 'Igualapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'estado_id' => 12,
                'clave' => '037',
                'nombre' => 'Ixcateopan de Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'estado_id' => 12,
                'clave' => '038',
                'nombre' => 'Zihuatanejo de Azueta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'estado_id' => 12,
                'clave' => '039',
                'nombre' => 'Juan R. Escudero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'estado_id' => 12,
                'clave' => '040',
                'nombre' => 'Leonardo Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'estado_id' => 12,
                'clave' => '041',
                'nombre' => 'Malinaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'estado_id' => 12,
                'clave' => '042',
                'nombre' => 'Mártir de Cuilapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'estado_id' => 12,
                'clave' => '043',
                'nombre' => 'Metlatónoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'estado_id' => 12,
                'clave' => '044',
                'nombre' => 'Mochitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'estado_id' => 12,
                'clave' => '045',
                'nombre' => 'Olinalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'estado_id' => 12,
                'clave' => '046',
                'nombre' => 'Ometepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'estado_id' => 12,
                'clave' => '047',
                'nombre' => 'Pedro Ascencio Alquisiras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'estado_id' => 12,
                'clave' => '048',
                'nombre' => 'Petatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'estado_id' => 12,
                'clave' => '049',
                'nombre' => 'Pilcaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'estado_id' => 12,
                'clave' => '050',
                'nombre' => 'Pungarabato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'estado_id' => 12,
                'clave' => '051',
                'nombre' => 'Quechultenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'estado_id' => 12,
                'clave' => '052',
                'nombre' => 'San Luis Acatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'estado_id' => 12,
                'clave' => '053',
                'nombre' => 'San Marcos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'estado_id' => 12,
                'clave' => '054',
                'nombre' => 'San Miguel Totolapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'estado_id' => 12,
                'clave' => '055',
                'nombre' => 'Taxco de Alarcón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'estado_id' => 12,
                'clave' => '056',
                'nombre' => 'Tecoanapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'estado_id' => 12,
                'clave' => '057',
                'nombre' => 'Técpan de Galeana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'estado_id' => 12,
                'clave' => '058',
                'nombre' => 'Teloloapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'estado_id' => 12,
                'clave' => '059',
                'nombre' => 'Tepecoacuilco de Trujano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'estado_id' => 12,
                'clave' => '060',
                'nombre' => 'Tetipac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'estado_id' => 12,
                'clave' => '061',
                'nombre' => 'Tixtla de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'estado_id' => 12,
                'clave' => '062',
                'nombre' => 'Tlacoachistlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'estado_id' => 12,
                'clave' => '063',
                'nombre' => 'Tlacoapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'estado_id' => 12,
                'clave' => '064',
                'nombre' => 'Tlalchapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'estado_id' => 12,
                'clave' => '065',
                'nombre' => 'Tlalixtaquilla de Maldonado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'estado_id' => 12,
                'clave' => '066',
                'nombre' => 'Tlapa de Comonfort',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'estado_id' => 12,
                'clave' => '067',
                'nombre' => 'Tlapehuala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'estado_id' => 12,
                'clave' => '068',
                'nombre' => 'La Unión de Isidoro Montes de Oca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'estado_id' => 12,
                'clave' => '069',
                'nombre' => 'Xalpatláhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'estado_id' => 12,
                'clave' => '070',
                'nombre' => 'Xochihuehuetlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'estado_id' => 12,
                'clave' => '071',
                'nombre' => 'Xochistlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'estado_id' => 12,
                'clave' => '072',
                'nombre' => 'Zapotitlán Tablas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'estado_id' => 12,
                'clave' => '073',
                'nombre' => 'Zirándaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'estado_id' => 12,
                'clave' => '074',
                'nombre' => 'Zitlala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'estado_id' => 12,
                'clave' => '075',
                'nombre' => 'Eduardo Neri',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'estado_id' => 12,
                'clave' => '076',
                'nombre' => 'Acatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'estado_id' => 12,
                'clave' => '077',
                'nombre' => 'Marquelia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'estado_id' => 12,
                'clave' => '078',
                'nombre' => 'Cochoapa el Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'estado_id' => 12,
                'clave' => '079',
                'nombre' => 'José Joaquín de Herrera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'estado_id' => 12,
                'clave' => '080',
                'nombre' => 'Juchitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'estado_id' => 12,
                'clave' => '081',
                'nombre' => 'Iliatenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'estado_id' => 13,
                'clave' => '001',
                'nombre' => 'Acatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'estado_id' => 13,
                'clave' => '002',
                'nombre' => 'Acaxochitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'estado_id' => 13,
                'clave' => '003',
                'nombre' => 'Actopan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'estado_id' => 13,
                'clave' => '004',
                'nombre' => 'Agua Blanca de Iturbide',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'estado_id' => 13,
                'clave' => '005',
                'nombre' => 'Ajacuba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'estado_id' => 13,
                'clave' => '006',
                'nombre' => 'Alfajayucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'estado_id' => 13,
                'clave' => '007',
                'nombre' => 'Almoloya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'estado_id' => 13,
                'clave' => '008',
                'nombre' => 'Apan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'estado_id' => 13,
                'clave' => '009',
                'nombre' => 'El Arenal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'estado_id' => 13,
                'clave' => '010',
                'nombre' => 'Atitalaquia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'estado_id' => 13,
                'clave' => '011',
                'nombre' => 'Atlapexco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'estado_id' => 13,
                'clave' => '012',
                'nombre' => 'Atotonilco el Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'estado_id' => 13,
                'clave' => '013',
                'nombre' => 'Atotonilco de Tula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'estado_id' => 13,
                'clave' => '014',
                'nombre' => 'Calnali',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'estado_id' => 13,
                'clave' => '015',
                'nombre' => 'Cardonal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'estado_id' => 13,
                'clave' => '016',
                'nombre' => 'Cuautepec de Hinojosa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'estado_id' => 13,
                'clave' => '017',
                'nombre' => 'Chapantongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'estado_id' => 13,
                'clave' => '018',
                'nombre' => 'Chapulhuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'estado_id' => 13,
                'clave' => '019',
                'nombre' => 'Chilcuautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'estado_id' => 13,
                'clave' => '020',
                'nombre' => 'Eloxochitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'estado_id' => 13,
                'clave' => '021',
                'nombre' => 'Emiliano Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'estado_id' => 13,
                'clave' => '022',
                'nombre' => 'Epazoyucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'estado_id' => 13,
                'clave' => '023',
                'nombre' => 'Francisco I. Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'estado_id' => 13,
                'clave' => '024',
                'nombre' => 'Huasca de Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'estado_id' => 13,
                'clave' => '025',
                'nombre' => 'Huautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'estado_id' => 13,
                'clave' => '026',
                'nombre' => 'Huazalingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'estado_id' => 13,
                'clave' => '027',
                'nombre' => 'Huehuetla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'estado_id' => 13,
                'clave' => '028',
                'nombre' => 'Huejutla de Reyes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'estado_id' => 13,
                'clave' => '029',
                'nombre' => 'Huichapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'estado_id' => 13,
                'clave' => '030',
                'nombre' => 'Ixmiquilpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'estado_id' => 13,
                'clave' => '031',
                'nombre' => 'Jacala de Ledezma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'estado_id' => 13,
                'clave' => '032',
                'nombre' => 'Jaltocán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'estado_id' => 13,
                'clave' => '033',
                'nombre' => 'Juárez Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'estado_id' => 13,
                'clave' => '034',
                'nombre' => 'Lolotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'estado_id' => 13,
                'clave' => '035',
                'nombre' => 'Metepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'estado_id' => 13,
                'clave' => '036',
                'nombre' => 'San Agustín Metzquititlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'estado_id' => 13,
                'clave' => '037',
                'nombre' => 'Metztitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'estado_id' => 13,
                'clave' => '038',
                'nombre' => 'Mineral del Chico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'estado_id' => 13,
                'clave' => '039',
                'nombre' => 'Mineral del Monte',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'estado_id' => 13,
                'clave' => '040',
                'nombre' => 'La Misión',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'estado_id' => 13,
                'clave' => '041',
                'nombre' => 'Mixquiahuala de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'estado_id' => 13,
                'clave' => '042',
                'nombre' => 'Molango de Escamilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'estado_id' => 13,
                'clave' => '043',
                'nombre' => 'Nicolás Flores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'estado_id' => 13,
                'clave' => '044',
                'nombre' => 'Nopala de Villagrán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'estado_id' => 13,
                'clave' => '045',
                'nombre' => 'Omitlán de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'estado_id' => 13,
                'clave' => '046',
                'nombre' => 'San Felipe Orizatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'estado_id' => 13,
                'clave' => '047',
                'nombre' => 'Pacula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'estado_id' => 13,
                'clave' => '048',
                'nombre' => 'Pachuca de Soto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cat_municipios')->insert(array (
            0 => 
            array (
                'id' => 501,
                'estado_id' => 13,
                'clave' => '049',
                'nombre' => 'Pisaflores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'estado_id' => 13,
                'clave' => '050',
                'nombre' => 'Progreso de Obregón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'estado_id' => 13,
                'clave' => '051',
                'nombre' => 'Mineral de la Reforma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'estado_id' => 13,
                'clave' => '052',
                'nombre' => 'San Agustín Tlaxiaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'estado_id' => 13,
                'clave' => '053',
                'nombre' => 'San Bartolo Tutotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'estado_id' => 13,
                'clave' => '054',
                'nombre' => 'San Salvador',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'estado_id' => 13,
                'clave' => '055',
                'nombre' => 'Santiago de Anaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'estado_id' => 13,
                'clave' => '056',
                'nombre' => 'Santiago Tulantepec de Lugo Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'estado_id' => 13,
                'clave' => '057',
                'nombre' => 'Singuilucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'estado_id' => 13,
                'clave' => '058',
                'nombre' => 'Tasquillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'estado_id' => 13,
                'clave' => '059',
                'nombre' => 'Tecozautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'estado_id' => 13,
                'clave' => '060',
                'nombre' => 'Tenango de Doria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'estado_id' => 13,
                'clave' => '061',
                'nombre' => 'Tepeapulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'estado_id' => 13,
                'clave' => '062',
                'nombre' => 'Tepehuacán de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'estado_id' => 13,
                'clave' => '063',
                'nombre' => 'Tepeji del Río de Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'estado_id' => 13,
                'clave' => '064',
                'nombre' => 'Tepetitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'estado_id' => 13,
                'clave' => '065',
                'nombre' => 'Tetepango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'estado_id' => 13,
                'clave' => '066',
                'nombre' => 'Villa de Tezontepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'estado_id' => 13,
                'clave' => '067',
                'nombre' => 'Tezontepec de Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'estado_id' => 13,
                'clave' => '068',
                'nombre' => 'Tianguistengo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'estado_id' => 13,
                'clave' => '069',
                'nombre' => 'Tizayuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'estado_id' => 13,
                'clave' => '070',
                'nombre' => 'Tlahuelilpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'estado_id' => 13,
                'clave' => '071',
                'nombre' => 'Tlahuiltepa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'estado_id' => 13,
                'clave' => '072',
                'nombre' => 'Tlanalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'estado_id' => 13,
                'clave' => '073',
                'nombre' => 'Tlanchinol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'estado_id' => 13,
                'clave' => '074',
                'nombre' => 'Tlaxcoapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'estado_id' => 13,
                'clave' => '075',
                'nombre' => 'Tolcayuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'estado_id' => 13,
                'clave' => '076',
                'nombre' => 'Tula de Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'estado_id' => 13,
                'clave' => '077',
                'nombre' => 'Tulancingo de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'estado_id' => 13,
                'clave' => '078',
                'nombre' => 'Xochiatipan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'estado_id' => 13,
                'clave' => '079',
                'nombre' => 'Xochicoatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'estado_id' => 13,
                'clave' => '080',
                'nombre' => 'Yahualica',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'estado_id' => 13,
                'clave' => '081',
                'nombre' => 'Zacualtipán de Ángeles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'estado_id' => 13,
                'clave' => '082',
                'nombre' => 'Zapotlán de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'estado_id' => 13,
                'clave' => '083',
                'nombre' => 'Zempoala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'estado_id' => 13,
                'clave' => '084',
                'nombre' => 'Zimapán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'estado_id' => 14,
                'clave' => '001',
                'nombre' => 'Acatic',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'estado_id' => 14,
                'clave' => '002',
                'nombre' => 'Acatlán de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'estado_id' => 14,
                'clave' => '003',
                'nombre' => 'Ahualulco de Mercado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'estado_id' => 14,
                'clave' => '004',
                'nombre' => 'Amacueca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'estado_id' => 14,
                'clave' => '005',
                'nombre' => 'Amatitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'estado_id' => 14,
                'clave' => '006',
                'nombre' => 'Ameca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'estado_id' => 14,
                'clave' => '007',
                'nombre' => 'San Juanito de Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'estado_id' => 14,
                'clave' => '008',
                'nombre' => 'Arandas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'estado_id' => 14,
                'clave' => '009',
                'nombre' => 'El Arenal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'estado_id' => 14,
                'clave' => '010',
                'nombre' => 'Atemajac de Brizuela',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'estado_id' => 14,
                'clave' => '011',
                'nombre' => 'Atengo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'estado_id' => 14,
                'clave' => '012',
                'nombre' => 'Atenguillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'estado_id' => 14,
                'clave' => '013',
                'nombre' => 'Atotonilco el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'estado_id' => 14,
                'clave' => '014',
                'nombre' => 'Atoyac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'estado_id' => 14,
                'clave' => '015',
                'nombre' => 'Autlán de Navarro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'estado_id' => 14,
                'clave' => '016',
                'nombre' => 'Ayotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'estado_id' => 14,
                'clave' => '017',
                'nombre' => 'Ayutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'estado_id' => 14,
                'clave' => '018',
                'nombre' => 'La Barca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'estado_id' => 14,
                'clave' => '019',
                'nombre' => 'Bolaños',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'estado_id' => 14,
                'clave' => '020',
                'nombre' => 'Cabo Corrientes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'estado_id' => 14,
                'clave' => '021',
                'nombre' => 'Casimiro Castillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'estado_id' => 14,
                'clave' => '022',
                'nombre' => 'Cihuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'estado_id' => 14,
                'clave' => '023',
                'nombre' => 'Zapotlán el Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'estado_id' => 14,
                'clave' => '024',
                'nombre' => 'Cocula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'estado_id' => 14,
                'clave' => '025',
                'nombre' => 'Colotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'estado_id' => 14,
                'clave' => '026',
                'nombre' => 'Concepción de Buenos Aires',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'estado_id' => 14,
                'clave' => '027',
                'nombre' => 'Cuautitlán de García Barragán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'estado_id' => 14,
                'clave' => '028',
                'nombre' => 'Cuautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'estado_id' => 14,
                'clave' => '029',
                'nombre' => 'Cuquío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'estado_id' => 14,
                'clave' => '030',
                'nombre' => 'Chapala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'estado_id' => 14,
                'clave' => '031',
                'nombre' => 'Chimaltitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'estado_id' => 14,
                'clave' => '032',
                'nombre' => 'Chiquilistlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'estado_id' => 14,
                'clave' => '033',
                'nombre' => 'Degollado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'estado_id' => 14,
                'clave' => '034',
                'nombre' => 'Ejutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'estado_id' => 14,
                'clave' => '035',
                'nombre' => 'Encarnación de Díaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'estado_id' => 14,
                'clave' => '036',
                'nombre' => 'Etzatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'estado_id' => 14,
                'clave' => '037',
                'nombre' => 'El Grullo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'estado_id' => 14,
                'clave' => '038',
                'nombre' => 'Guachinango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'estado_id' => 14,
                'clave' => '039',
                'nombre' => 'Guadalajara',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'estado_id' => 14,
                'clave' => '040',
                'nombre' => 'Hostotipaquillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'estado_id' => 14,
                'clave' => '041',
                'nombre' => 'Huejúcar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'estado_id' => 14,
                'clave' => '042',
                'nombre' => 'Huejuquilla el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'estado_id' => 14,
                'clave' => '043',
                'nombre' => 'La Huerta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'estado_id' => 14,
                'clave' => '044',
                'nombre' => 'Ixtlahuacán de los Membrillos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'estado_id' => 14,
                'clave' => '045',
                'nombre' => 'Ixtlahuacán del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'estado_id' => 14,
                'clave' => '046',
                'nombre' => 'Jalostotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'estado_id' => 14,
                'clave' => '047',
                'nombre' => 'Jamay',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'estado_id' => 14,
                'clave' => '048',
                'nombre' => 'Jesús María',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'estado_id' => 14,
                'clave' => '049',
                'nombre' => 'Jilotlán de los Dolores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'estado_id' => 14,
                'clave' => '050',
                'nombre' => 'Jocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'estado_id' => 14,
                'clave' => '051',
                'nombre' => 'Juanacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'estado_id' => 14,
                'clave' => '052',
                'nombre' => 'Juchitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'estado_id' => 14,
                'clave' => '053',
                'nombre' => 'Lagos de Moreno',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'estado_id' => 14,
                'clave' => '054',
                'nombre' => 'El Limón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'estado_id' => 14,
                'clave' => '055',
                'nombre' => 'Magdalena',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'estado_id' => 14,
                'clave' => '056',
                'nombre' => 'Santa María del Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'estado_id' => 14,
                'clave' => '057',
                'nombre' => 'La Manzanilla de la Paz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'estado_id' => 14,
                'clave' => '058',
                'nombre' => 'Mascota',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'estado_id' => 14,
                'clave' => '059',
                'nombre' => 'Mazamitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'estado_id' => 14,
                'clave' => '060',
                'nombre' => 'Mexticacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'estado_id' => 14,
                'clave' => '061',
                'nombre' => 'Mezquitic',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'estado_id' => 14,
                'clave' => '062',
                'nombre' => 'Mixtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'estado_id' => 14,
                'clave' => '063',
                'nombre' => 'Ocotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'estado_id' => 14,
                'clave' => '064',
                'nombre' => 'Ojuelos de Jalisco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'estado_id' => 14,
                'clave' => '065',
                'nombre' => 'Pihuamo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'estado_id' => 14,
                'clave' => '066',
                'nombre' => 'Poncitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'estado_id' => 14,
                'clave' => '067',
                'nombre' => 'Puerto Vallarta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'estado_id' => 14,
                'clave' => '068',
                'nombre' => 'Villa Purificación',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'estado_id' => 14,
                'clave' => '069',
                'nombre' => 'Quitupan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'estado_id' => 14,
                'clave' => '070',
                'nombre' => 'El Salto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'estado_id' => 14,
                'clave' => '071',
                'nombre' => 'San Cristóbal de la Barranca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'estado_id' => 14,
                'clave' => '072',
                'nombre' => 'San Diego de Alejandría',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'estado_id' => 14,
                'clave' => '073',
                'nombre' => 'San Juan de los Lagos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'estado_id' => 14,
                'clave' => '074',
                'nombre' => 'San Julián',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'estado_id' => 14,
                'clave' => '075',
                'nombre' => 'San Marcos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'estado_id' => 14,
                'clave' => '076',
                'nombre' => 'San Martín de Bolaños',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'estado_id' => 14,
                'clave' => '077',
                'nombre' => 'San Martín Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'estado_id' => 14,
                'clave' => '078',
                'nombre' => 'San Miguel el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'estado_id' => 14,
                'clave' => '079',
                'nombre' => 'Gómez Farías',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'estado_id' => 14,
                'clave' => '080',
                'nombre' => 'San Sebastián del Oeste',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'estado_id' => 14,
                'clave' => '081',
                'nombre' => 'Santa María de los Ángeles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'estado_id' => 14,
                'clave' => '082',
                'nombre' => 'Sayula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'estado_id' => 14,
                'clave' => '083',
                'nombre' => 'Tala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'estado_id' => 14,
                'clave' => '084',
                'nombre' => 'Talpa de Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'estado_id' => 14,
                'clave' => '085',
                'nombre' => 'Tamazula de Gordiano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'estado_id' => 14,
                'clave' => '086',
                'nombre' => 'Tapalpa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'estado_id' => 14,
                'clave' => '087',
                'nombre' => 'Tecalitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'estado_id' => 14,
                'clave' => '088',
                'nombre' => 'Tecolotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'estado_id' => 14,
                'clave' => '089',
                'nombre' => 'Techaluta de Montenegro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'estado_id' => 14,
                'clave' => '090',
                'nombre' => 'Tenamaxtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'estado_id' => 14,
                'clave' => '091',
                'nombre' => 'Teocaltiche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'estado_id' => 14,
                'clave' => '092',
                'nombre' => 'Teocuitatlán de Corona',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'estado_id' => 14,
                'clave' => '093',
                'nombre' => 'Tepatitlán de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'estado_id' => 14,
                'clave' => '094',
                'nombre' => 'Tequila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'estado_id' => 14,
                'clave' => '095',
                'nombre' => 'Teuchitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'estado_id' => 14,
                'clave' => '096',
                'nombre' => 'Tizapán el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'estado_id' => 14,
                'clave' => '097',
                'nombre' => 'Tlajomulco de Zúñiga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'estado_id' => 14,
                'clave' => '098',
                'nombre' => 'San Pedro Tlaquepaque',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'estado_id' => 14,
                'clave' => '099',
                'nombre' => 'Tolimán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'estado_id' => 14,
                'clave' => '100',
                'nombre' => 'Tomatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'estado_id' => 14,
                'clave' => '101',
                'nombre' => 'Tonalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'estado_id' => 14,
                'clave' => '102',
                'nombre' => 'Tonaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'estado_id' => 14,
                'clave' => '103',
                'nombre' => 'Tonila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'estado_id' => 14,
                'clave' => '104',
                'nombre' => 'Totatiche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'estado_id' => 14,
                'clave' => '105',
                'nombre' => 'Tototlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'estado_id' => 14,
                'clave' => '106',
                'nombre' => 'Tuxcacuesco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'estado_id' => 14,
                'clave' => '107',
                'nombre' => 'Tuxcueca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'estado_id' => 14,
                'clave' => '108',
                'nombre' => 'Tuxpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'estado_id' => 14,
                'clave' => '109',
                'nombre' => 'Unión de San Antonio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'estado_id' => 14,
                'clave' => '110',
                'nombre' => 'Unión de Tula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'estado_id' => 14,
                'clave' => '111',
                'nombre' => 'Valle de Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'estado_id' => 14,
                'clave' => '112',
                'nombre' => 'Valle de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'estado_id' => 14,
                'clave' => '113',
                'nombre' => 'San Gabriel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'estado_id' => 14,
                'clave' => '114',
                'nombre' => 'Villa Corona',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'estado_id' => 14,
                'clave' => '115',
                'nombre' => 'Villa Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'estado_id' => 14,
                'clave' => '116',
                'nombre' => 'Villa Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'estado_id' => 14,
                'clave' => '117',
                'nombre' => 'Cañadas de Obregón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'estado_id' => 14,
                'clave' => '118',
                'nombre' => 'Yahualica de González Gallo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'estado_id' => 14,
                'clave' => '119',
                'nombre' => 'Zacoalco de Torres',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'estado_id' => 14,
                'clave' => '120',
                'nombre' => 'Zapopan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'estado_id' => 14,
                'clave' => '121',
                'nombre' => 'Zapotiltic',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'estado_id' => 14,
                'clave' => '122',
                'nombre' => 'Zapotitlán de Vadillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'estado_id' => 14,
                'clave' => '123',
                'nombre' => 'Zapotlán del Rey',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'estado_id' => 14,
                'clave' => '124',
                'nombre' => 'Zapotlanejo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'estado_id' => 14,
                'clave' => '125',
                'nombre' => 'San Ignacio Cerro Gordo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'estado_id' => 15,
                'clave' => '001',
                'nombre' => 'Acambay de Ruíz Castañeda',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'estado_id' => 15,
                'clave' => '002',
                'nombre' => 'Acolman',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'estado_id' => 15,
                'clave' => '003',
                'nombre' => 'Aculco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'estado_id' => 15,
                'clave' => '004',
                'nombre' => 'Almoloya de Alquisiras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'estado_id' => 15,
                'clave' => '005',
                'nombre' => 'Almoloya de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'estado_id' => 15,
                'clave' => '006',
                'nombre' => 'Almoloya del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'estado_id' => 15,
                'clave' => '007',
                'nombre' => 'Amanalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'estado_id' => 15,
                'clave' => '008',
                'nombre' => 'Amatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'estado_id' => 15,
                'clave' => '009',
                'nombre' => 'Amecameca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'estado_id' => 15,
                'clave' => '010',
                'nombre' => 'Apaxco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'estado_id' => 15,
                'clave' => '011',
                'nombre' => 'Atenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'estado_id' => 15,
                'clave' => '012',
                'nombre' => 'Atizapán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'estado_id' => 15,
                'clave' => '013',
                'nombre' => 'Atizapán de Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'estado_id' => 15,
                'clave' => '014',
                'nombre' => 'Atlacomulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'estado_id' => 15,
                'clave' => '015',
                'nombre' => 'Atlautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'estado_id' => 15,
                'clave' => '016',
                'nombre' => 'Axapusco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'estado_id' => 15,
                'clave' => '017',
                'nombre' => 'Ayapango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'estado_id' => 15,
                'clave' => '018',
                'nombre' => 'Calimaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'estado_id' => 15,
                'clave' => '019',
                'nombre' => 'Capulhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'estado_id' => 15,
                'clave' => '020',
                'nombre' => 'Coacalco de Berriozábal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'estado_id' => 15,
                'clave' => '021',
                'nombre' => 'Coatepec Harinas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'estado_id' => 15,
                'clave' => '022',
                'nombre' => 'Cocotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'estado_id' => 15,
                'clave' => '023',
                'nombre' => 'Coyotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'estado_id' => 15,
                'clave' => '024',
                'nombre' => 'Cuautitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'estado_id' => 15,
                'clave' => '025',
                'nombre' => 'Chalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'estado_id' => 15,
                'clave' => '026',
                'nombre' => 'Chapa de Mota',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'estado_id' => 15,
                'clave' => '027',
                'nombre' => 'Chapultepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'estado_id' => 15,
                'clave' => '028',
                'nombre' => 'Chiautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'estado_id' => 15,
                'clave' => '029',
                'nombre' => 'Chicoloapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'estado_id' => 15,
                'clave' => '030',
                'nombre' => 'Chiconcuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'estado_id' => 15,
                'clave' => '031',
                'nombre' => 'Chimalhuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'estado_id' => 15,
                'clave' => '032',
                'nombre' => 'Donato Guerra',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'estado_id' => 15,
                'clave' => '033',
                'nombre' => 'Ecatepec de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'estado_id' => 15,
                'clave' => '034',
                'nombre' => 'Ecatzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'estado_id' => 15,
                'clave' => '035',
                'nombre' => 'Huehuetoca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'estado_id' => 15,
                'clave' => '036',
                'nombre' => 'Hueypoxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'estado_id' => 15,
                'clave' => '037',
                'nombre' => 'Huixquilucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'estado_id' => 15,
                'clave' => '038',
                'nombre' => 'Isidro Fabela',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'estado_id' => 15,
                'clave' => '039',
                'nombre' => 'Ixtapaluca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'estado_id' => 15,
                'clave' => '040',
                'nombre' => 'Ixtapan de la Sal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'estado_id' => 15,
                'clave' => '041',
                'nombre' => 'Ixtapan del Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'estado_id' => 15,
                'clave' => '042',
                'nombre' => 'Ixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'estado_id' => 15,
                'clave' => '043',
                'nombre' => 'Xalatlaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'estado_id' => 15,
                'clave' => '044',
                'nombre' => 'Jaltenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'estado_id' => 15,
                'clave' => '045',
                'nombre' => 'Jilotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'estado_id' => 15,
                'clave' => '046',
                'nombre' => 'Jilotzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'estado_id' => 15,
                'clave' => '047',
                'nombre' => 'Jiquipilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'estado_id' => 15,
                'clave' => '048',
                'nombre' => 'Jocotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'estado_id' => 15,
                'clave' => '049',
                'nombre' => 'Joquicingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'estado_id' => 15,
                'clave' => '050',
                'nombre' => 'Juchitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'estado_id' => 15,
                'clave' => '051',
                'nombre' => 'Lerma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'estado_id' => 15,
                'clave' => '052',
                'nombre' => 'Malinalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'estado_id' => 15,
                'clave' => '053',
                'nombre' => 'Melchor Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'estado_id' => 15,
                'clave' => '054',
                'nombre' => 'Metepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'estado_id' => 15,
                'clave' => '055',
                'nombre' => 'Mexicaltzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'estado_id' => 15,
                'clave' => '056',
                'nombre' => 'Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'estado_id' => 15,
                'clave' => '057',
                'nombre' => 'Naucalpan de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'estado_id' => 15,
                'clave' => '058',
                'nombre' => 'Nezahualcóyotl',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'estado_id' => 15,
                'clave' => '059',
                'nombre' => 'Nextlalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'estado_id' => 15,
                'clave' => '060',
                'nombre' => 'Nicolás Romero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'estado_id' => 15,
                'clave' => '061',
                'nombre' => 'Nopaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'estado_id' => 15,
                'clave' => '062',
                'nombre' => 'Ocoyoacac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'estado_id' => 15,
                'clave' => '063',
                'nombre' => 'Ocuilan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'estado_id' => 15,
                'clave' => '064',
                'nombre' => 'El Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'estado_id' => 15,
                'clave' => '065',
                'nombre' => 'Otumba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'estado_id' => 15,
                'clave' => '066',
                'nombre' => 'Otzoloapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'estado_id' => 15,
                'clave' => '067',
                'nombre' => 'Otzolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'estado_id' => 15,
                'clave' => '068',
                'nombre' => 'Ozumba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'estado_id' => 15,
                'clave' => '069',
                'nombre' => 'Papalotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'estado_id' => 15,
                'clave' => '070',
                'nombre' => 'La Paz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'estado_id' => 15,
                'clave' => '071',
                'nombre' => 'Polotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'estado_id' => 15,
                'clave' => '072',
                'nombre' => 'Rayón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'estado_id' => 15,
                'clave' => '073',
                'nombre' => 'San Antonio la Isla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'estado_id' => 15,
                'clave' => '074',
                'nombre' => 'San Felipe del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'estado_id' => 15,
                'clave' => '075',
                'nombre' => 'San Martín de las Pirámides',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'estado_id' => 15,
                'clave' => '076',
                'nombre' => 'San Mateo Atenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'estado_id' => 15,
                'clave' => '077',
                'nombre' => 'San Simón de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'estado_id' => 15,
                'clave' => '078',
                'nombre' => 'Santo Tomás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'estado_id' => 15,
                'clave' => '079',
                'nombre' => 'Soyaniquilpan de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'estado_id' => 15,
                'clave' => '080',
                'nombre' => 'Sultepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'estado_id' => 15,
                'clave' => '081',
                'nombre' => 'Tecámac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'estado_id' => 15,
                'clave' => '082',
                'nombre' => 'Tejupilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'estado_id' => 15,
                'clave' => '083',
                'nombre' => 'Temamatla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'estado_id' => 15,
                'clave' => '084',
                'nombre' => 'Temascalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'estado_id' => 15,
                'clave' => '085',
                'nombre' => 'Temascalcingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'estado_id' => 15,
                'clave' => '086',
                'nombre' => 'Temascaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'estado_id' => 15,
                'clave' => '087',
                'nombre' => 'Temoaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'estado_id' => 15,
                'clave' => '088',
                'nombre' => 'Tenancingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'estado_id' => 15,
                'clave' => '089',
                'nombre' => 'Tenango del Aire',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'estado_id' => 15,
                'clave' => '090',
                'nombre' => 'Tenango del Valle',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'estado_id' => 15,
                'clave' => '091',
                'nombre' => 'Teoloyucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'estado_id' => 15,
                'clave' => '092',
                'nombre' => 'Teotihuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'estado_id' => 15,
                'clave' => '093',
                'nombre' => 'Tepetlaoxtoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'estado_id' => 15,
                'clave' => '094',
                'nombre' => 'Tepetlixpa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'estado_id' => 15,
                'clave' => '095',
                'nombre' => 'Tepotzotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'estado_id' => 15,
                'clave' => '096',
                'nombre' => 'Tequixquiac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'estado_id' => 15,
                'clave' => '097',
                'nombre' => 'Texcaltitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'estado_id' => 15,
                'clave' => '098',
                'nombre' => 'Texcalyacac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'estado_id' => 15,
                'clave' => '099',
                'nombre' => 'Texcoco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'estado_id' => 15,
                'clave' => '100',
                'nombre' => 'Tezoyuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'estado_id' => 15,
                'clave' => '101',
                'nombre' => 'Tianguistenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'estado_id' => 15,
                'clave' => '102',
                'nombre' => 'Timilpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'estado_id' => 15,
                'clave' => '103',
                'nombre' => 'Tlalmanalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'estado_id' => 15,
                'clave' => '104',
                'nombre' => 'Tlalnepantla de Baz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'estado_id' => 15,
                'clave' => '105',
                'nombre' => 'Tlatlaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'estado_id' => 15,
                'clave' => '106',
                'nombre' => 'Toluca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'estado_id' => 15,
                'clave' => '107',
                'nombre' => 'Tonatico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'estado_id' => 15,
                'clave' => '108',
                'nombre' => 'Tultepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'estado_id' => 15,
                'clave' => '109',
                'nombre' => 'Tultitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'estado_id' => 15,
                'clave' => '110',
                'nombre' => 'Valle de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'estado_id' => 15,
                'clave' => '111',
                'nombre' => 'Villa de Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'estado_id' => 15,
                'clave' => '112',
                'nombre' => 'Villa del Carbón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'estado_id' => 15,
                'clave' => '113',
                'nombre' => 'Villa Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'estado_id' => 15,
                'clave' => '114',
                'nombre' => 'Villa Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'estado_id' => 15,
                'clave' => '115',
                'nombre' => 'Xonacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'estado_id' => 15,
                'clave' => '116',
                'nombre' => 'Zacazonapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'estado_id' => 15,
                'clave' => '117',
                'nombre' => 'Zacualpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'estado_id' => 15,
                'clave' => '118',
                'nombre' => 'Zinacantepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'estado_id' => 15,
                'clave' => '119',
                'nombre' => 'Zumpahuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'estado_id' => 15,
                'clave' => '120',
                'nombre' => 'Zumpango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'estado_id' => 15,
                'clave' => '121',
                'nombre' => 'Cuautitlán Izcalli',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'estado_id' => 15,
                'clave' => '122',
                'nombre' => 'Valle de Chalco Solidaridad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'estado_id' => 15,
                'clave' => '123',
                'nombre' => 'Luvianos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'estado_id' => 15,
                'clave' => '124',
                'nombre' => 'San José del Rincón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'estado_id' => 15,
                'clave' => '125',
                'nombre' => 'Tonanitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'estado_id' => 16,
                'clave' => '001',
                'nombre' => 'Acuitzio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'estado_id' => 16,
                'clave' => '002',
                'nombre' => 'Aguililla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'estado_id' => 16,
                'clave' => '003',
                'nombre' => 'Álvaro Obregón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'estado_id' => 16,
                'clave' => '004',
                'nombre' => 'Angamacutiro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'estado_id' => 16,
                'clave' => '005',
                'nombre' => 'Angangueo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'estado_id' => 16,
                'clave' => '006',
                'nombre' => 'Apatzingán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'estado_id' => 16,
                'clave' => '007',
                'nombre' => 'Aporo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'estado_id' => 16,
                'clave' => '008',
                'nombre' => 'Aquila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'estado_id' => 16,
                'clave' => '009',
                'nombre' => 'Ario',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'estado_id' => 16,
                'clave' => '010',
                'nombre' => 'Arteaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'estado_id' => 16,
                'clave' => '011',
                'nombre' => 'Briseñas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'estado_id' => 16,
                'clave' => '012',
                'nombre' => 'Buenavista',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'estado_id' => 16,
                'clave' => '013',
                'nombre' => 'Carácuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'estado_id' => 16,
                'clave' => '014',
                'nombre' => 'Coahuayana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'estado_id' => 16,
                'clave' => '015',
                'nombre' => 'Coalcomán de Vázquez Pallares',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'estado_id' => 16,
                'clave' => '016',
                'nombre' => 'Coeneo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'estado_id' => 16,
                'clave' => '017',
                'nombre' => 'Contepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'estado_id' => 16,
                'clave' => '018',
                'nombre' => 'Copándaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'estado_id' => 16,
                'clave' => '019',
                'nombre' => 'Cotija',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'estado_id' => 16,
                'clave' => '020',
                'nombre' => 'Cuitzeo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'estado_id' => 16,
                'clave' => '021',
                'nombre' => 'Charapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'estado_id' => 16,
                'clave' => '022',
                'nombre' => 'Charo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'estado_id' => 16,
                'clave' => '023',
                'nombre' => 'Chavinda',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'estado_id' => 16,
                'clave' => '024',
                'nombre' => 'Cherán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'estado_id' => 16,
                'clave' => '025',
                'nombre' => 'Chilchota',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'estado_id' => 16,
                'clave' => '026',
                'nombre' => 'Chinicuila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'estado_id' => 16,
                'clave' => '027',
                'nombre' => 'Chucándiro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'estado_id' => 16,
                'clave' => '028',
                'nombre' => 'Churintzio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'estado_id' => 16,
                'clave' => '029',
                'nombre' => 'Churumuco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'estado_id' => 16,
                'clave' => '030',
                'nombre' => 'Ecuandureo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'estado_id' => 16,
                'clave' => '031',
                'nombre' => 'Epitacio Huerta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'estado_id' => 16,
                'clave' => '032',
                'nombre' => 'Erongarícuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'estado_id' => 16,
                'clave' => '033',
                'nombre' => 'Gabriel Zamora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'estado_id' => 16,
                'clave' => '034',
                'nombre' => 'Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'estado_id' => 16,
                'clave' => '035',
                'nombre' => 'La Huacana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'estado_id' => 16,
                'clave' => '036',
                'nombre' => 'Huandacareo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'estado_id' => 16,
                'clave' => '037',
                'nombre' => 'Huaniqueo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'estado_id' => 16,
                'clave' => '038',
                'nombre' => 'Huetamo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'estado_id' => 16,
                'clave' => '039',
                'nombre' => 'Huiramba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'estado_id' => 16,
                'clave' => '040',
                'nombre' => 'Indaparapeo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'estado_id' => 16,
                'clave' => '041',
                'nombre' => 'Irimbo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'estado_id' => 16,
                'clave' => '042',
                'nombre' => 'Ixtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'estado_id' => 16,
                'clave' => '043',
                'nombre' => 'Jacona',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'estado_id' => 16,
                'clave' => '044',
                'nombre' => 'Jiménez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'estado_id' => 16,
                'clave' => '045',
                'nombre' => 'Jiquilpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'estado_id' => 16,
                'clave' => '046',
                'nombre' => 'Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'estado_id' => 16,
                'clave' => '047',
                'nombre' => 'Jungapeo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'estado_id' => 16,
                'clave' => '048',
                'nombre' => 'Lagunillas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'estado_id' => 16,
                'clave' => '049',
                'nombre' => 'Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'estado_id' => 16,
                'clave' => '050',
                'nombre' => 'Maravatío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'estado_id' => 16,
                'clave' => '051',
                'nombre' => 'Marcos Castellanos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'estado_id' => 16,
                'clave' => '052',
                'nombre' => 'Lázaro Cárdenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'estado_id' => 16,
                'clave' => '053',
                'nombre' => 'Morelia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'estado_id' => 16,
                'clave' => '054',
                'nombre' => 'Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'estado_id' => 16,
                'clave' => '055',
                'nombre' => 'Múgica',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'estado_id' => 16,
                'clave' => '056',
                'nombre' => 'Nahuatzen',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'estado_id' => 16,
                'clave' => '057',
                'nombre' => 'Nocupétaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'estado_id' => 16,
                'clave' => '058',
                'nombre' => 'Nuevo Parangaricutiro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'estado_id' => 16,
                'clave' => '059',
                'nombre' => 'Nuevo Urecho',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'estado_id' => 16,
                'clave' => '060',
                'nombre' => 'Numarán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'estado_id' => 16,
                'clave' => '061',
                'nombre' => 'Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'estado_id' => 16,
                'clave' => '062',
                'nombre' => 'Pajacuarán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'estado_id' => 16,
                'clave' => '063',
                'nombre' => 'Panindícuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'estado_id' => 16,
                'clave' => '064',
                'nombre' => 'Parácuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'estado_id' => 16,
                'clave' => '065',
                'nombre' => 'Paracho',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'estado_id' => 16,
                'clave' => '066',
                'nombre' => 'Pátzcuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'estado_id' => 16,
                'clave' => '067',
                'nombre' => 'Penjamillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'estado_id' => 16,
                'clave' => '068',
                'nombre' => 'Peribán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'estado_id' => 16,
                'clave' => '069',
                'nombre' => 'La Piedad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'estado_id' => 16,
                'clave' => '070',
                'nombre' => 'Purépero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'estado_id' => 16,
                'clave' => '071',
                'nombre' => 'Puruándiro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'estado_id' => 16,
                'clave' => '072',
                'nombre' => 'Queréndaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'estado_id' => 16,
                'clave' => '073',
                'nombre' => 'Quiroga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'estado_id' => 16,
                'clave' => '074',
                'nombre' => 'Cojumatlán de Régules',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'estado_id' => 16,
                'clave' => '075',
                'nombre' => 'Los Reyes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'estado_id' => 16,
                'clave' => '076',
                'nombre' => 'Sahuayo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'estado_id' => 16,
                'clave' => '077',
                'nombre' => 'San Lucas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'estado_id' => 16,
                'clave' => '078',
                'nombre' => 'Santa Ana Maya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'estado_id' => 16,
                'clave' => '079',
                'nombre' => 'Salvador Escalante',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'estado_id' => 16,
                'clave' => '080',
                'nombre' => 'Senguio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'estado_id' => 16,
                'clave' => '081',
                'nombre' => 'Susupuato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'estado_id' => 16,
                'clave' => '082',
                'nombre' => 'Tacámbaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'estado_id' => 16,
                'clave' => '083',
                'nombre' => 'Tancítaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'estado_id' => 16,
                'clave' => '084',
                'nombre' => 'Tangamandapio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'estado_id' => 16,
                'clave' => '085',
                'nombre' => 'Tangancícuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'estado_id' => 16,
                'clave' => '086',
                'nombre' => 'Tanhuato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'estado_id' => 16,
                'clave' => '087',
                'nombre' => 'Taretan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'estado_id' => 16,
                'clave' => '088',
                'nombre' => 'Tarímbaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'estado_id' => 16,
                'clave' => '089',
                'nombre' => 'Tepalcatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'estado_id' => 16,
                'clave' => '090',
                'nombre' => 'Tingambato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'estado_id' => 16,
                'clave' => '091',
                'nombre' => 'Tingüindín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'estado_id' => 16,
                'clave' => '092',
                'nombre' => 'Tiquicheo de Nicolás Romero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'estado_id' => 16,
                'clave' => '093',
                'nombre' => 'Tlalpujahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'estado_id' => 16,
                'clave' => '094',
                'nombre' => 'Tlazazalca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'estado_id' => 16,
                'clave' => '095',
                'nombre' => 'Tocumbo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'estado_id' => 16,
                'clave' => '096',
                'nombre' => 'Tumbiscatío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'estado_id' => 16,
                'clave' => '097',
                'nombre' => 'Turicato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'estado_id' => 16,
                'clave' => '098',
                'nombre' => 'Tuxpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'estado_id' => 16,
                'clave' => '099',
                'nombre' => 'Tuzantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'estado_id' => 16,
                'clave' => '100',
                'nombre' => 'Tzintzuntzan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'estado_id' => 16,
                'clave' => '101',
                'nombre' => 'Tzitzio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'estado_id' => 16,
                'clave' => '102',
                'nombre' => 'Uruapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'estado_id' => 16,
                'clave' => '103',
                'nombre' => 'Venustiano Carranza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'estado_id' => 16,
                'clave' => '104',
                'nombre' => 'Villamar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'estado_id' => 16,
                'clave' => '105',
                'nombre' => 'Vista Hermosa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'estado_id' => 16,
                'clave' => '106',
                'nombre' => 'Yurécuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'estado_id' => 16,
                'clave' => '107',
                'nombre' => 'Zacapu',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'estado_id' => 16,
                'clave' => '108',
                'nombre' => 'Zamora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'estado_id' => 16,
                'clave' => '109',
                'nombre' => 'Zináparo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'estado_id' => 16,
                'clave' => '110',
                'nombre' => 'Zinapécuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'estado_id' => 16,
                'clave' => '111',
                'nombre' => 'Ziracuaretiro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'estado_id' => 16,
                'clave' => '112',
                'nombre' => 'Zitácuaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'estado_id' => 16,
                'clave' => '113',
                'nombre' => 'José Sixto Verduzco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'estado_id' => 17,
                'clave' => '001',
                'nombre' => 'Amacuzac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'estado_id' => 17,
                'clave' => '002',
                'nombre' => 'Atlatlahucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'estado_id' => 17,
                'clave' => '003',
                'nombre' => 'Axochiapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'estado_id' => 17,
                'clave' => '004',
                'nombre' => 'Ayala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'estado_id' => 17,
                'clave' => '005',
                'nombre' => 'Coatlán del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'estado_id' => 17,
                'clave' => '006',
                'nombre' => 'Cuautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'estado_id' => 17,
                'clave' => '007',
                'nombre' => 'Cuernavaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'estado_id' => 17,
                'clave' => '008',
                'nombre' => 'Emiliano Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'estado_id' => 17,
                'clave' => '009',
                'nombre' => 'Huitzilac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'estado_id' => 17,
                'clave' => '010',
                'nombre' => 'Jantetelco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'estado_id' => 17,
                'clave' => '011',
                'nombre' => 'Jiutepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'estado_id' => 17,
                'clave' => '012',
                'nombre' => 'Jojutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'estado_id' => 17,
                'clave' => '013',
                'nombre' => 'Jonacatepec de Leandro Valle',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'estado_id' => 17,
                'clave' => '014',
                'nombre' => 'Mazatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'estado_id' => 17,
                'clave' => '015',
                'nombre' => 'Miacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'estado_id' => 17,
                'clave' => '016',
                'nombre' => 'Ocuituco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'estado_id' => 17,
                'clave' => '017',
                'nombre' => 'Puente de Ixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'estado_id' => 17,
                'clave' => '018',
                'nombre' => 'Temixco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'estado_id' => 17,
                'clave' => '019',
                'nombre' => 'Tepalcingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'estado_id' => 17,
                'clave' => '020',
                'nombre' => 'Tepoztlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'estado_id' => 17,
                'clave' => '021',
                'nombre' => 'Tetecala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'estado_id' => 17,
                'clave' => '022',
                'nombre' => 'Tetela del Volcán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'estado_id' => 17,
                'clave' => '023',
                'nombre' => 'Tlalnepantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'estado_id' => 17,
                'clave' => '024',
                'nombre' => 'Tlaltizapán de Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'estado_id' => 17,
                'clave' => '025',
                'nombre' => 'Tlaquiltenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'estado_id' => 17,
                'clave' => '026',
                'nombre' => 'Tlayacapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'estado_id' => 17,
                'clave' => '027',
                'nombre' => 'Totolapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'estado_id' => 17,
                'clave' => '028',
                'nombre' => 'Xochitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'estado_id' => 17,
                'clave' => '029',
                'nombre' => 'Yautepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'estado_id' => 17,
                'clave' => '030',
                'nombre' => 'Yecapixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'estado_id' => 17,
                'clave' => '031',
                'nombre' => 'Zacatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'estado_id' => 17,
                'clave' => '032',
                'nombre' => 'Zacualpan de Amilpas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'estado_id' => 17,
                'clave' => '033',
                'nombre' => 'Temoac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'estado_id' => 18,
                'clave' => '001',
                'nombre' => 'Acaponeta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'estado_id' => 18,
                'clave' => '002',
                'nombre' => 'Ahuacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'estado_id' => 18,
                'clave' => '003',
                'nombre' => 'Amatlán de Cañas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'estado_id' => 18,
                'clave' => '004',
                'nombre' => 'Compostela',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'estado_id' => 18,
                'clave' => '005',
                'nombre' => 'Huajicori',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'estado_id' => 18,
                'clave' => '006',
                'nombre' => 'Ixtlán del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'estado_id' => 18,
                'clave' => '007',
                'nombre' => 'Jala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'estado_id' => 18,
                'clave' => '008',
                'nombre' => 'Xalisco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'estado_id' => 18,
                'clave' => '009',
                'nombre' => 'Del Nayar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'estado_id' => 18,
                'clave' => '010',
                'nombre' => 'Rosamorada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'estado_id' => 18,
                'clave' => '011',
                'nombre' => 'Ruíz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'estado_id' => 18,
                'clave' => '012',
                'nombre' => 'San Blas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'estado_id' => 18,
                'clave' => '013',
                'nombre' => 'San Pedro Lagunillas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'estado_id' => 18,
                'clave' => '014',
                'nombre' => 'Santa María del Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'estado_id' => 18,
                'clave' => '015',
                'nombre' => 'Santiago Ixcuintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'estado_id' => 18,
                'clave' => '016',
                'nombre' => 'Tecuala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'estado_id' => 18,
                'clave' => '017',
                'nombre' => 'Tepic',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'estado_id' => 18,
                'clave' => '018',
                'nombre' => 'Tuxpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'estado_id' => 18,
                'clave' => '019',
                'nombre' => 'La Yesca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'estado_id' => 18,
                'clave' => '020',
                'nombre' => 'Bahía de Banderas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'estado_id' => 19,
                'clave' => '001',
                'nombre' => 'Abasolo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'estado_id' => 19,
                'clave' => '002',
                'nombre' => 'Agualeguas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'estado_id' => 19,
                'clave' => '003',
                'nombre' => 'Los Aldamas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'estado_id' => 19,
                'clave' => '004',
                'nombre' => 'Allende',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'estado_id' => 19,
                'clave' => '005',
                'nombre' => 'Anáhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'estado_id' => 19,
                'clave' => '006',
                'nombre' => 'Apodaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'estado_id' => 19,
                'clave' => '007',
                'nombre' => 'Aramberri',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'estado_id' => 19,
                'clave' => '008',
                'nombre' => 'Bustamante',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'estado_id' => 19,
                'clave' => '009',
                'nombre' => 'Cadereyta Jiménez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'estado_id' => 19,
                'clave' => '010',
                'nombre' => 'El Carmen',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'estado_id' => 19,
                'clave' => '011',
                'nombre' => 'Cerralvo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'estado_id' => 19,
                'clave' => '012',
                'nombre' => 'Ciénega de Flores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'estado_id' => 19,
                'clave' => '013',
                'nombre' => 'China',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'estado_id' => 19,
                'clave' => '014',
                'nombre' => 'Doctor Arroyo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'estado_id' => 19,
                'clave' => '015',
                'nombre' => 'Doctor Coss',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'estado_id' => 19,
                'clave' => '016',
                'nombre' => 'Doctor González',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'estado_id' => 19,
                'clave' => '017',
                'nombre' => 'Galeana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'estado_id' => 19,
                'clave' => '018',
                'nombre' => 'García',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'estado_id' => 19,
                'clave' => '019',
                'nombre' => 'San Pedro Garza García',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'estado_id' => 19,
                'clave' => '020',
                'nombre' => 'General Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'estado_id' => 19,
                'clave' => '021',
                'nombre' => 'General Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'estado_id' => 19,
                'clave' => '022',
                'nombre' => 'General Terán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'estado_id' => 19,
                'clave' => '023',
                'nombre' => 'General Treviño',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'estado_id' => 19,
                'clave' => '024',
                'nombre' => 'General Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'estado_id' => 19,
                'clave' => '025',
                'nombre' => 'General Zuazua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'estado_id' => 19,
                'clave' => '026',
                'nombre' => 'Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'estado_id' => 19,
                'clave' => '027',
                'nombre' => 'Los Herreras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'estado_id' => 19,
                'clave' => '028',
                'nombre' => 'Higueras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'estado_id' => 19,
                'clave' => '029',
                'nombre' => 'Hualahuises',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'estado_id' => 19,
                'clave' => '030',
                'nombre' => 'Iturbide',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'estado_id' => 19,
                'clave' => '031',
                'nombre' => 'Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'estado_id' => 19,
                'clave' => '032',
                'nombre' => 'Lampazos de Naranjo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'estado_id' => 19,
                'clave' => '033',
                'nombre' => 'Linares',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'estado_id' => 19,
                'clave' => '034',
                'nombre' => 'Marín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'estado_id' => 19,
                'clave' => '035',
                'nombre' => 'Melchor Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'estado_id' => 19,
                'clave' => '036',
                'nombre' => 'Mier y Noriega',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'estado_id' => 19,
                'clave' => '037',
                'nombre' => 'Mina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'estado_id' => 19,
                'clave' => '038',
                'nombre' => 'Montemorelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'estado_id' => 19,
                'clave' => '039',
                'nombre' => 'Monterrey',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'estado_id' => 19,
                'clave' => '040',
                'nombre' => 'Parás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'estado_id' => 19,
                'clave' => '041',
                'nombre' => 'Pesquería',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'estado_id' => 19,
                'clave' => '042',
                'nombre' => 'Los Ramones',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'estado_id' => 19,
                'clave' => '043',
                'nombre' => 'Rayones',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'estado_id' => 19,
                'clave' => '044',
                'nombre' => 'Sabinas Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'estado_id' => 19,
                'clave' => '045',
                'nombre' => 'Salinas Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'estado_id' => 19,
                'clave' => '046',
                'nombre' => 'San Nicolás de los Garza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'estado_id' => 19,
                'clave' => '047',
                'nombre' => 'Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'estado_id' => 19,
                'clave' => '048',
                'nombre' => 'Santa Catarina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cat_municipios')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'estado_id' => 19,
                'clave' => '049',
                'nombre' => 'Santiago',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'estado_id' => 19,
                'clave' => '050',
                'nombre' => 'Vallecillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'estado_id' => 19,
                'clave' => '051',
                'nombre' => 'Villaldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'estado_id' => 20,
                'clave' => '001',
                'nombre' => 'Abejones',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'estado_id' => 20,
                'clave' => '002',
                'nombre' => 'Acatlán de Pérez Figueroa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'estado_id' => 20,
                'clave' => '003',
                'nombre' => 'Asunción Cacalotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'estado_id' => 20,
                'clave' => '004',
                'nombre' => 'Asunción Cuyotepeji',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'estado_id' => 20,
                'clave' => '005',
                'nombre' => 'Asunción Ixtaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'estado_id' => 20,
                'clave' => '006',
                'nombre' => 'Asunción Nochixtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'estado_id' => 20,
                'clave' => '007',
                'nombre' => 'Asunción Ocotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'estado_id' => 20,
                'clave' => '008',
                'nombre' => 'Asunción Tlacolulita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'estado_id' => 20,
                'clave' => '009',
                'nombre' => 'Ayotzintepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'estado_id' => 20,
                'clave' => '010',
                'nombre' => 'El Barrio de la Soledad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'estado_id' => 20,
                'clave' => '011',
                'nombre' => 'Calihualá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'estado_id' => 20,
                'clave' => '012',
                'nombre' => 'Candelaria Loxicha',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'estado_id' => 20,
                'clave' => '013',
                'nombre' => 'Ciénega de Zimatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'estado_id' => 20,
                'clave' => '014',
                'nombre' => 'Ciudad Ixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'estado_id' => 20,
                'clave' => '015',
                'nombre' => 'Coatecas Altas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'estado_id' => 20,
                'clave' => '016',
                'nombre' => 'Coicoyán de las Flores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'estado_id' => 20,
                'clave' => '017',
                'nombre' => 'La Compañía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'estado_id' => 20,
                'clave' => '018',
                'nombre' => 'Concepción Buenavista',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'estado_id' => 20,
                'clave' => '019',
                'nombre' => 'Concepción Pápalo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'estado_id' => 20,
                'clave' => '020',
                'nombre' => 'Constancia del Rosario',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'estado_id' => 20,
                'clave' => '021',
                'nombre' => 'Cosolapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'estado_id' => 20,
                'clave' => '022',
                'nombre' => 'Cosoltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'estado_id' => 20,
                'clave' => '023',
                'nombre' => 'Cuilápam de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'estado_id' => 20,
                'clave' => '024',
                'nombre' => 'Cuyamecalco Villa de Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'estado_id' => 20,
                'clave' => '025',
                'nombre' => 'Chahuites',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'estado_id' => 20,
                'clave' => '026',
                'nombre' => 'Chalcatongo de Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'estado_id' => 20,
                'clave' => '027',
                'nombre' => 'Chiquihuitlán de Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'estado_id' => 20,
                'clave' => '028',
                'nombre' => 'Heroica Ciudad de Ejutla de Crespo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'estado_id' => 20,
                'clave' => '029',
                'nombre' => 'Eloxochitlán de Flores Magón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'estado_id' => 20,
                'clave' => '030',
                'nombre' => 'El Espinal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'estado_id' => 20,
                'clave' => '031',
                'nombre' => 'Tamazulápam del Espíritu Santo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'estado_id' => 20,
                'clave' => '032',
                'nombre' => 'Fresnillo de Trujano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'estado_id' => 20,
                'clave' => '033',
                'nombre' => 'Guadalupe Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'estado_id' => 20,
                'clave' => '034',
                'nombre' => 'Guadalupe de Ramírez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'estado_id' => 20,
                'clave' => '035',
                'nombre' => 'Guelatao de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'estado_id' => 20,
                'clave' => '036',
                'nombre' => 'Guevea de Humboldt',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'estado_id' => 20,
                'clave' => '037',
                'nombre' => 'Mesones Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'estado_id' => 20,
                'clave' => '038',
                'nombre' => 'Villa Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'estado_id' => 20,
                'clave' => '039',
                'nombre' => 'Heroica Ciudad de Huajuapan de León',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'estado_id' => 20,
                'clave' => '040',
                'nombre' => 'Huautepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'estado_id' => 20,
                'clave' => '041',
                'nombre' => 'Huautla de Jiménez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'estado_id' => 20,
                'clave' => '042',
                'nombre' => 'Ixtlán de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'estado_id' => 20,
                'clave' => '043',
                'nombre' => 'Heroica Ciudad de Juchitán de Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'estado_id' => 20,
                'clave' => '044',
                'nombre' => 'Loma Bonita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'estado_id' => 20,
                'clave' => '045',
                'nombre' => 'Magdalena Apasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'estado_id' => 20,
                'clave' => '046',
                'nombre' => 'Magdalena Jaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'estado_id' => 20,
                'clave' => '047',
                'nombre' => 'Santa Magdalena Jicotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'estado_id' => 20,
                'clave' => '048',
                'nombre' => 'Magdalena Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'estado_id' => 20,
                'clave' => '049',
                'nombre' => 'Magdalena Ocotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'estado_id' => 20,
                'clave' => '050',
                'nombre' => 'Magdalena Peñasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'estado_id' => 20,
                'clave' => '051',
                'nombre' => 'Magdalena Teitipac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'estado_id' => 20,
                'clave' => '052',
                'nombre' => 'Magdalena Tequisistlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'estado_id' => 20,
                'clave' => '053',
                'nombre' => 'Magdalena Tlacotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'estado_id' => 20,
                'clave' => '054',
                'nombre' => 'Magdalena Zahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'estado_id' => 20,
                'clave' => '055',
                'nombre' => 'Mariscala de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'estado_id' => 20,
                'clave' => '056',
                'nombre' => 'Mártires de Tacubaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'estado_id' => 20,
                'clave' => '057',
                'nombre' => 'Matías Romero Avendaño',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'estado_id' => 20,
                'clave' => '058',
                'nombre' => 'Mazatlán Villa de Flores',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'estado_id' => 20,
                'clave' => '059',
                'nombre' => 'Miahuatlán de Porfirio Díaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'estado_id' => 20,
                'clave' => '060',
                'nombre' => 'Mixistlán de la Reforma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'estado_id' => 20,
                'clave' => '061',
                'nombre' => 'Monjas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'estado_id' => 20,
                'clave' => '062',
                'nombre' => 'Natividad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'estado_id' => 20,
                'clave' => '063',
                'nombre' => 'Nazareno Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'estado_id' => 20,
                'clave' => '064',
                'nombre' => 'Nejapa de Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'estado_id' => 20,
                'clave' => '065',
                'nombre' => 'Ixpantepec Nieves',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'estado_id' => 20,
                'clave' => '066',
                'nombre' => 'Santiago Niltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'estado_id' => 20,
                'clave' => '067',
                'nombre' => 'Oaxaca de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'estado_id' => 20,
                'clave' => '068',
                'nombre' => 'Ocotlán de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'estado_id' => 20,
                'clave' => '069',
                'nombre' => 'La Pe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'estado_id' => 20,
                'clave' => '070',
                'nombre' => 'Pinotepa de Don Luis',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'estado_id' => 20,
                'clave' => '071',
                'nombre' => 'Pluma Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'estado_id' => 20,
                'clave' => '072',
                'nombre' => 'San José del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'estado_id' => 20,
                'clave' => '073',
                'nombre' => 'Putla Villa de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'estado_id' => 20,
                'clave' => '074',
                'nombre' => 'Santa Catarina Quioquitani',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'estado_id' => 20,
                'clave' => '075',
                'nombre' => 'Reforma de Pineda',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'estado_id' => 20,
                'clave' => '076',
                'nombre' => 'La Reforma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'estado_id' => 20,
                'clave' => '077',
                'nombre' => 'Reyes Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'estado_id' => 20,
                'clave' => '078',
                'nombre' => 'Rojas de Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'estado_id' => 20,
                'clave' => '079',
                'nombre' => 'Salina Cruz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'estado_id' => 20,
                'clave' => '080',
                'nombre' => 'San Agustín Amatengo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'estado_id' => 20,
                'clave' => '081',
                'nombre' => 'San Agustín Atenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'estado_id' => 20,
                'clave' => '082',
                'nombre' => 'San Agustín Chayuco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'estado_id' => 20,
                'clave' => '083',
                'nombre' => 'San Agustín de las Juntas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'estado_id' => 20,
                'clave' => '084',
                'nombre' => 'San Agustín Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'estado_id' => 20,
                'clave' => '085',
                'nombre' => 'San Agustín Loxicha',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'estado_id' => 20,
                'clave' => '086',
                'nombre' => 'San Agustín Tlacotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'estado_id' => 20,
                'clave' => '087',
                'nombre' => 'San Agustín Yatareni',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'estado_id' => 20,
                'clave' => '088',
                'nombre' => 'San Andrés Cabecera Nueva',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'estado_id' => 20,
                'clave' => '089',
                'nombre' => 'San Andrés Dinicuiti',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'estado_id' => 20,
                'clave' => '090',
                'nombre' => 'San Andrés Huaxpaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'estado_id' => 20,
                'clave' => '091',
                'nombre' => 'San Andrés Huayápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'estado_id' => 20,
                'clave' => '092',
                'nombre' => 'San Andrés Ixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'estado_id' => 20,
                'clave' => '093',
                'nombre' => 'San Andrés Lagunas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'estado_id' => 20,
                'clave' => '094',
                'nombre' => 'San Andrés Nuxiño',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'estado_id' => 20,
                'clave' => '095',
                'nombre' => 'San Andrés Paxtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'estado_id' => 20,
                'clave' => '096',
                'nombre' => 'San Andrés Sinaxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'estado_id' => 20,
                'clave' => '097',
                'nombre' => 'San Andrés Solaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'estado_id' => 20,
                'clave' => '098',
                'nombre' => 'San Andrés Teotilálpam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'estado_id' => 20,
                'clave' => '099',
                'nombre' => 'San Andrés Tepetlapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'estado_id' => 20,
                'clave' => '100',
                'nombre' => 'San Andrés Yaá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'estado_id' => 20,
                'clave' => '101',
                'nombre' => 'San Andrés Zabache',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'estado_id' => 20,
                'clave' => '102',
                'nombre' => 'San Andrés Zautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'estado_id' => 20,
                'clave' => '103',
                'nombre' => 'San Antonino Castillo Velasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'estado_id' => 20,
                'clave' => '104',
                'nombre' => 'San Antonino el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'estado_id' => 20,
                'clave' => '105',
                'nombre' => 'San Antonino Monte Verde',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'estado_id' => 20,
                'clave' => '106',
                'nombre' => 'San Antonio Acutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'estado_id' => 20,
                'clave' => '107',
                'nombre' => 'San Antonio de la Cal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'estado_id' => 20,
                'clave' => '108',
                'nombre' => 'San Antonio Huitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'estado_id' => 20,
                'clave' => '109',
                'nombre' => 'San Antonio Nanahuatípam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'estado_id' => 20,
                'clave' => '110',
                'nombre' => 'San Antonio Sinicahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'estado_id' => 20,
                'clave' => '111',
                'nombre' => 'San Antonio Tepetlapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'estado_id' => 20,
                'clave' => '112',
                'nombre' => 'San Baltazar Chichicápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'estado_id' => 20,
                'clave' => '113',
                'nombre' => 'San Baltazar Loxicha',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'estado_id' => 20,
                'clave' => '114',
                'nombre' => 'San Baltazar Yatzachi el Bajo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'estado_id' => 20,
                'clave' => '115',
                'nombre' => 'San Bartolo Coyotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'estado_id' => 20,
                'clave' => '116',
                'nombre' => 'San Bartolomé Ayautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'estado_id' => 20,
                'clave' => '117',
                'nombre' => 'San Bartolomé Loxicha',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'estado_id' => 20,
                'clave' => '118',
                'nombre' => 'San Bartolomé Quialana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'estado_id' => 20,
                'clave' => '119',
                'nombre' => 'San Bartolomé Yucuañe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'estado_id' => 20,
                'clave' => '120',
                'nombre' => 'San Bartolomé Zoogocho',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'estado_id' => 20,
                'clave' => '121',
                'nombre' => 'San Bartolo Soyaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'estado_id' => 20,
                'clave' => '122',
                'nombre' => 'San Bartolo Yautepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'estado_id' => 20,
                'clave' => '123',
                'nombre' => 'San Bernardo Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'estado_id' => 20,
                'clave' => '124',
                'nombre' => 'San Blas Atempa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'estado_id' => 20,
                'clave' => '125',
                'nombre' => 'San Carlos Yautepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'estado_id' => 20,
                'clave' => '126',
                'nombre' => 'San Cristóbal Amatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'estado_id' => 20,
                'clave' => '127',
                'nombre' => 'San Cristóbal Amoltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'estado_id' => 20,
                'clave' => '128',
                'nombre' => 'San Cristóbal Lachirioag',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'estado_id' => 20,
                'clave' => '129',
                'nombre' => 'San Cristóbal Suchixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'estado_id' => 20,
                'clave' => '130',
                'nombre' => 'San Dionisio del Mar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'estado_id' => 20,
                'clave' => '131',
                'nombre' => 'San Dionisio Ocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'estado_id' => 20,
                'clave' => '132',
                'nombre' => 'San Dionisio Ocotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'estado_id' => 20,
                'clave' => '133',
                'nombre' => 'San Esteban Atatlahuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'estado_id' => 20,
                'clave' => '134',
                'nombre' => 'San Felipe Jalapa de Díaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'estado_id' => 20,
                'clave' => '135',
                'nombre' => 'San Felipe Tejalápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'estado_id' => 20,
                'clave' => '136',
                'nombre' => 'San Felipe Usila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'estado_id' => 20,
                'clave' => '137',
                'nombre' => 'San Francisco Cahuacuá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'estado_id' => 20,
                'clave' => '138',
                'nombre' => 'San Francisco Cajonos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'estado_id' => 20,
                'clave' => '139',
                'nombre' => 'San Francisco Chapulapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'estado_id' => 20,
                'clave' => '140',
                'nombre' => 'San Francisco Chindúa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'estado_id' => 20,
                'clave' => '141',
                'nombre' => 'San Francisco del Mar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'estado_id' => 20,
                'clave' => '142',
                'nombre' => 'San Francisco Huehuetlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'estado_id' => 20,
                'clave' => '143',
                'nombre' => 'San Francisco Ixhuatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'estado_id' => 20,
                'clave' => '144',
                'nombre' => 'San Francisco Jaltepetongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'estado_id' => 20,
                'clave' => '145',
                'nombre' => 'San Francisco Lachigoló',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'estado_id' => 20,
                'clave' => '146',
                'nombre' => 'San Francisco Logueche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'estado_id' => 20,
                'clave' => '147',
                'nombre' => 'San Francisco Nuxaño',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'estado_id' => 20,
                'clave' => '148',
                'nombre' => 'San Francisco Ozolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'estado_id' => 20,
                'clave' => '149',
                'nombre' => 'San Francisco Sola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'estado_id' => 20,
                'clave' => '150',
                'nombre' => 'San Francisco Telixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'estado_id' => 20,
                'clave' => '151',
                'nombre' => 'San Francisco Teopan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'estado_id' => 20,
                'clave' => '152',
                'nombre' => 'San Francisco Tlapancingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'estado_id' => 20,
                'clave' => '153',
                'nombre' => 'San Gabriel Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'estado_id' => 20,
                'clave' => '154',
                'nombre' => 'San Ildefonso Amatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'estado_id' => 20,
                'clave' => '155',
                'nombre' => 'San Ildefonso Sola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'estado_id' => 20,
                'clave' => '156',
                'nombre' => 'San Ildefonso Villa Alta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'estado_id' => 20,
                'clave' => '157',
                'nombre' => 'San Jacinto Amilpas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'estado_id' => 20,
                'clave' => '158',
                'nombre' => 'San Jacinto Tlacotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'estado_id' => 20,
                'clave' => '159',
                'nombre' => 'San Jerónimo Coatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'estado_id' => 20,
                'clave' => '160',
                'nombre' => 'San Jerónimo Silacayoapilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'estado_id' => 20,
                'clave' => '161',
                'nombre' => 'San Jerónimo Sosola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'estado_id' => 20,
                'clave' => '162',
                'nombre' => 'San Jerónimo Taviche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'estado_id' => 20,
                'clave' => '163',
                'nombre' => 'San Jerónimo Tecóatl',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'estado_id' => 20,
                'clave' => '164',
                'nombre' => 'San Jorge Nuchita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'estado_id' => 20,
                'clave' => '165',
                'nombre' => 'San José Ayuquila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'estado_id' => 20,
                'clave' => '166',
                'nombre' => 'San José Chiltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'estado_id' => 20,
                'clave' => '167',
                'nombre' => 'San José del Peñasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'estado_id' => 20,
                'clave' => '168',
                'nombre' => 'San José Estancia Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'estado_id' => 20,
                'clave' => '169',
                'nombre' => 'San José Independencia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'estado_id' => 20,
                'clave' => '170',
                'nombre' => 'San José Lachiguiri',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'estado_id' => 20,
                'clave' => '171',
                'nombre' => 'San José Tenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'estado_id' => 20,
                'clave' => '172',
                'nombre' => 'San Juan Achiutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'estado_id' => 20,
                'clave' => '173',
                'nombre' => 'San Juan Atepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'estado_id' => 20,
                'clave' => '174',
                'nombre' => 'Ánimas Trujano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'estado_id' => 20,
                'clave' => '175',
                'nombre' => 'San Juan Bautista Atatlahuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'estado_id' => 20,
                'clave' => '176',
                'nombre' => 'San Juan Bautista Coixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'estado_id' => 20,
                'clave' => '177',
                'nombre' => 'San Juan Bautista Cuicatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'estado_id' => 20,
                'clave' => '178',
                'nombre' => 'San Juan Bautista Guelache',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'estado_id' => 20,
                'clave' => '179',
                'nombre' => 'San Juan Bautista Jayacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'estado_id' => 20,
                'clave' => '180',
                'nombre' => 'San Juan Bautista Lo de Soto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'estado_id' => 20,
                'clave' => '181',
                'nombre' => 'San Juan Bautista Suchitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'estado_id' => 20,
                'clave' => '182',
                'nombre' => 'San Juan Bautista Tlacoatzintepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'estado_id' => 20,
                'clave' => '183',
                'nombre' => 'San Juan Bautista Tlachichilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'estado_id' => 20,
                'clave' => '184',
                'nombre' => 'San Juan Bautista Tuxtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'estado_id' => 20,
                'clave' => '185',
                'nombre' => 'San Juan Cacahuatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'estado_id' => 20,
                'clave' => '186',
                'nombre' => 'San Juan Cieneguilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'estado_id' => 20,
                'clave' => '187',
                'nombre' => 'San Juan Coatzóspam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'estado_id' => 20,
                'clave' => '188',
                'nombre' => 'San Juan Colorado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'estado_id' => 20,
                'clave' => '189',
                'nombre' => 'San Juan Comaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'estado_id' => 20,
                'clave' => '190',
                'nombre' => 'San Juan Cotzocón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'estado_id' => 20,
                'clave' => '191',
                'nombre' => 'San Juan Chicomezúchil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'estado_id' => 20,
                'clave' => '192',
                'nombre' => 'San Juan Chilateca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'estado_id' => 20,
                'clave' => '193',
                'nombre' => 'San Juan del Estado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'estado_id' => 20,
                'clave' => '194',
                'nombre' => 'San Juan del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'estado_id' => 20,
                'clave' => '195',
                'nombre' => 'San Juan Diuxi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'estado_id' => 20,
                'clave' => '196',
                'nombre' => 'San Juan Evangelista Analco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'estado_id' => 20,
                'clave' => '197',
                'nombre' => 'San Juan Guelavía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'estado_id' => 20,
                'clave' => '198',
                'nombre' => 'San Juan Guichicovi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'estado_id' => 20,
                'clave' => '199',
                'nombre' => 'San Juan Ihualtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'estado_id' => 20,
                'clave' => '200',
                'nombre' => 'San Juan Juquila Mixes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'estado_id' => 20,
                'clave' => '201',
                'nombre' => 'San Juan Juquila Vijanos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'estado_id' => 20,
                'clave' => '202',
                'nombre' => 'San Juan Lachao',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'estado_id' => 20,
                'clave' => '203',
                'nombre' => 'San Juan Lachigalla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'estado_id' => 20,
                'clave' => '204',
                'nombre' => 'San Juan Lajarcia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'estado_id' => 20,
                'clave' => '205',
                'nombre' => 'San Juan Lalana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'estado_id' => 20,
                'clave' => '206',
                'nombre' => 'San Juan de los Cués',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'estado_id' => 20,
                'clave' => '207',
                'nombre' => 'San Juan Mazatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'estado_id' => 20,
                'clave' => '208',
                'nombre' => 'San Juan Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'estado_id' => 20,
                'clave' => '209',
                'nombre' => 'San Juan Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'estado_id' => 20,
                'clave' => '210',
                'nombre' => 'San Juan Ñumí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'estado_id' => 20,
                'clave' => '211',
                'nombre' => 'San Juan Ozolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'estado_id' => 20,
                'clave' => '212',
                'nombre' => 'San Juan Petlapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'estado_id' => 20,
                'clave' => '213',
                'nombre' => 'San Juan Quiahije',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'estado_id' => 20,
                'clave' => '214',
                'nombre' => 'San Juan Quiotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'estado_id' => 20,
                'clave' => '215',
                'nombre' => 'San Juan Sayultepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'estado_id' => 20,
                'clave' => '216',
                'nombre' => 'San Juan Tabaá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'estado_id' => 20,
                'clave' => '217',
                'nombre' => 'San Juan Tamazola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'estado_id' => 20,
                'clave' => '218',
                'nombre' => 'San Juan Teita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'estado_id' => 20,
                'clave' => '219',
                'nombre' => 'San Juan Teitipac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'estado_id' => 20,
                'clave' => '220',
                'nombre' => 'San Juan Tepeuxila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'estado_id' => 20,
                'clave' => '221',
                'nombre' => 'San Juan Teposcolula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'estado_id' => 20,
                'clave' => '222',
                'nombre' => 'San Juan Yaeé',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'estado_id' => 20,
                'clave' => '223',
                'nombre' => 'San Juan Yatzona',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'estado_id' => 20,
                'clave' => '224',
                'nombre' => 'San Juan Yucuita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'estado_id' => 20,
                'clave' => '225',
                'nombre' => 'San Lorenzo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'estado_id' => 20,
                'clave' => '226',
                'nombre' => 'San Lorenzo Albarradas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'estado_id' => 20,
                'clave' => '227',
                'nombre' => 'San Lorenzo Cacaotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'estado_id' => 20,
                'clave' => '228',
                'nombre' => 'San Lorenzo Cuaunecuiltitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'estado_id' => 20,
                'clave' => '229',
                'nombre' => 'San Lorenzo Texmelúcan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'estado_id' => 20,
                'clave' => '230',
                'nombre' => 'San Lorenzo Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'estado_id' => 20,
                'clave' => '231',
                'nombre' => 'San Lucas Camotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'estado_id' => 20,
                'clave' => '232',
                'nombre' => 'San Lucas Ojitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'estado_id' => 20,
                'clave' => '233',
                'nombre' => 'San Lucas Quiaviní',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'estado_id' => 20,
                'clave' => '234',
                'nombre' => 'San Lucas Zoquiápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'estado_id' => 20,
                'clave' => '235',
                'nombre' => 'San Luis Amatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'estado_id' => 20,
                'clave' => '236',
                'nombre' => 'San Marcial Ozolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'estado_id' => 20,
                'clave' => '237',
                'nombre' => 'San Marcos Arteaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'estado_id' => 20,
                'clave' => '238',
                'nombre' => 'San Martín de los Cansecos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'estado_id' => 20,
                'clave' => '239',
                'nombre' => 'San Martín Huamelúlpam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'estado_id' => 20,
                'clave' => '240',
                'nombre' => 'San Martín Itunyoso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'estado_id' => 20,
                'clave' => '241',
                'nombre' => 'San Martín Lachilá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'estado_id' => 20,
                'clave' => '242',
                'nombre' => 'San Martín Peras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'estado_id' => 20,
                'clave' => '243',
                'nombre' => 'San Martín Tilcajete',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'estado_id' => 20,
                'clave' => '244',
                'nombre' => 'San Martín Toxpalan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'estado_id' => 20,
                'clave' => '245',
                'nombre' => 'San Martín Zacatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'estado_id' => 20,
                'clave' => '246',
                'nombre' => 'San Mateo Cajonos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'estado_id' => 20,
                'clave' => '247',
                'nombre' => 'Capulálpam de Méndez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'estado_id' => 20,
                'clave' => '248',
                'nombre' => 'San Mateo del Mar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'estado_id' => 20,
                'clave' => '249',
                'nombre' => 'San Mateo Yoloxochitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'estado_id' => 20,
                'clave' => '250',
                'nombre' => 'San Mateo Etlatongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'estado_id' => 20,
                'clave' => '251',
                'nombre' => 'San Mateo Nejápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'estado_id' => 20,
                'clave' => '252',
                'nombre' => 'San Mateo Peñasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'estado_id' => 20,
                'clave' => '253',
                'nombre' => 'San Mateo Piñas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'estado_id' => 20,
                'clave' => '254',
                'nombre' => 'San Mateo Río Hondo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'estado_id' => 20,
                'clave' => '255',
                'nombre' => 'San Mateo Sindihui',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'estado_id' => 20,
                'clave' => '256',
                'nombre' => 'San Mateo Tlapiltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'estado_id' => 20,
                'clave' => '257',
                'nombre' => 'San Melchor Betaza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'estado_id' => 20,
                'clave' => '258',
                'nombre' => 'San Miguel Achiutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'estado_id' => 20,
                'clave' => '259',
                'nombre' => 'San Miguel Ahuehuetitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'estado_id' => 20,
                'clave' => '260',
                'nombre' => 'San Miguel Aloápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'estado_id' => 20,
                'clave' => '261',
                'nombre' => 'San Miguel Amatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'estado_id' => 20,
                'clave' => '262',
                'nombre' => 'San Miguel Amatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'estado_id' => 20,
                'clave' => '263',
                'nombre' => 'San Miguel Coatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'estado_id' => 20,
                'clave' => '264',
                'nombre' => 'San Miguel Chicahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'estado_id' => 20,
                'clave' => '265',
                'nombre' => 'San Miguel Chimalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'estado_id' => 20,
                'clave' => '266',
                'nombre' => 'San Miguel del Puerto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'estado_id' => 20,
                'clave' => '267',
                'nombre' => 'San Miguel del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'estado_id' => 20,
                'clave' => '268',
                'nombre' => 'San Miguel Ejutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'estado_id' => 20,
                'clave' => '269',
                'nombre' => 'San Miguel el Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'estado_id' => 20,
                'clave' => '270',
                'nombre' => 'San Miguel Huautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'estado_id' => 20,
                'clave' => '271',
                'nombre' => 'San Miguel Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'estado_id' => 20,
                'clave' => '272',
                'nombre' => 'San Miguel Panixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'estado_id' => 20,
                'clave' => '273',
                'nombre' => 'San Miguel Peras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'estado_id' => 20,
                'clave' => '274',
                'nombre' => 'San Miguel Piedras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'estado_id' => 20,
                'clave' => '275',
                'nombre' => 'San Miguel Quetzaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'estado_id' => 20,
                'clave' => '276',
                'nombre' => 'San Miguel Santa Flor',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'estado_id' => 20,
                'clave' => '277',
                'nombre' => 'Villa Sola de Vega',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'estado_id' => 20,
                'clave' => '278',
                'nombre' => 'San Miguel Soyaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'estado_id' => 20,
                'clave' => '279',
                'nombre' => 'San Miguel Suchixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'estado_id' => 20,
                'clave' => '280',
                'nombre' => 'Villa Talea de Castro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'estado_id' => 20,
                'clave' => '281',
                'nombre' => 'San Miguel Tecomatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'estado_id' => 20,
                'clave' => '282',
                'nombre' => 'San Miguel Tenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'estado_id' => 20,
                'clave' => '283',
                'nombre' => 'San Miguel Tequixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'estado_id' => 20,
                'clave' => '284',
                'nombre' => 'San Miguel Tilquiápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'estado_id' => 20,
                'clave' => '285',
                'nombre' => 'San Miguel Tlacamama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'estado_id' => 20,
                'clave' => '286',
                'nombre' => 'San Miguel Tlacotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'estado_id' => 20,
                'clave' => '287',
                'nombre' => 'San Miguel Tulancingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'estado_id' => 20,
                'clave' => '288',
                'nombre' => 'San Miguel Yotao',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'estado_id' => 20,
                'clave' => '289',
                'nombre' => 'San Nicolás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'estado_id' => 20,
                'clave' => '290',
                'nombre' => 'San Nicolás Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'estado_id' => 20,
                'clave' => '291',
                'nombre' => 'San Pablo Coatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'estado_id' => 20,
                'clave' => '292',
                'nombre' => 'San Pablo Cuatro Venados',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'estado_id' => 20,
                'clave' => '293',
                'nombre' => 'San Pablo Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'estado_id' => 20,
                'clave' => '294',
                'nombre' => 'San Pablo Huitzo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'estado_id' => 20,
                'clave' => '295',
                'nombre' => 'San Pablo Huixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'estado_id' => 20,
                'clave' => '296',
                'nombre' => 'San Pablo Macuiltianguis',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'estado_id' => 20,
                'clave' => '297',
                'nombre' => 'San Pablo Tijaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'estado_id' => 20,
                'clave' => '298',
                'nombre' => 'San Pablo Villa de Mitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'estado_id' => 20,
                'clave' => '299',
                'nombre' => 'San Pablo Yaganiza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'estado_id' => 20,
                'clave' => '300',
                'nombre' => 'San Pedro Amuzgos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'estado_id' => 20,
                'clave' => '301',
                'nombre' => 'San Pedro Apóstol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'estado_id' => 20,
                'clave' => '302',
                'nombre' => 'San Pedro Atoyac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'estado_id' => 20,
                'clave' => '303',
                'nombre' => 'San Pedro Cajonos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'estado_id' => 20,
                'clave' => '304',
                'nombre' => 'San Pedro Coxcaltepec Cántaros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'estado_id' => 20,
                'clave' => '305',
                'nombre' => 'San Pedro Comitancillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'estado_id' => 20,
                'clave' => '306',
                'nombre' => 'San Pedro el Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'estado_id' => 20,
                'clave' => '307',
                'nombre' => 'San Pedro Huamelula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'estado_id' => 20,
                'clave' => '308',
                'nombre' => 'San Pedro Huilotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'estado_id' => 20,
                'clave' => '309',
                'nombre' => 'San Pedro Ixcatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'estado_id' => 20,
                'clave' => '310',
                'nombre' => 'San Pedro Ixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'estado_id' => 20,
                'clave' => '311',
                'nombre' => 'San Pedro Jaltepetongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'estado_id' => 20,
                'clave' => '312',
                'nombre' => 'San Pedro Jicayán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'estado_id' => 20,
                'clave' => '313',
                'nombre' => 'San Pedro Jocotipac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'estado_id' => 20,
                'clave' => '314',
                'nombre' => 'San Pedro Juchatengo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'estado_id' => 20,
                'clave' => '315',
                'nombre' => 'San Pedro Mártir',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'estado_id' => 20,
                'clave' => '316',
                'nombre' => 'San Pedro Mártir Quiechapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'estado_id' => 20,
                'clave' => '317',
                'nombre' => 'San Pedro Mártir Yucuxaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'estado_id' => 20,
                'clave' => '318',
                'nombre' => 'San Pedro Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'estado_id' => 20,
                'clave' => '319',
                'nombre' => 'San Pedro Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'estado_id' => 20,
                'clave' => '320',
                'nombre' => 'San Pedro Molinos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'estado_id' => 20,
                'clave' => '321',
                'nombre' => 'San Pedro Nopala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'estado_id' => 20,
                'clave' => '322',
                'nombre' => 'San Pedro Ocopetatillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'estado_id' => 20,
                'clave' => '323',
                'nombre' => 'San Pedro Ocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'estado_id' => 20,
                'clave' => '324',
                'nombre' => 'San Pedro Pochutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'estado_id' => 20,
                'clave' => '325',
                'nombre' => 'San Pedro Quiatoni',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'estado_id' => 20,
                'clave' => '326',
                'nombre' => 'San Pedro Sochiápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'estado_id' => 20,
                'clave' => '327',
                'nombre' => 'San Pedro Tapanatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'estado_id' => 20,
                'clave' => '328',
                'nombre' => 'San Pedro Taviche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'estado_id' => 20,
                'clave' => '329',
                'nombre' => 'San Pedro Teozacoalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'estado_id' => 20,
                'clave' => '330',
                'nombre' => 'San Pedro Teutila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'estado_id' => 20,
                'clave' => '331',
                'nombre' => 'San Pedro Tidaá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'estado_id' => 20,
                'clave' => '332',
                'nombre' => 'San Pedro Topiltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'estado_id' => 20,
                'clave' => '333',
                'nombre' => 'San Pedro Totolápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'estado_id' => 20,
                'clave' => '334',
                'nombre' => 'Villa de Tututepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'estado_id' => 20,
                'clave' => '335',
                'nombre' => 'San Pedro Yaneri',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'estado_id' => 20,
                'clave' => '336',
                'nombre' => 'San Pedro Yólox',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'estado_id' => 20,
                'clave' => '337',
                'nombre' => 'San Pedro y San Pablo Ayutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'estado_id' => 20,
                'clave' => '338',
                'nombre' => 'Villa de Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'estado_id' => 20,
                'clave' => '339',
                'nombre' => 'San Pedro y San Pablo Teposcolula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'estado_id' => 20,
                'clave' => '340',
                'nombre' => 'San Pedro y San Pablo Tequixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'estado_id' => 20,
                'clave' => '341',
                'nombre' => 'San Pedro Yucunama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'estado_id' => 20,
                'clave' => '342',
                'nombre' => 'San Raymundo Jalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'estado_id' => 20,
                'clave' => '343',
                'nombre' => 'San Sebastián Abasolo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'estado_id' => 20,
                'clave' => '344',
                'nombre' => 'San Sebastián Coatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'estado_id' => 20,
                'clave' => '345',
                'nombre' => 'San Sebastián Ixcapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'estado_id' => 20,
                'clave' => '346',
                'nombre' => 'San Sebastián Nicananduta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'estado_id' => 20,
                'clave' => '347',
                'nombre' => 'San Sebastián Río Hondo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'estado_id' => 20,
                'clave' => '348',
                'nombre' => 'San Sebastián Tecomaxtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'estado_id' => 20,
                'clave' => '349',
                'nombre' => 'San Sebastián Teitipac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'estado_id' => 20,
                'clave' => '350',
                'nombre' => 'San Sebastián Tutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'estado_id' => 20,
                'clave' => '351',
                'nombre' => 'San Simón Almolongas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'estado_id' => 20,
                'clave' => '352',
                'nombre' => 'San Simón Zahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'estado_id' => 20,
                'clave' => '353',
                'nombre' => 'Santa Ana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'estado_id' => 20,
                'clave' => '354',
                'nombre' => 'Santa Ana Ateixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'estado_id' => 20,
                'clave' => '355',
                'nombre' => 'Santa Ana Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'estado_id' => 20,
                'clave' => '356',
                'nombre' => 'Santa Ana del Valle',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'estado_id' => 20,
                'clave' => '357',
                'nombre' => 'Santa Ana Tavela',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'estado_id' => 20,
                'clave' => '358',
                'nombre' => 'Santa Ana Tlapacoyan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'estado_id' => 20,
                'clave' => '359',
                'nombre' => 'Santa Ana Yareni',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'estado_id' => 20,
                'clave' => '360',
                'nombre' => 'Santa Ana Zegache',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'estado_id' => 20,
                'clave' => '361',
                'nombre' => 'Santa Catalina Quierí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'estado_id' => 20,
                'clave' => '362',
                'nombre' => 'Santa Catarina Cuixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'estado_id' => 20,
                'clave' => '363',
                'nombre' => 'Santa Catarina Ixtepeji',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'estado_id' => 20,
                'clave' => '364',
                'nombre' => 'Santa Catarina Juquila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'estado_id' => 20,
                'clave' => '365',
                'nombre' => 'Santa Catarina Lachatao',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'estado_id' => 20,
                'clave' => '366',
                'nombre' => 'Santa Catarina Loxicha',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'estado_id' => 20,
                'clave' => '367',
                'nombre' => 'Santa Catarina Mechoacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'estado_id' => 20,
                'clave' => '368',
                'nombre' => 'Santa Catarina Minas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'estado_id' => 20,
                'clave' => '369',
                'nombre' => 'Santa Catarina Quiané',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'estado_id' => 20,
                'clave' => '370',
                'nombre' => 'Santa Catarina Tayata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'estado_id' => 20,
                'clave' => '371',
                'nombre' => 'Santa Catarina Ticuá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'estado_id' => 20,
                'clave' => '372',
                'nombre' => 'Santa Catarina Yosonotú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'estado_id' => 20,
                'clave' => '373',
                'nombre' => 'Santa Catarina Zapoquila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'estado_id' => 20,
                'clave' => '374',
                'nombre' => 'Santa Cruz Acatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'estado_id' => 20,
                'clave' => '375',
                'nombre' => 'Santa Cruz Amilpas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'estado_id' => 20,
                'clave' => '376',
                'nombre' => 'Santa Cruz de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'estado_id' => 20,
                'clave' => '377',
                'nombre' => 'Santa Cruz Itundujia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'estado_id' => 20,
                'clave' => '378',
                'nombre' => 'Santa Cruz Mixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'estado_id' => 20,
                'clave' => '379',
                'nombre' => 'Santa Cruz Nundaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'estado_id' => 20,
                'clave' => '380',
                'nombre' => 'Santa Cruz Papalutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'estado_id' => 20,
                'clave' => '381',
                'nombre' => 'Santa Cruz Tacache de Mina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'estado_id' => 20,
                'clave' => '382',
                'nombre' => 'Santa Cruz Tacahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'estado_id' => 20,
                'clave' => '383',
                'nombre' => 'Santa Cruz Tayata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'estado_id' => 20,
                'clave' => '384',
                'nombre' => 'Santa Cruz Xitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'estado_id' => 20,
                'clave' => '385',
                'nombre' => 'Santa Cruz Xoxocotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'estado_id' => 20,
                'clave' => '386',
                'nombre' => 'Santa Cruz Zenzontepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'estado_id' => 20,
                'clave' => '387',
                'nombre' => 'Santa Gertrudis',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'estado_id' => 20,
                'clave' => '388',
                'nombre' => 'Santa Inés del Monte',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'estado_id' => 20,
                'clave' => '389',
                'nombre' => 'Santa Inés Yatzeche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'estado_id' => 20,
                'clave' => '390',
                'nombre' => 'Santa Lucía del Camino',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'estado_id' => 20,
                'clave' => '391',
                'nombre' => 'Santa Lucía Miahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'estado_id' => 20,
                'clave' => '392',
                'nombre' => 'Santa Lucía Monteverde',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'estado_id' => 20,
                'clave' => '393',
                'nombre' => 'Santa Lucía Ocotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'estado_id' => 20,
                'clave' => '394',
                'nombre' => 'Santa María Alotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'estado_id' => 20,
                'clave' => '395',
                'nombre' => 'Santa María Apazco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'estado_id' => 20,
                'clave' => '396',
                'nombre' => 'Santa María la Asunción',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'estado_id' => 20,
                'clave' => '397',
                'nombre' => 'Heroica Ciudad de Tlaxiaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'estado_id' => 20,
                'clave' => '398',
                'nombre' => 'Ayoquezco de Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'estado_id' => 20,
                'clave' => '399',
                'nombre' => 'Santa María Atzompa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'estado_id' => 20,
                'clave' => '400',
                'nombre' => 'Santa María Camotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'estado_id' => 20,
                'clave' => '401',
                'nombre' => 'Santa María Colotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'estado_id' => 20,
                'clave' => '402',
                'nombre' => 'Santa María Cortijo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'estado_id' => 20,
                'clave' => '403',
                'nombre' => 'Santa María Coyotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'estado_id' => 20,
                'clave' => '404',
                'nombre' => 'Santa María Chachoápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'estado_id' => 20,
                'clave' => '405',
                'nombre' => 'Villa de Chilapa de Díaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'estado_id' => 20,
                'clave' => '406',
                'nombre' => 'Santa María Chilchotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'estado_id' => 20,
                'clave' => '407',
                'nombre' => 'Santa María Chimalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'estado_id' => 20,
                'clave' => '408',
                'nombre' => 'Santa María del Rosario',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'estado_id' => 20,
                'clave' => '409',
                'nombre' => 'Santa María del Tule',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'estado_id' => 20,
                'clave' => '410',
                'nombre' => 'Santa María Ecatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'estado_id' => 20,
                'clave' => '411',
                'nombre' => 'Santa María Guelacé',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'estado_id' => 20,
                'clave' => '412',
                'nombre' => 'Santa María Guienagati',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'estado_id' => 20,
                'clave' => '413',
                'nombre' => 'Santa María Huatulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'estado_id' => 20,
                'clave' => '414',
                'nombre' => 'Santa María Huazolotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'estado_id' => 20,
                'clave' => '415',
                'nombre' => 'Santa María Ipalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'estado_id' => 20,
                'clave' => '416',
                'nombre' => 'Santa María Ixcatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'estado_id' => 20,
                'clave' => '417',
                'nombre' => 'Santa María Jacatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'estado_id' => 20,
                'clave' => '418',
                'nombre' => 'Santa María Jalapa del Marqués',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'estado_id' => 20,
                'clave' => '419',
                'nombre' => 'Santa María Jaltianguis',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'estado_id' => 20,
                'clave' => '420',
                'nombre' => 'Santa María Lachixío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'estado_id' => 20,
                'clave' => '421',
                'nombre' => 'Santa María Mixtequilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'estado_id' => 20,
                'clave' => '422',
                'nombre' => 'Santa María Nativitas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'estado_id' => 20,
                'clave' => '423',
                'nombre' => 'Santa María Nduayaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'estado_id' => 20,
                'clave' => '424',
                'nombre' => 'Santa María Ozolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'estado_id' => 20,
                'clave' => '425',
                'nombre' => 'Santa María Pápalo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'estado_id' => 20,
                'clave' => '426',
                'nombre' => 'Santa María Peñoles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'estado_id' => 20,
                'clave' => '427',
                'nombre' => 'Santa María Petapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'estado_id' => 20,
                'clave' => '428',
                'nombre' => 'Santa María Quiegolani',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'estado_id' => 20,
                'clave' => '429',
                'nombre' => 'Santa María Sola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'estado_id' => 20,
                'clave' => '430',
                'nombre' => 'Santa María Tataltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'estado_id' => 20,
                'clave' => '431',
                'nombre' => 'Santa María Tecomavaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'estado_id' => 20,
                'clave' => '432',
                'nombre' => 'Santa María Temaxcalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'estado_id' => 20,
                'clave' => '433',
                'nombre' => 'Santa María Temaxcaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'estado_id' => 20,
                'clave' => '434',
                'nombre' => 'Santa María Teopoxco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'estado_id' => 20,
                'clave' => '435',
                'nombre' => 'Santa María Tepantlali',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'estado_id' => 20,
                'clave' => '436',
                'nombre' => 'Santa María Texcatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'estado_id' => 20,
                'clave' => '437',
                'nombre' => 'Santa María Tlahuitoltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'estado_id' => 20,
                'clave' => '438',
                'nombre' => 'Santa María Tlalixtac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'estado_id' => 20,
                'clave' => '439',
                'nombre' => 'Santa María Tonameca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'estado_id' => 20,
                'clave' => '440',
                'nombre' => 'Santa María Totolapilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'estado_id' => 20,
                'clave' => '441',
                'nombre' => 'Santa María Xadani',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'estado_id' => 20,
                'clave' => '442',
                'nombre' => 'Santa María Yalina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'estado_id' => 20,
                'clave' => '443',
                'nombre' => 'Santa María Yavesía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'estado_id' => 20,
                'clave' => '444',
                'nombre' => 'Santa María Yolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'estado_id' => 20,
                'clave' => '445',
                'nombre' => 'Santa María Yosoyúa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'estado_id' => 20,
                'clave' => '446',
                'nombre' => 'Santa María Yucuhiti',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'estado_id' => 20,
                'clave' => '447',
                'nombre' => 'Santa María Zacatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'estado_id' => 20,
                'clave' => '448',
                'nombre' => 'Santa María Zaniza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'estado_id' => 20,
                'clave' => '449',
                'nombre' => 'Santa María Zoquitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'estado_id' => 20,
                'clave' => '450',
                'nombre' => 'Santiago Amoltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'estado_id' => 20,
                'clave' => '451',
                'nombre' => 'Santiago Apoala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'estado_id' => 20,
                'clave' => '452',
                'nombre' => 'Santiago Apóstol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'estado_id' => 20,
                'clave' => '453',
                'nombre' => 'Santiago Astata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'estado_id' => 20,
                'clave' => '454',
                'nombre' => 'Santiago Atitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'estado_id' => 20,
                'clave' => '455',
                'nombre' => 'Santiago Ayuquililla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'estado_id' => 20,
                'clave' => '456',
                'nombre' => 'Santiago Cacaloxtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'estado_id' => 20,
                'clave' => '457',
                'nombre' => 'Santiago Camotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'estado_id' => 20,
                'clave' => '458',
                'nombre' => 'Santiago Comaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'estado_id' => 20,
                'clave' => '459',
                'nombre' => 'Santiago Chazumba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'estado_id' => 20,
                'clave' => '460',
                'nombre' => 'Santiago Choápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'estado_id' => 20,
                'clave' => '461',
                'nombre' => 'Santiago del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'estado_id' => 20,
                'clave' => '462',
                'nombre' => 'Santiago Huajolotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'estado_id' => 20,
                'clave' => '463',
                'nombre' => 'Santiago Huauclilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'estado_id' => 20,
                'clave' => '464',
                'nombre' => 'Santiago Ihuitlán Plumas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'estado_id' => 20,
                'clave' => '465',
                'nombre' => 'Santiago Ixcuintepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'estado_id' => 20,
                'clave' => '466',
                'nombre' => 'Santiago Ixtayutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'estado_id' => 20,
                'clave' => '467',
                'nombre' => 'Santiago Jamiltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'estado_id' => 20,
                'clave' => '468',
                'nombre' => 'Santiago Jocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'estado_id' => 20,
                'clave' => '469',
                'nombre' => 'Santiago Juxtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'estado_id' => 20,
                'clave' => '470',
                'nombre' => 'Santiago Lachiguiri',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'estado_id' => 20,
                'clave' => '471',
                'nombre' => 'Santiago Lalopa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'estado_id' => 20,
                'clave' => '472',
                'nombre' => 'Santiago Laollaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'estado_id' => 20,
                'clave' => '473',
                'nombre' => 'Santiago Laxopa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'estado_id' => 20,
                'clave' => '474',
                'nombre' => 'Santiago Llano Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'estado_id' => 20,
                'clave' => '475',
                'nombre' => 'Santiago Matatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'estado_id' => 20,
                'clave' => '476',
                'nombre' => 'Santiago Miltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'estado_id' => 20,
                'clave' => '477',
                'nombre' => 'Santiago Minas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'estado_id' => 20,
                'clave' => '478',
                'nombre' => 'Santiago Nacaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'estado_id' => 20,
                'clave' => '479',
                'nombre' => 'Santiago Nejapilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'estado_id' => 20,
                'clave' => '480',
                'nombre' => 'Santiago Nundiche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'estado_id' => 20,
                'clave' => '481',
                'nombre' => 'Santiago Nuyoó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'estado_id' => 20,
                'clave' => '482',
                'nombre' => 'Santiago Pinotepa Nacional',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'estado_id' => 20,
                'clave' => '483',
                'nombre' => 'Santiago Suchilquitongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'estado_id' => 20,
                'clave' => '484',
                'nombre' => 'Santiago Tamazola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'estado_id' => 20,
                'clave' => '485',
                'nombre' => 'Santiago Tapextla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'estado_id' => 20,
                'clave' => '486',
                'nombre' => 'Villa Tejúpam de la Unión',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'estado_id' => 20,
                'clave' => '487',
                'nombre' => 'Santiago Tenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'estado_id' => 20,
                'clave' => '488',
                'nombre' => 'Santiago Tepetlapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'estado_id' => 20,
                'clave' => '489',
                'nombre' => 'Santiago Tetepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'estado_id' => 20,
                'clave' => '490',
                'nombre' => 'Santiago Texcalcingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'estado_id' => 20,
                'clave' => '491',
                'nombre' => 'Santiago Textitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'estado_id' => 20,
                'clave' => '492',
                'nombre' => 'Santiago Tilantongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'estado_id' => 20,
                'clave' => '493',
                'nombre' => 'Santiago Tillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'estado_id' => 20,
                'clave' => '494',
                'nombre' => 'Santiago Tlazoyaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'estado_id' => 20,
                'clave' => '495',
                'nombre' => 'Santiago Xanica',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'estado_id' => 20,
                'clave' => '496',
                'nombre' => 'Santiago Xiacuí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'estado_id' => 20,
                'clave' => '497',
                'nombre' => 'Santiago Yaitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cat_municipios')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'estado_id' => 20,
                'clave' => '498',
                'nombre' => 'Santiago Yaveo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'estado_id' => 20,
                'clave' => '499',
                'nombre' => 'Santiago Yolomécatl',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'estado_id' => 20,
                'clave' => '500',
                'nombre' => 'Santiago Yosondúa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'estado_id' => 20,
                'clave' => '501',
                'nombre' => 'Santiago Yucuyachi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'estado_id' => 20,
                'clave' => '502',
                'nombre' => 'Santiago Zacatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'estado_id' => 20,
                'clave' => '503',
                'nombre' => 'Santiago Zoochila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'estado_id' => 20,
                'clave' => '504',
                'nombre' => 'Nuevo Zoquiápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'estado_id' => 20,
                'clave' => '505',
                'nombre' => 'Santo Domingo Ingenio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'estado_id' => 20,
                'clave' => '506',
                'nombre' => 'Santo Domingo Albarradas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'estado_id' => 20,
                'clave' => '507',
                'nombre' => 'Santo Domingo Armenta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'estado_id' => 20,
                'clave' => '508',
                'nombre' => 'Santo Domingo Chihuitán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'estado_id' => 20,
                'clave' => '509',
                'nombre' => 'Santo Domingo de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'estado_id' => 20,
                'clave' => '510',
                'nombre' => 'Santo Domingo Ixcatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'estado_id' => 20,
                'clave' => '511',
                'nombre' => 'Santo Domingo Nuxaá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'estado_id' => 20,
                'clave' => '512',
                'nombre' => 'Santo Domingo Ozolotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'estado_id' => 20,
                'clave' => '513',
                'nombre' => 'Santo Domingo Petapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'estado_id' => 20,
                'clave' => '514',
                'nombre' => 'Santo Domingo Roayaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'estado_id' => 20,
                'clave' => '515',
                'nombre' => 'Santo Domingo Tehuantepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'estado_id' => 20,
                'clave' => '516',
                'nombre' => 'Santo Domingo Teojomulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'estado_id' => 20,
                'clave' => '517',
                'nombre' => 'Santo Domingo Tepuxtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'estado_id' => 20,
                'clave' => '518',
                'nombre' => 'Santo Domingo Tlatayápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'estado_id' => 20,
                'clave' => '519',
                'nombre' => 'Santo Domingo Tomaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'estado_id' => 20,
                'clave' => '520',
                'nombre' => 'Santo Domingo Tonalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'estado_id' => 20,
                'clave' => '521',
                'nombre' => 'Santo Domingo Tonaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'estado_id' => 20,
                'clave' => '522',
                'nombre' => 'Santo Domingo Xagacía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'estado_id' => 20,
                'clave' => '523',
                'nombre' => 'Santo Domingo Yanhuitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'estado_id' => 20,
                'clave' => '524',
                'nombre' => 'Santo Domingo Yodohino',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'estado_id' => 20,
                'clave' => '525',
                'nombre' => 'Santo Domingo Zanatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'estado_id' => 20,
                'clave' => '526',
                'nombre' => 'Santos Reyes Nopala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'estado_id' => 20,
                'clave' => '527',
                'nombre' => 'Santos Reyes Pápalo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'estado_id' => 20,
                'clave' => '528',
                'nombre' => 'Santos Reyes Tepejillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'estado_id' => 20,
                'clave' => '529',
                'nombre' => 'Santos Reyes Yucuná',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'estado_id' => 20,
                'clave' => '530',
                'nombre' => 'Santo Tomás Jalieza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'estado_id' => 20,
                'clave' => '531',
                'nombre' => 'Santo Tomás Mazaltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'estado_id' => 20,
                'clave' => '532',
                'nombre' => 'Santo Tomás Ocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'estado_id' => 20,
                'clave' => '533',
                'nombre' => 'Santo Tomás Tamazulapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'estado_id' => 20,
                'clave' => '534',
                'nombre' => 'San Vicente Coatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'estado_id' => 20,
                'clave' => '535',
                'nombre' => 'San Vicente Lachixío',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'estado_id' => 20,
                'clave' => '536',
                'nombre' => 'San Vicente Nuñú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'estado_id' => 20,
                'clave' => '537',
                'nombre' => 'Silacayoápam',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'estado_id' => 20,
                'clave' => '538',
                'nombre' => 'Sitio de Xitlapehua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'estado_id' => 20,
                'clave' => '539',
                'nombre' => 'Soledad Etla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'estado_id' => 20,
                'clave' => '540',
                'nombre' => 'Villa de Tamazulápam del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'estado_id' => 20,
                'clave' => '541',
                'nombre' => 'Tanetze de Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'estado_id' => 20,
                'clave' => '542',
                'nombre' => 'Taniche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'estado_id' => 20,
                'clave' => '543',
                'nombre' => 'Tataltepec de Valdés',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'estado_id' => 20,
                'clave' => '544',
                'nombre' => 'Teococuilco de Marcos Pérez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'estado_id' => 20,
                'clave' => '545',
                'nombre' => 'Teotitlán de Flores Magón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'estado_id' => 20,
                'clave' => '546',
                'nombre' => 'Teotitlán del Valle',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'estado_id' => 20,
                'clave' => '547',
                'nombre' => 'Teotongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'estado_id' => 20,
                'clave' => '548',
                'nombre' => 'Tepelmeme Villa de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'estado_id' => 20,
                'clave' => '549',
                'nombre' => 'Heroica Villa Tezoatlán de Segura y Luna, Cuna de la Independencia de Oaxaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'estado_id' => 20,
                'clave' => '550',
                'nombre' => 'San Jerónimo Tlacochahuaya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'estado_id' => 20,
                'clave' => '551',
                'nombre' => 'Tlacolula de Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'estado_id' => 20,
                'clave' => '552',
                'nombre' => 'Tlacotepec Plumas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'estado_id' => 20,
                'clave' => '553',
                'nombre' => 'Tlalixtac de Cabrera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'estado_id' => 20,
                'clave' => '554',
                'nombre' => 'Totontepec Villa de Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'estado_id' => 20,
                'clave' => '555',
                'nombre' => 'Trinidad Zaachila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'estado_id' => 20,
                'clave' => '556',
                'nombre' => 'La Trinidad Vista Hermosa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'estado_id' => 20,
                'clave' => '557',
                'nombre' => 'Unión Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'estado_id' => 20,
                'clave' => '558',
                'nombre' => 'Valerio Trujano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'estado_id' => 20,
                'clave' => '559',
                'nombre' => 'San Juan Bautista Valle Nacional',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'estado_id' => 20,
                'clave' => '560',
                'nombre' => 'Villa Díaz Ordaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'estado_id' => 20,
                'clave' => '561',
                'nombre' => 'Yaxe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'estado_id' => 20,
                'clave' => '562',
                'nombre' => 'Magdalena Yodocono de Porfirio Díaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'estado_id' => 20,
                'clave' => '563',
                'nombre' => 'Yogana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'estado_id' => 20,
                'clave' => '564',
                'nombre' => 'Yutanduchi de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'estado_id' => 20,
                'clave' => '565',
                'nombre' => 'Villa de Zaachila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'estado_id' => 20,
                'clave' => '566',
                'nombre' => 'San Mateo Yucutindoo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'estado_id' => 20,
                'clave' => '567',
                'nombre' => 'Zapotitlán Lagunas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'estado_id' => 20,
                'clave' => '568',
                'nombre' => 'Zapotitlán Palmas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'estado_id' => 20,
                'clave' => '569',
                'nombre' => 'Santa Inés de Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'estado_id' => 20,
                'clave' => '570',
                'nombre' => 'Zimatlán de Álvarez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'estado_id' => 21,
                'clave' => '001',
                'nombre' => 'Acajete',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'estado_id' => 21,
                'clave' => '002',
                'nombre' => 'Acateno',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'estado_id' => 21,
                'clave' => '003',
                'nombre' => 'Acatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'estado_id' => 21,
                'clave' => '004',
                'nombre' => 'Acatzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'estado_id' => 21,
                'clave' => '005',
                'nombre' => 'Acteopan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'estado_id' => 21,
                'clave' => '006',
                'nombre' => 'Ahuacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'estado_id' => 21,
                'clave' => '007',
                'nombre' => 'Ahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'estado_id' => 21,
                'clave' => '008',
                'nombre' => 'Ahuazotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'estado_id' => 21,
                'clave' => '009',
                'nombre' => 'Ahuehuetitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'estado_id' => 21,
                'clave' => '010',
                'nombre' => 'Ajalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'estado_id' => 21,
                'clave' => '011',
                'nombre' => 'Albino Zertuche',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'estado_id' => 21,
                'clave' => '012',
                'nombre' => 'Aljojuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'estado_id' => 21,
                'clave' => '013',
                'nombre' => 'Altepexi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'estado_id' => 21,
                'clave' => '014',
                'nombre' => 'Amixtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'estado_id' => 21,
                'clave' => '015',
                'nombre' => 'Amozoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'estado_id' => 21,
                'clave' => '016',
                'nombre' => 'Aquixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'estado_id' => 21,
                'clave' => '017',
                'nombre' => 'Atempan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'estado_id' => 21,
                'clave' => '018',
                'nombre' => 'Atexcal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'estado_id' => 21,
                'clave' => '019',
                'nombre' => 'Atlixco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'estado_id' => 21,
                'clave' => '020',
                'nombre' => 'Atoyatempan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'estado_id' => 21,
                'clave' => '021',
                'nombre' => 'Atzala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'estado_id' => 21,
                'clave' => '022',
                'nombre' => 'Atzitzihuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'estado_id' => 21,
                'clave' => '023',
                'nombre' => 'Atzitzintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'estado_id' => 21,
                'clave' => '024',
                'nombre' => 'Axutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'estado_id' => 21,
                'clave' => '025',
                'nombre' => 'Ayotoxco de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'estado_id' => 21,
                'clave' => '026',
                'nombre' => 'Calpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'estado_id' => 21,
                'clave' => '027',
                'nombre' => 'Caltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'estado_id' => 21,
                'clave' => '028',
                'nombre' => 'Camocuautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'estado_id' => 21,
                'clave' => '029',
                'nombre' => 'Caxhuacan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'estado_id' => 21,
                'clave' => '030',
                'nombre' => 'Coatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'estado_id' => 21,
                'clave' => '031',
                'nombre' => 'Coatzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'estado_id' => 21,
                'clave' => '032',
                'nombre' => 'Cohetzala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'estado_id' => 21,
                'clave' => '033',
                'nombre' => 'Cohuecan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'estado_id' => 21,
                'clave' => '034',
                'nombre' => 'Coronango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'estado_id' => 21,
                'clave' => '035',
                'nombre' => 'Coxcatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'estado_id' => 21,
                'clave' => '036',
                'nombre' => 'Coyomeapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'estado_id' => 21,
                'clave' => '037',
                'nombre' => 'Coyotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'estado_id' => 21,
                'clave' => '038',
                'nombre' => 'Cuapiaxtla de Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'estado_id' => 21,
                'clave' => '039',
                'nombre' => 'Cuautempan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'estado_id' => 21,
                'clave' => '040',
                'nombre' => 'Cuautinchán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'estado_id' => 21,
                'clave' => '041',
                'nombre' => 'Cuautlancingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'estado_id' => 21,
                'clave' => '042',
                'nombre' => 'Cuayuca de Andrade',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'estado_id' => 21,
                'clave' => '043',
                'nombre' => 'Cuetzalan del Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'estado_id' => 21,
                'clave' => '044',
                'nombre' => 'Cuyoaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'estado_id' => 21,
                'clave' => '045',
                'nombre' => 'Chalchicomula de Sesma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'estado_id' => 21,
                'clave' => '046',
                'nombre' => 'Chapulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'estado_id' => 21,
                'clave' => '047',
                'nombre' => 'Chiautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'estado_id' => 21,
                'clave' => '048',
                'nombre' => 'Chiautzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'estado_id' => 21,
                'clave' => '049',
                'nombre' => 'Chiconcuautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'estado_id' => 21,
                'clave' => '050',
                'nombre' => 'Chichiquila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'estado_id' => 21,
                'clave' => '051',
                'nombre' => 'Chietla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'estado_id' => 21,
                'clave' => '052',
                'nombre' => 'Chigmecatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'estado_id' => 21,
                'clave' => '053',
                'nombre' => 'Chignahuapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'estado_id' => 21,
                'clave' => '054',
                'nombre' => 'Chignautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'estado_id' => 21,
                'clave' => '055',
                'nombre' => 'Chila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'estado_id' => 21,
                'clave' => '056',
                'nombre' => 'Chila de la Sal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'estado_id' => 21,
                'clave' => '057',
                'nombre' => 'Honey',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'estado_id' => 21,
                'clave' => '058',
                'nombre' => 'Chilchotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'estado_id' => 21,
                'clave' => '059',
                'nombre' => 'Chinantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'estado_id' => 21,
                'clave' => '060',
                'nombre' => 'Domingo Arenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'estado_id' => 21,
                'clave' => '061',
                'nombre' => 'Eloxochitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'estado_id' => 21,
                'clave' => '062',
                'nombre' => 'Epatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'estado_id' => 21,
                'clave' => '063',
                'nombre' => 'Esperanza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'estado_id' => 21,
                'clave' => '064',
                'nombre' => 'Francisco Z. Mena',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'estado_id' => 21,
                'clave' => '065',
                'nombre' => 'General Felipe Ángeles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'estado_id' => 21,
                'clave' => '066',
                'nombre' => 'Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'estado_id' => 21,
                'clave' => '067',
                'nombre' => 'Guadalupe Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'estado_id' => 21,
                'clave' => '068',
                'nombre' => 'Hermenegildo Galeana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'estado_id' => 21,
                'clave' => '069',
                'nombre' => 'Huaquechula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'estado_id' => 21,
                'clave' => '070',
                'nombre' => 'Huatlatlauca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'estado_id' => 21,
                'clave' => '071',
                'nombre' => 'Huauchinango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'estado_id' => 21,
                'clave' => '072',
                'nombre' => 'Huehuetla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'estado_id' => 21,
                'clave' => '073',
                'nombre' => 'Huehuetlán el Chico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'estado_id' => 21,
                'clave' => '074',
                'nombre' => 'Huejotzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'estado_id' => 21,
                'clave' => '075',
                'nombre' => 'Hueyapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'estado_id' => 21,
                'clave' => '076',
                'nombre' => 'Hueytamalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'estado_id' => 21,
                'clave' => '077',
                'nombre' => 'Hueytlalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'estado_id' => 21,
                'clave' => '078',
                'nombre' => 'Huitzilan de Serdán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'estado_id' => 21,
                'clave' => '079',
                'nombre' => 'Huitziltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'estado_id' => 21,
                'clave' => '080',
                'nombre' => 'Atlequizayan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'estado_id' => 21,
                'clave' => '081',
                'nombre' => 'Ixcamilpa de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'estado_id' => 21,
                'clave' => '082',
                'nombre' => 'Ixcaquixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'estado_id' => 21,
                'clave' => '083',
                'nombre' => 'Ixtacamaxtitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'estado_id' => 21,
                'clave' => '084',
                'nombre' => 'Ixtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'estado_id' => 21,
                'clave' => '085',
                'nombre' => 'Izúcar de Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'estado_id' => 21,
                'clave' => '086',
                'nombre' => 'Jalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'estado_id' => 21,
                'clave' => '087',
                'nombre' => 'Jolalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'estado_id' => 21,
                'clave' => '088',
                'nombre' => 'Jonotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'estado_id' => 21,
                'clave' => '089',
                'nombre' => 'Jopala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'estado_id' => 21,
                'clave' => '090',
                'nombre' => 'Juan C. Bonilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'estado_id' => 21,
                'clave' => '091',
                'nombre' => 'Juan Galindo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'estado_id' => 21,
                'clave' => '092',
                'nombre' => 'Juan N. Méndez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'estado_id' => 21,
                'clave' => '093',
                'nombre' => 'Lafragua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'estado_id' => 21,
                'clave' => '094',
                'nombre' => 'Libres',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'estado_id' => 21,
                'clave' => '095',
                'nombre' => 'La Magdalena Tlatlauquitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'estado_id' => 21,
                'clave' => '096',
                'nombre' => 'Mazapiltepec de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'estado_id' => 21,
                'clave' => '097',
                'nombre' => 'Mixtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'estado_id' => 21,
                'clave' => '098',
                'nombre' => 'Molcaxac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'estado_id' => 21,
                'clave' => '099',
                'nombre' => 'Cañada Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'estado_id' => 21,
                'clave' => '100',
                'nombre' => 'Naupan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'estado_id' => 21,
                'clave' => '101',
                'nombre' => 'Nauzontla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'estado_id' => 21,
                'clave' => '102',
                'nombre' => 'Nealtican',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'estado_id' => 21,
                'clave' => '103',
                'nombre' => 'Nicolás Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'estado_id' => 21,
                'clave' => '104',
                'nombre' => 'Nopalucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'estado_id' => 21,
                'clave' => '105',
                'nombre' => 'Ocotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'estado_id' => 21,
                'clave' => '106',
                'nombre' => 'Ocoyucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'estado_id' => 21,
                'clave' => '107',
                'nombre' => 'Olintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'estado_id' => 21,
                'clave' => '108',
                'nombre' => 'Oriental',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'estado_id' => 21,
                'clave' => '109',
                'nombre' => 'Pahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'estado_id' => 21,
                'clave' => '110',
                'nombre' => 'Palmar de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'estado_id' => 21,
                'clave' => '111',
                'nombre' => 'Pantepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'estado_id' => 21,
                'clave' => '112',
                'nombre' => 'Petlalcingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'estado_id' => 21,
                'clave' => '113',
                'nombre' => 'Piaxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'estado_id' => 21,
                'clave' => '114',
                'nombre' => 'Puebla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'estado_id' => 21,
                'clave' => '115',
                'nombre' => 'Quecholac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'estado_id' => 21,
                'clave' => '116',
                'nombre' => 'Quimixtlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'estado_id' => 21,
                'clave' => '117',
                'nombre' => 'Rafael Lara Grajales',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'estado_id' => 21,
                'clave' => '118',
                'nombre' => 'Los Reyes de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'estado_id' => 21,
                'clave' => '119',
                'nombre' => 'San Andrés Cholula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'estado_id' => 21,
                'clave' => '120',
                'nombre' => 'San Antonio Cañada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'estado_id' => 21,
                'clave' => '121',
                'nombre' => 'San Diego la Mesa Tochimiltzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'estado_id' => 21,
                'clave' => '122',
                'nombre' => 'San Felipe Teotlalcingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'estado_id' => 21,
                'clave' => '123',
                'nombre' => 'San Felipe Tepatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'estado_id' => 21,
                'clave' => '124',
                'nombre' => 'San Gabriel Chilac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'estado_id' => 21,
                'clave' => '125',
                'nombre' => 'San Gregorio Atzompa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'estado_id' => 21,
                'clave' => '126',
                'nombre' => 'San Jerónimo Tecuanipan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'estado_id' => 21,
                'clave' => '127',
                'nombre' => 'San Jerónimo Xayacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'estado_id' => 21,
                'clave' => '128',
                'nombre' => 'San José Chiapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'estado_id' => 21,
                'clave' => '129',
                'nombre' => 'San José Miahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'estado_id' => 21,
                'clave' => '130',
                'nombre' => 'San Juan Atenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'estado_id' => 21,
                'clave' => '131',
                'nombre' => 'San Juan Atzompa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'estado_id' => 21,
                'clave' => '132',
                'nombre' => 'San Martín Texmelucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'estado_id' => 21,
                'clave' => '133',
                'nombre' => 'San Martín Totoltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'estado_id' => 21,
                'clave' => '134',
                'nombre' => 'San Matías Tlalancaleca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'estado_id' => 21,
                'clave' => '135',
                'nombre' => 'San Miguel Ixitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'estado_id' => 21,
                'clave' => '136',
                'nombre' => 'San Miguel Xoxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'estado_id' => 21,
                'clave' => '137',
                'nombre' => 'San Nicolás Buenos Aires',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'estado_id' => 21,
                'clave' => '138',
                'nombre' => 'San Nicolás de los Ranchos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'estado_id' => 21,
                'clave' => '139',
                'nombre' => 'San Pablo Anicano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'estado_id' => 21,
                'clave' => '140',
                'nombre' => 'San Pedro Cholula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'estado_id' => 21,
                'clave' => '141',
                'nombre' => 'San Pedro Yeloixtlahuaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'estado_id' => 21,
                'clave' => '142',
                'nombre' => 'San Salvador el Seco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'estado_id' => 21,
                'clave' => '143',
                'nombre' => 'San Salvador el Verde',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'estado_id' => 21,
                'clave' => '144',
                'nombre' => 'San Salvador Huixcolotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'estado_id' => 21,
                'clave' => '145',
                'nombre' => 'San Sebastián Tlacotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'estado_id' => 21,
                'clave' => '146',
                'nombre' => 'Santa Catarina Tlaltempan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'estado_id' => 21,
                'clave' => '147',
                'nombre' => 'Santa Inés Ahuatempan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'estado_id' => 21,
                'clave' => '148',
                'nombre' => 'Santa Isabel Cholula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'estado_id' => 21,
                'clave' => '149',
                'nombre' => 'Santiago Miahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'estado_id' => 21,
                'clave' => '150',
                'nombre' => 'Huehuetlán el Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'estado_id' => 21,
                'clave' => '151',
                'nombre' => 'Santo Tomás Hueyotlipan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'estado_id' => 21,
                'clave' => '152',
                'nombre' => 'Soltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'estado_id' => 21,
                'clave' => '153',
                'nombre' => 'Tecali de Herrera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'estado_id' => 21,
                'clave' => '154',
                'nombre' => 'Tecamachalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'estado_id' => 21,
                'clave' => '155',
                'nombre' => 'Tecomatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'estado_id' => 21,
                'clave' => '156',
                'nombre' => 'Tehuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'estado_id' => 21,
                'clave' => '157',
                'nombre' => 'Tehuitzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'estado_id' => 21,
                'clave' => '158',
                'nombre' => 'Tenampulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'estado_id' => 21,
                'clave' => '159',
                'nombre' => 'Teopantlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'estado_id' => 21,
                'clave' => '160',
                'nombre' => 'Teotlalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'estado_id' => 21,
                'clave' => '161',
                'nombre' => 'Tepanco de López',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'estado_id' => 21,
                'clave' => '162',
                'nombre' => 'Tepango de Rodríguez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'estado_id' => 21,
                'clave' => '163',
                'nombre' => 'Tepatlaxco de Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'estado_id' => 21,
                'clave' => '164',
                'nombre' => 'Tepeaca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'estado_id' => 21,
                'clave' => '165',
                'nombre' => 'Tepemaxalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'estado_id' => 21,
                'clave' => '166',
                'nombre' => 'Tepeojuma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'estado_id' => 21,
                'clave' => '167',
                'nombre' => 'Tepetzintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'estado_id' => 21,
                'clave' => '168',
                'nombre' => 'Tepexco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'estado_id' => 21,
                'clave' => '169',
                'nombre' => 'Tepexi de Rodríguez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'estado_id' => 21,
                'clave' => '170',
                'nombre' => 'Tepeyahualco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'estado_id' => 21,
                'clave' => '171',
                'nombre' => 'Tepeyahualco de Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'estado_id' => 21,
                'clave' => '172',
                'nombre' => 'Tetela de Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'estado_id' => 21,
                'clave' => '173',
                'nombre' => 'Teteles de Avila Castillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'estado_id' => 21,
                'clave' => '174',
                'nombre' => 'Teziutlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'estado_id' => 21,
                'clave' => '175',
                'nombre' => 'Tianguismanalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'estado_id' => 21,
                'clave' => '176',
                'nombre' => 'Tilapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'estado_id' => 21,
                'clave' => '177',
                'nombre' => 'Tlacotepec de Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'estado_id' => 21,
                'clave' => '178',
                'nombre' => 'Tlacuilotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'estado_id' => 21,
                'clave' => '179',
                'nombre' => 'Tlachichuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'estado_id' => 21,
                'clave' => '180',
                'nombre' => 'Tlahuapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'estado_id' => 21,
                'clave' => '181',
                'nombre' => 'Tlaltenango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'estado_id' => 21,
                'clave' => '182',
                'nombre' => 'Tlanepantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'estado_id' => 21,
                'clave' => '183',
                'nombre' => 'Tlaola',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'estado_id' => 21,
                'clave' => '184',
                'nombre' => 'Tlapacoya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'estado_id' => 21,
                'clave' => '185',
                'nombre' => 'Tlapanalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'estado_id' => 21,
                'clave' => '186',
                'nombre' => 'Tlatlauquitepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'estado_id' => 21,
                'clave' => '187',
                'nombre' => 'Tlaxco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'estado_id' => 21,
                'clave' => '188',
                'nombre' => 'Tochimilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'estado_id' => 21,
                'clave' => '189',
                'nombre' => 'Tochtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'estado_id' => 21,
                'clave' => '190',
                'nombre' => 'Totoltepec de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'estado_id' => 21,
                'clave' => '191',
                'nombre' => 'Tulcingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'estado_id' => 21,
                'clave' => '192',
                'nombre' => 'Tuzamapan de Galeana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'estado_id' => 21,
                'clave' => '193',
                'nombre' => 'Tzicatlacoyan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'estado_id' => 21,
                'clave' => '194',
                'nombre' => 'Venustiano Carranza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'estado_id' => 21,
                'clave' => '195',
                'nombre' => 'Vicente Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'estado_id' => 21,
                'clave' => '196',
                'nombre' => 'Xayacatlán de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'estado_id' => 21,
                'clave' => '197',
                'nombre' => 'Xicotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'estado_id' => 21,
                'clave' => '198',
                'nombre' => 'Xicotlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'estado_id' => 21,
                'clave' => '199',
                'nombre' => 'Xiutetelco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'estado_id' => 21,
                'clave' => '200',
                'nombre' => 'Xochiapulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'estado_id' => 21,
                'clave' => '201',
                'nombre' => 'Xochiltepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'estado_id' => 21,
                'clave' => '202',
                'nombre' => 'Xochitlán de Vicente Suárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'estado_id' => 21,
                'clave' => '203',
                'nombre' => 'Xochitlán Todos Santos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'estado_id' => 21,
                'clave' => '204',
                'nombre' => 'Yaonáhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'estado_id' => 21,
                'clave' => '205',
                'nombre' => 'Yehualtepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'estado_id' => 21,
                'clave' => '206',
                'nombre' => 'Zacapala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'estado_id' => 21,
                'clave' => '207',
                'nombre' => 'Zacapoaxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'estado_id' => 21,
                'clave' => '208',
                'nombre' => 'Zacatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'estado_id' => 21,
                'clave' => '209',
                'nombre' => 'Zapotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'estado_id' => 21,
                'clave' => '210',
                'nombre' => 'Zapotitlán de Méndez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'estado_id' => 21,
                'clave' => '211',
                'nombre' => 'Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'estado_id' => 21,
                'clave' => '212',
                'nombre' => 'Zautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'estado_id' => 21,
                'clave' => '213',
                'nombre' => 'Zihuateutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'estado_id' => 21,
                'clave' => '214',
                'nombre' => 'Zinacatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'estado_id' => 21,
                'clave' => '215',
                'nombre' => 'Zongozotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'estado_id' => 21,
                'clave' => '216',
                'nombre' => 'Zoquiapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'estado_id' => 21,
                'clave' => '217',
                'nombre' => 'Zoquitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'estado_id' => 22,
                'clave' => '001',
                'nombre' => 'Amealco de Bonfil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'estado_id' => 22,
                'clave' => '002',
                'nombre' => 'Pinal de Amoles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'estado_id' => 22,
                'clave' => '003',
                'nombre' => 'Arroyo Seco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'estado_id' => 22,
                'clave' => '004',
                'nombre' => 'Cadereyta de Montes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'estado_id' => 22,
                'clave' => '005',
                'nombre' => 'Colón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'estado_id' => 22,
                'clave' => '006',
                'nombre' => 'Corregidora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'estado_id' => 22,
                'clave' => '007',
                'nombre' => 'Ezequiel Montes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'estado_id' => 22,
                'clave' => '008',
                'nombre' => 'Huimilpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'estado_id' => 22,
                'clave' => '009',
                'nombre' => 'Jalpan de Serra',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'estado_id' => 22,
                'clave' => '010',
                'nombre' => 'Landa de Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'estado_id' => 22,
                'clave' => '011',
                'nombre' => 'El Marqués',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'estado_id' => 22,
                'clave' => '012',
                'nombre' => 'Pedro Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'estado_id' => 22,
                'clave' => '013',
                'nombre' => 'Peñamiller',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'estado_id' => 22,
                'clave' => '014',
                'nombre' => 'Querétaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'estado_id' => 22,
                'clave' => '015',
                'nombre' => 'San Joaquín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'estado_id' => 22,
                'clave' => '016',
                'nombre' => 'San Juan del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'estado_id' => 22,
                'clave' => '017',
                'nombre' => 'Tequisquiapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'estado_id' => 22,
                'clave' => '018',
                'nombre' => 'Tolimán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'estado_id' => 23,
                'clave' => '001',
                'nombre' => 'Cozumel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'estado_id' => 23,
                'clave' => '002',
                'nombre' => 'Felipe Carrillo Puerto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'estado_id' => 23,
                'clave' => '003',
                'nombre' => 'Isla Mujeres',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'estado_id' => 23,
                'clave' => '004',
                'nombre' => 'Othón P. Blanco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'estado_id' => 23,
                'clave' => '005',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'estado_id' => 23,
                'clave' => '006',
                'nombre' => 'José María Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'estado_id' => 23,
                'clave' => '007',
                'nombre' => 'Lázaro Cárdenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'estado_id' => 23,
                'clave' => '008',
                'nombre' => 'Solidaridad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'estado_id' => 23,
                'clave' => '009',
                'nombre' => 'Tulum',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'estado_id' => 23,
                'clave' => '010',
                'nombre' => 'Bacalar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'estado_id' => 23,
                'clave' => '011',
                'nombre' => 'Puerto Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'estado_id' => 24,
                'clave' => '001',
                'nombre' => 'Ahualulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'estado_id' => 24,
                'clave' => '002',
                'nombre' => 'Alaquines',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'estado_id' => 24,
                'clave' => '003',
                'nombre' => 'Aquismón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'estado_id' => 24,
                'clave' => '004',
                'nombre' => 'Armadillo de los Infante',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'estado_id' => 24,
                'clave' => '005',
                'nombre' => 'Cárdenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'estado_id' => 24,
                'clave' => '006',
                'nombre' => 'Catorce',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'estado_id' => 24,
                'clave' => '007',
                'nombre' => 'Cedral',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'estado_id' => 24,
                'clave' => '008',
                'nombre' => 'Cerritos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'estado_id' => 24,
                'clave' => '009',
                'nombre' => 'Cerro de San Pedro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'estado_id' => 24,
                'clave' => '010',
                'nombre' => 'Ciudad del Maíz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'estado_id' => 24,
                'clave' => '011',
                'nombre' => 'Ciudad Fernández',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'estado_id' => 24,
                'clave' => '012',
                'nombre' => 'Tancanhuitz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1832,
                'estado_id' => 24,
                'clave' => '013',
                'nombre' => 'Ciudad Valles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'estado_id' => 24,
                'clave' => '014',
                'nombre' => 'Coxcatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'estado_id' => 24,
                'clave' => '015',
                'nombre' => 'Charcas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1835,
                'estado_id' => 24,
                'clave' => '016',
                'nombre' => 'Ebano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1836,
                'estado_id' => 24,
                'clave' => '017',
                'nombre' => 'Guadalcázar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1837,
                'estado_id' => 24,
                'clave' => '018',
                'nombre' => 'Huehuetlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1838,
                'estado_id' => 24,
                'clave' => '019',
                'nombre' => 'Lagunillas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1839,
                'estado_id' => 24,
                'clave' => '020',
                'nombre' => 'Matehuala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1840,
                'estado_id' => 24,
                'clave' => '021',
                'nombre' => 'Mexquitic de Carmona',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1841,
                'estado_id' => 24,
                'clave' => '022',
                'nombre' => 'Moctezuma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1842,
                'estado_id' => 24,
                'clave' => '023',
                'nombre' => 'Rayón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1843,
                'estado_id' => 24,
                'clave' => '024',
                'nombre' => 'Rioverde',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1844,
                'estado_id' => 24,
                'clave' => '025',
                'nombre' => 'Salinas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1845,
                'estado_id' => 24,
                'clave' => '026',
                'nombre' => 'San Antonio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1846,
                'estado_id' => 24,
                'clave' => '027',
                'nombre' => 'San Ciro de Acosta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1847,
                'estado_id' => 24,
                'clave' => '028',
                'nombre' => 'San Luis Potosí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1848,
                'estado_id' => 24,
                'clave' => '029',
                'nombre' => 'San Martín Chalchicuautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1849,
                'estado_id' => 24,
                'clave' => '030',
                'nombre' => 'San Nicolás Tolentino',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1850,
                'estado_id' => 24,
                'clave' => '031',
                'nombre' => 'Santa Catarina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1851,
                'estado_id' => 24,
                'clave' => '032',
                'nombre' => 'Santa María del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1852,
                'estado_id' => 24,
                'clave' => '033',
                'nombre' => 'Santo Domingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1853,
                'estado_id' => 24,
                'clave' => '034',
                'nombre' => 'San Vicente Tancuayalab',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1854,
                'estado_id' => 24,
                'clave' => '035',
                'nombre' => 'Soledad de Graciano Sánchez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1855,
                'estado_id' => 24,
                'clave' => '036',
                'nombre' => 'Tamasopo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1856,
                'estado_id' => 24,
                'clave' => '037',
                'nombre' => 'Tamazunchale',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1857,
                'estado_id' => 24,
                'clave' => '038',
                'nombre' => 'Tampacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1858,
                'estado_id' => 24,
                'clave' => '039',
                'nombre' => 'Tampamolón Corona',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1859,
                'estado_id' => 24,
                'clave' => '040',
                'nombre' => 'Tamuín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1860,
                'estado_id' => 24,
                'clave' => '041',
                'nombre' => 'Tanlajás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1861,
                'estado_id' => 24,
                'clave' => '042',
                'nombre' => 'Tanquián de Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1862,
                'estado_id' => 24,
                'clave' => '043',
                'nombre' => 'Tierra Nueva',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1863,
                'estado_id' => 24,
                'clave' => '044',
                'nombre' => 'Vanegas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1864,
                'estado_id' => 24,
                'clave' => '045',
                'nombre' => 'Venado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1865,
                'estado_id' => 24,
                'clave' => '046',
                'nombre' => 'Villa de Arriaga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1866,
                'estado_id' => 24,
                'clave' => '047',
                'nombre' => 'Villa de Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1867,
                'estado_id' => 24,
                'clave' => '048',
                'nombre' => 'Villa de la Paz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1868,
                'estado_id' => 24,
                'clave' => '049',
                'nombre' => 'Villa de Ramos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1869,
                'estado_id' => 24,
                'clave' => '050',
                'nombre' => 'Villa de Reyes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1870,
                'estado_id' => 24,
                'clave' => '051',
                'nombre' => 'Villa Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1871,
                'estado_id' => 24,
                'clave' => '052',
                'nombre' => 'Villa Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1872,
                'estado_id' => 24,
                'clave' => '053',
                'nombre' => 'Axtla de Terrazas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1873,
                'estado_id' => 24,
                'clave' => '054',
                'nombre' => 'Xilitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1874,
                'estado_id' => 24,
                'clave' => '055',
                'nombre' => 'Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1875,
                'estado_id' => 24,
                'clave' => '056',
                'nombre' => 'Villa de Arista',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1876,
                'estado_id' => 24,
                'clave' => '057',
                'nombre' => 'Matlapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1877,
                'estado_id' => 24,
                'clave' => '058',
                'nombre' => 'El Naranjo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1878,
                'estado_id' => 25,
                'clave' => '001',
                'nombre' => 'Ahome',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1879,
                'estado_id' => 25,
                'clave' => '002',
                'nombre' => 'Angostura',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1880,
                'estado_id' => 25,
                'clave' => '003',
                'nombre' => 'Badiraguato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1881,
                'estado_id' => 25,
                'clave' => '004',
                'nombre' => 'Concordia',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1882,
                'estado_id' => 25,
                'clave' => '005',
                'nombre' => 'Cosalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1883,
                'estado_id' => 25,
                'clave' => '006',
                'nombre' => 'Culiacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1884,
                'estado_id' => 25,
                'clave' => '007',
                'nombre' => 'Choix',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1885,
                'estado_id' => 25,
                'clave' => '008',
                'nombre' => 'Elota',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1886,
                'estado_id' => 25,
                'clave' => '009',
                'nombre' => 'Escuinapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1887,
                'estado_id' => 25,
                'clave' => '010',
                'nombre' => 'El Fuerte',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1888,
                'estado_id' => 25,
                'clave' => '011',
                'nombre' => 'Guasave',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1889,
                'estado_id' => 25,
                'clave' => '012',
                'nombre' => 'Mazatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1890,
                'estado_id' => 25,
                'clave' => '013',
                'nombre' => 'Mocorito',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1891,
                'estado_id' => 25,
                'clave' => '014',
                'nombre' => 'Rosario',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1892,
                'estado_id' => 25,
                'clave' => '015',
                'nombre' => 'Salvador Alvarado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1893,
                'estado_id' => 25,
                'clave' => '016',
                'nombre' => 'San Ignacio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1894,
                'estado_id' => 25,
                'clave' => '017',
                'nombre' => 'Sinaloa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1895,
                'estado_id' => 25,
                'clave' => '018',
                'nombre' => 'Navolato',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1896,
                'estado_id' => 26,
                'clave' => '001',
                'nombre' => 'Aconchi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1897,
                'estado_id' => 26,
                'clave' => '002',
                'nombre' => 'Agua Prieta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1898,
                'estado_id' => 26,
                'clave' => '003',
                'nombre' => 'Alamos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1899,
                'estado_id' => 26,
                'clave' => '004',
                'nombre' => 'Altar',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1900,
                'estado_id' => 26,
                'clave' => '005',
                'nombre' => 'Arivechi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1901,
                'estado_id' => 26,
                'clave' => '006',
                'nombre' => 'Arizpe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1902,
                'estado_id' => 26,
                'clave' => '007',
                'nombre' => 'Atil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1903,
                'estado_id' => 26,
                'clave' => '008',
                'nombre' => 'Bacadéhuachi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1904,
                'estado_id' => 26,
                'clave' => '009',
                'nombre' => 'Bacanora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1905,
                'estado_id' => 26,
                'clave' => '010',
                'nombre' => 'Bacerac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1906,
                'estado_id' => 26,
                'clave' => '011',
                'nombre' => 'Bacoachi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1907,
                'estado_id' => 26,
                'clave' => '012',
                'nombre' => 'Bácum',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1908,
                'estado_id' => 26,
                'clave' => '013',
                'nombre' => 'Banámichi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1909,
                'estado_id' => 26,
                'clave' => '014',
                'nombre' => 'Baviácora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1910,
                'estado_id' => 26,
                'clave' => '015',
                'nombre' => 'Bavispe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1911,
                'estado_id' => 26,
                'clave' => '016',
                'nombre' => 'Benjamín Hill',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1912,
                'estado_id' => 26,
                'clave' => '017',
                'nombre' => 'Caborca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1913,
                'estado_id' => 26,
                'clave' => '018',
                'nombre' => 'Cajeme',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1914,
                'estado_id' => 26,
                'clave' => '019',
                'nombre' => 'Cananea',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1915,
                'estado_id' => 26,
                'clave' => '020',
                'nombre' => 'Carbó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1916,
                'estado_id' => 26,
                'clave' => '021',
                'nombre' => 'La Colorada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1917,
                'estado_id' => 26,
                'clave' => '022',
                'nombre' => 'Cucurpe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1918,
                'estado_id' => 26,
                'clave' => '023',
                'nombre' => 'Cumpas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1919,
                'estado_id' => 26,
                'clave' => '024',
                'nombre' => 'Divisaderos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1920,
                'estado_id' => 26,
                'clave' => '025',
                'nombre' => 'Empalme',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1921,
                'estado_id' => 26,
                'clave' => '026',
                'nombre' => 'Etchojoa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1922,
                'estado_id' => 26,
                'clave' => '027',
                'nombre' => 'Fronteras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1923,
                'estado_id' => 26,
                'clave' => '028',
                'nombre' => 'Granados',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1924,
                'estado_id' => 26,
                'clave' => '029',
                'nombre' => 'Guaymas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1925,
                'estado_id' => 26,
                'clave' => '030',
                'nombre' => 'Hermosillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1926,
                'estado_id' => 26,
                'clave' => '031',
                'nombre' => 'Huachinera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1927,
                'estado_id' => 26,
                'clave' => '032',
                'nombre' => 'Huásabas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1928,
                'estado_id' => 26,
                'clave' => '033',
                'nombre' => 'Huatabampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1929,
                'estado_id' => 26,
                'clave' => '034',
                'nombre' => 'Huépac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1930,
                'estado_id' => 26,
                'clave' => '035',
                'nombre' => 'Imuris',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1931,
                'estado_id' => 26,
                'clave' => '036',
                'nombre' => 'Magdalena',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1932,
                'estado_id' => 26,
                'clave' => '037',
                'nombre' => 'Mazatán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1933,
                'estado_id' => 26,
                'clave' => '038',
                'nombre' => 'Moctezuma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1934,
                'estado_id' => 26,
                'clave' => '039',
                'nombre' => 'Naco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1935,
                'estado_id' => 26,
                'clave' => '040',
                'nombre' => 'Nácori Chico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1936,
                'estado_id' => 26,
                'clave' => '041',
                'nombre' => 'Nacozari de García',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1937,
                'estado_id' => 26,
                'clave' => '042',
                'nombre' => 'Navojoa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1938,
                'estado_id' => 26,
                'clave' => '043',
                'nombre' => 'Nogales',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1939,
                'estado_id' => 26,
                'clave' => '044',
                'nombre' => 'Onavas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1940,
                'estado_id' => 26,
                'clave' => '045',
                'nombre' => 'Opodepe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1941,
                'estado_id' => 26,
                'clave' => '046',
                'nombre' => 'Oquitoa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1942,
                'estado_id' => 26,
                'clave' => '047',
                'nombre' => 'Pitiquito',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1943,
                'estado_id' => 26,
                'clave' => '048',
                'nombre' => 'Puerto Peñasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1944,
                'estado_id' => 26,
                'clave' => '049',
                'nombre' => 'Quiriego',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1945,
                'estado_id' => 26,
                'clave' => '050',
                'nombre' => 'Rayón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1946,
                'estado_id' => 26,
                'clave' => '051',
                'nombre' => 'Rosario',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1947,
                'estado_id' => 26,
                'clave' => '052',
                'nombre' => 'Sahuaripa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1948,
                'estado_id' => 26,
                'clave' => '053',
                'nombre' => 'San Felipe de Jesús',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1949,
                'estado_id' => 26,
                'clave' => '054',
                'nombre' => 'San Javier',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1950,
                'estado_id' => 26,
                'clave' => '055',
                'nombre' => 'San Luis Río Colorado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1951,
                'estado_id' => 26,
                'clave' => '056',
                'nombre' => 'San Miguel de Horcasitas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1952,
                'estado_id' => 26,
                'clave' => '057',
                'nombre' => 'San Pedro de la Cueva',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1953,
                'estado_id' => 26,
                'clave' => '058',
                'nombre' => 'Santa Ana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1954,
                'estado_id' => 26,
                'clave' => '059',
                'nombre' => 'Santa Cruz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1955,
                'estado_id' => 26,
                'clave' => '060',
                'nombre' => 'Sáric',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1956,
                'estado_id' => 26,
                'clave' => '061',
                'nombre' => 'Soyopa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1957,
                'estado_id' => 26,
                'clave' => '062',
                'nombre' => 'Suaqui Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1958,
                'estado_id' => 26,
                'clave' => '063',
                'nombre' => 'Tepache',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1959,
                'estado_id' => 26,
                'clave' => '064',
                'nombre' => 'Trincheras',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1960,
                'estado_id' => 26,
                'clave' => '065',
                'nombre' => 'Tubutama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1961,
                'estado_id' => 26,
                'clave' => '066',
                'nombre' => 'Ures',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1962,
                'estado_id' => 26,
                'clave' => '067',
                'nombre' => 'Villa Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1963,
                'estado_id' => 26,
                'clave' => '068',
                'nombre' => 'Villa Pesqueira',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1964,
                'estado_id' => 26,
                'clave' => '069',
                'nombre' => 'Yécora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1965,
                'estado_id' => 26,
                'clave' => '070',
                'nombre' => 'General Plutarco Elías Calles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1966,
                'estado_id' => 26,
                'clave' => '071',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1967,
                'estado_id' => 26,
                'clave' => '072',
                'nombre' => 'San Ignacio Río Muerto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1968,
                'estado_id' => 27,
                'clave' => '001',
                'nombre' => 'Balancán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1969,
                'estado_id' => 27,
                'clave' => '002',
                'nombre' => 'Cárdenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1970,
                'estado_id' => 27,
                'clave' => '003',
                'nombre' => 'Centla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1971,
                'estado_id' => 27,
                'clave' => '004',
                'nombre' => 'Centro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1972,
                'estado_id' => 27,
                'clave' => '005',
                'nombre' => 'Comalcalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1973,
                'estado_id' => 27,
                'clave' => '006',
                'nombre' => 'Cunduacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1974,
                'estado_id' => 27,
                'clave' => '007',
                'nombre' => 'Emiliano Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1975,
                'estado_id' => 27,
                'clave' => '008',
                'nombre' => 'Huimanguillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1976,
                'estado_id' => 27,
                'clave' => '009',
                'nombre' => 'Jalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1977,
                'estado_id' => 27,
                'clave' => '010',
                'nombre' => 'Jalpa de Méndez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1978,
                'estado_id' => 27,
                'clave' => '011',
                'nombre' => 'Jonuta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1979,
                'estado_id' => 27,
                'clave' => '012',
                'nombre' => 'Macuspana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1980,
                'estado_id' => 27,
                'clave' => '013',
                'nombre' => 'Nacajuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1981,
                'estado_id' => 27,
                'clave' => '014',
                'nombre' => 'Paraíso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1982,
                'estado_id' => 27,
                'clave' => '015',
                'nombre' => 'Tacotalpa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1983,
                'estado_id' => 27,
                'clave' => '016',
                'nombre' => 'Teapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1984,
                'estado_id' => 27,
                'clave' => '017',
                'nombre' => 'Tenosique',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1985,
                'estado_id' => 28,
                'clave' => '001',
                'nombre' => 'Abasolo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1986,
                'estado_id' => 28,
                'clave' => '002',
                'nombre' => 'Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1987,
                'estado_id' => 28,
                'clave' => '003',
                'nombre' => 'Altamira',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1988,
                'estado_id' => 28,
                'clave' => '004',
                'nombre' => 'Antiguo Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1989,
                'estado_id' => 28,
                'clave' => '005',
                'nombre' => 'Burgos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1990,
                'estado_id' => 28,
                'clave' => '006',
                'nombre' => 'Bustamante',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1991,
                'estado_id' => 28,
                'clave' => '007',
                'nombre' => 'Camargo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1992,
                'estado_id' => 28,
                'clave' => '008',
                'nombre' => 'Casas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1993,
                'estado_id' => 28,
                'clave' => '009',
                'nombre' => 'Ciudad Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1994,
                'estado_id' => 28,
                'clave' => '010',
                'nombre' => 'Cruillas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1995,
                'estado_id' => 28,
                'clave' => '011',
                'nombre' => 'Gómez Farías',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1996,
                'estado_id' => 28,
                'clave' => '012',
                'nombre' => 'González',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1997,
                'estado_id' => 28,
                'clave' => '013',
                'nombre' => 'Güémez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1998,
                'estado_id' => 28,
                'clave' => '014',
                'nombre' => 'Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1999,
                'estado_id' => 28,
                'clave' => '015',
                'nombre' => 'Gustavo Díaz Ordaz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2000,
                'estado_id' => 28,
                'clave' => '016',
                'nombre' => 'Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cat_municipios')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'estado_id' => 28,
                'clave' => '017',
                'nombre' => 'Jaumave',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2002,
                'estado_id' => 28,
                'clave' => '018',
                'nombre' => 'Jiménez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2003,
                'estado_id' => 28,
                'clave' => '019',
                'nombre' => 'Llera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2004,
                'estado_id' => 28,
                'clave' => '020',
                'nombre' => 'Mainero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2005,
                'estado_id' => 28,
                'clave' => '021',
                'nombre' => 'El Mante',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2006,
                'estado_id' => 28,
                'clave' => '022',
                'nombre' => 'Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2007,
                'estado_id' => 28,
                'clave' => '023',
                'nombre' => 'Méndez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2008,
                'estado_id' => 28,
                'clave' => '024',
                'nombre' => 'Mier',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2009,
                'estado_id' => 28,
                'clave' => '025',
                'nombre' => 'Miguel Alemán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2010,
                'estado_id' => 28,
                'clave' => '026',
                'nombre' => 'Miquihuana',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2011,
                'estado_id' => 28,
                'clave' => '027',
                'nombre' => 'Nuevo Laredo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2012,
                'estado_id' => 28,
                'clave' => '028',
                'nombre' => 'Nuevo Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2013,
                'estado_id' => 28,
                'clave' => '029',
                'nombre' => 'Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2014,
                'estado_id' => 28,
                'clave' => '030',
                'nombre' => 'Padilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2015,
                'estado_id' => 28,
                'clave' => '031',
                'nombre' => 'Palmillas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2016,
                'estado_id' => 28,
                'clave' => '032',
                'nombre' => 'Reynosa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2017,
                'estado_id' => 28,
                'clave' => '033',
                'nombre' => 'Río Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2018,
                'estado_id' => 28,
                'clave' => '034',
                'nombre' => 'San Carlos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2019,
                'estado_id' => 28,
                'clave' => '035',
                'nombre' => 'San Fernando',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2020,
                'estado_id' => 28,
                'clave' => '036',
                'nombre' => 'San Nicolás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2021,
                'estado_id' => 28,
                'clave' => '037',
                'nombre' => 'Soto la Marina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2022,
                'estado_id' => 28,
                'clave' => '038',
                'nombre' => 'Tampico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2023,
                'estado_id' => 28,
                'clave' => '039',
                'nombre' => 'Tula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2024,
                'estado_id' => 28,
                'clave' => '040',
                'nombre' => 'Valle Hermoso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2025,
                'estado_id' => 28,
                'clave' => '041',
                'nombre' => 'Victoria',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2026,
                'estado_id' => 28,
                'clave' => '042',
                'nombre' => 'Villagrán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2027,
                'estado_id' => 28,
                'clave' => '043',
                'nombre' => 'Xicoténcatl',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2028,
                'estado_id' => 29,
                'clave' => '001',
                'nombre' => 'Amaxac de Guerrero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2029,
                'estado_id' => 29,
                'clave' => '002',
                'nombre' => 'Apetatitlán de Antonio Carvajal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2030,
                'estado_id' => 29,
                'clave' => '003',
                'nombre' => 'Atlangatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2031,
                'estado_id' => 29,
                'clave' => '004',
                'nombre' => 'Atltzayanca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2032,
                'estado_id' => 29,
                'clave' => '005',
                'nombre' => 'Apizaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2033,
                'estado_id' => 29,
                'clave' => '006',
                'nombre' => 'Calpulalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2034,
                'estado_id' => 29,
                'clave' => '007',
                'nombre' => 'El Carmen Tequexquitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2035,
                'estado_id' => 29,
                'clave' => '008',
                'nombre' => 'Cuapiaxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2036,
                'estado_id' => 29,
                'clave' => '009',
                'nombre' => 'Cuaxomulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2037,
                'estado_id' => 29,
                'clave' => '010',
                'nombre' => 'Chiautempan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2038,
                'estado_id' => 29,
                'clave' => '011',
                'nombre' => 'Muñoz de Domingo Arenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2039,
                'estado_id' => 29,
                'clave' => '012',
                'nombre' => 'Españita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2040,
                'estado_id' => 29,
                'clave' => '013',
                'nombre' => 'Huamantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2041,
                'estado_id' => 29,
                'clave' => '014',
                'nombre' => 'Hueyotlipan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2042,
                'estado_id' => 29,
                'clave' => '015',
                'nombre' => 'Ixtacuixtla de Mariano Matamoros',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2043,
                'estado_id' => 29,
                'clave' => '016',
                'nombre' => 'Ixtenco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2044,
                'estado_id' => 29,
                'clave' => '017',
                'nombre' => 'Mazatecochco de José María Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2045,
                'estado_id' => 29,
                'clave' => '018',
                'nombre' => 'Contla de Juan Cuamatzi',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2046,
                'estado_id' => 29,
                'clave' => '019',
                'nombre' => 'Tepetitla de Lardizábal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2047,
                'estado_id' => 29,
                'clave' => '020',
                'nombre' => 'Sanctórum de Lázaro Cárdenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2048,
                'estado_id' => 29,
                'clave' => '021',
                'nombre' => 'Nanacamilpa de Mariano Arista',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2049,
                'estado_id' => 29,
                'clave' => '022',
                'nombre' => 'Acuamanala de Miguel Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2050,
                'estado_id' => 29,
                'clave' => '023',
                'nombre' => 'Natívitas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2051,
                'estado_id' => 29,
                'clave' => '024',
                'nombre' => 'Panotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2052,
                'estado_id' => 29,
                'clave' => '025',
                'nombre' => 'San Pablo del Monte',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2053,
                'estado_id' => 29,
                'clave' => '026',
                'nombre' => 'Santa Cruz Tlaxcala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2054,
                'estado_id' => 29,
                'clave' => '027',
                'nombre' => 'Tenancingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2055,
                'estado_id' => 29,
                'clave' => '028',
                'nombre' => 'Teolocholco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2056,
                'estado_id' => 29,
                'clave' => '029',
                'nombre' => 'Tepeyanco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2057,
                'estado_id' => 29,
                'clave' => '030',
                'nombre' => 'Terrenate',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2058,
                'estado_id' => 29,
                'clave' => '031',
                'nombre' => 'Tetla de la Solidaridad',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2059,
                'estado_id' => 29,
                'clave' => '032',
                'nombre' => 'Tetlatlahuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2060,
                'estado_id' => 29,
                'clave' => '033',
                'nombre' => 'Tlaxcala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2061,
                'estado_id' => 29,
                'clave' => '034',
                'nombre' => 'Tlaxco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2062,
                'estado_id' => 29,
                'clave' => '035',
                'nombre' => 'Tocatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2063,
                'estado_id' => 29,
                'clave' => '036',
                'nombre' => 'Totolac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2064,
                'estado_id' => 29,
                'clave' => '037',
                'nombre' => 'Ziltlaltépec de Trinidad Sánchez Santos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2065,
                'estado_id' => 29,
                'clave' => '038',
                'nombre' => 'Tzompantepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2066,
                'estado_id' => 29,
                'clave' => '039',
                'nombre' => 'Xaloztoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2067,
                'estado_id' => 29,
                'clave' => '040',
                'nombre' => 'Xaltocan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2068,
                'estado_id' => 29,
                'clave' => '041',
                'nombre' => 'Papalotla de Xicohténcatl',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2069,
                'estado_id' => 29,
                'clave' => '042',
                'nombre' => 'Xicohtzinco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2070,
                'estado_id' => 29,
                'clave' => '043',
                'nombre' => 'Yauhquemehcan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2071,
                'estado_id' => 29,
                'clave' => '044',
                'nombre' => 'Zacatelco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2072,
                'estado_id' => 29,
                'clave' => '045',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2073,
                'estado_id' => 29,
                'clave' => '046',
                'nombre' => 'Emiliano Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2074,
                'estado_id' => 29,
                'clave' => '047',
                'nombre' => 'Lázaro Cárdenas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2075,
                'estado_id' => 29,
                'clave' => '048',
                'nombre' => 'La Magdalena Tlaltelulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2076,
                'estado_id' => 29,
                'clave' => '049',
                'nombre' => 'San Damián Texóloc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2077,
                'estado_id' => 29,
                'clave' => '050',
                'nombre' => 'San Francisco Tetlanohcan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2078,
                'estado_id' => 29,
                'clave' => '051',
                'nombre' => 'San Jerónimo Zacualpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2079,
                'estado_id' => 29,
                'clave' => '052',
                'nombre' => 'San José Teacalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2080,
                'estado_id' => 29,
                'clave' => '053',
                'nombre' => 'San Juan Huactzinco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2081,
                'estado_id' => 29,
                'clave' => '054',
                'nombre' => 'San Lorenzo Axocomanitla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2082,
                'estado_id' => 29,
                'clave' => '055',
                'nombre' => 'San Lucas Tecopilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2083,
                'estado_id' => 29,
                'clave' => '056',
                'nombre' => 'Santa Ana Nopalucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2084,
                'estado_id' => 29,
                'clave' => '057',
                'nombre' => 'Santa Apolonia Teacalco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2085,
                'estado_id' => 29,
                'clave' => '058',
                'nombre' => 'Santa Catarina Ayometla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2086,
                'estado_id' => 29,
                'clave' => '059',
                'nombre' => 'Santa Cruz Quilehtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2087,
                'estado_id' => 29,
                'clave' => '060',
                'nombre' => 'Santa Isabel Xiloxoxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2088,
                'estado_id' => 30,
                'clave' => '001',
                'nombre' => 'Acajete',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2089,
                'estado_id' => 30,
                'clave' => '002',
                'nombre' => 'Acatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2090,
                'estado_id' => 30,
                'clave' => '003',
                'nombre' => 'Acayucan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2091,
                'estado_id' => 30,
                'clave' => '004',
                'nombre' => 'Actopan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2092,
                'estado_id' => 30,
                'clave' => '005',
                'nombre' => 'Acula',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2093,
                'estado_id' => 30,
                'clave' => '006',
                'nombre' => 'Acultzingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2094,
                'estado_id' => 30,
                'clave' => '007',
                'nombre' => 'Camarón de Tejeda',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2095,
                'estado_id' => 30,
                'clave' => '008',
                'nombre' => 'Alpatláhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2096,
                'estado_id' => 30,
                'clave' => '009',
                'nombre' => 'Alto Lucero de Gutiérrez Barrios',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2097,
                'estado_id' => 30,
                'clave' => '010',
                'nombre' => 'Altotonga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2098,
                'estado_id' => 30,
                'clave' => '011',
                'nombre' => 'Alvarado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2099,
                'estado_id' => 30,
                'clave' => '012',
                'nombre' => 'Amatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2100,
                'estado_id' => 30,
                'clave' => '013',
                'nombre' => 'Naranjos Amatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2101,
                'estado_id' => 30,
                'clave' => '014',
                'nombre' => 'Amatlán de los Reyes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2102,
                'estado_id' => 30,
                'clave' => '015',
                'nombre' => 'Angel R. Cabada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2103,
                'estado_id' => 30,
                'clave' => '016',
                'nombre' => 'La Antigua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2104,
                'estado_id' => 30,
                'clave' => '017',
                'nombre' => 'Apazapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2105,
                'estado_id' => 30,
                'clave' => '018',
                'nombre' => 'Aquila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2106,
                'estado_id' => 30,
                'clave' => '019',
                'nombre' => 'Astacinga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2107,
                'estado_id' => 30,
                'clave' => '020',
                'nombre' => 'Atlahuilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2108,
                'estado_id' => 30,
                'clave' => '021',
                'nombre' => 'Atoyac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2109,
                'estado_id' => 30,
                'clave' => '022',
                'nombre' => 'Atzacan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2110,
                'estado_id' => 30,
                'clave' => '023',
                'nombre' => 'Atzalan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2111,
                'estado_id' => 30,
                'clave' => '024',
                'nombre' => 'Tlaltetela',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2112,
                'estado_id' => 30,
                'clave' => '025',
                'nombre' => 'Ayahualulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2113,
                'estado_id' => 30,
                'clave' => '026',
                'nombre' => 'Banderilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2114,
                'estado_id' => 30,
                'clave' => '027',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2115,
                'estado_id' => 30,
                'clave' => '028',
                'nombre' => 'Boca del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2116,
                'estado_id' => 30,
                'clave' => '029',
                'nombre' => 'Calcahualco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2117,
                'estado_id' => 30,
                'clave' => '030',
                'nombre' => 'Camerino Z. Mendoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2118,
                'estado_id' => 30,
                'clave' => '031',
                'nombre' => 'Carrillo Puerto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2119,
                'estado_id' => 30,
                'clave' => '032',
                'nombre' => 'Catemaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2120,
                'estado_id' => 30,
                'clave' => '033',
                'nombre' => 'Cazones de Herrera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2121,
                'estado_id' => 30,
                'clave' => '034',
                'nombre' => 'Cerro Azul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2122,
                'estado_id' => 30,
                'clave' => '035',
                'nombre' => 'Citlaltépetl',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2123,
                'estado_id' => 30,
                'clave' => '036',
                'nombre' => 'Coacoatzintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2124,
                'estado_id' => 30,
                'clave' => '037',
                'nombre' => 'Coahuitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2125,
                'estado_id' => 30,
                'clave' => '038',
                'nombre' => 'Coatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2126,
                'estado_id' => 30,
                'clave' => '039',
                'nombre' => 'Coatzacoalcos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2127,
                'estado_id' => 30,
                'clave' => '040',
                'nombre' => 'Coatzintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2128,
                'estado_id' => 30,
                'clave' => '041',
                'nombre' => 'Coetzala',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2129,
                'estado_id' => 30,
                'clave' => '042',
                'nombre' => 'Colipa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2130,
                'estado_id' => 30,
                'clave' => '043',
                'nombre' => 'Comapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2131,
                'estado_id' => 30,
                'clave' => '044',
                'nombre' => 'Córdoba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2132,
                'estado_id' => 30,
                'clave' => '045',
                'nombre' => 'Cosamaloapan de Carpio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2133,
                'estado_id' => 30,
                'clave' => '046',
                'nombre' => 'Cosautlán de Carvajal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2134,
                'estado_id' => 30,
                'clave' => '047',
                'nombre' => 'Coscomatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2135,
                'estado_id' => 30,
                'clave' => '048',
                'nombre' => 'Cosoleacaque',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2136,
                'estado_id' => 30,
                'clave' => '049',
                'nombre' => 'Cotaxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2137,
                'estado_id' => 30,
                'clave' => '050',
                'nombre' => 'Coxquihui',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2138,
                'estado_id' => 30,
                'clave' => '051',
                'nombre' => 'Coyutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2139,
                'estado_id' => 30,
                'clave' => '052',
                'nombre' => 'Cuichapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2140,
                'estado_id' => 30,
                'clave' => '053',
                'nombre' => 'Cuitláhuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2141,
                'estado_id' => 30,
                'clave' => '054',
                'nombre' => 'Chacaltianguis',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2142,
                'estado_id' => 30,
                'clave' => '055',
                'nombre' => 'Chalma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2143,
                'estado_id' => 30,
                'clave' => '056',
                'nombre' => 'Chiconamel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2144,
                'estado_id' => 30,
                'clave' => '057',
                'nombre' => 'Chiconquiaco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2145,
                'estado_id' => 30,
                'clave' => '058',
                'nombre' => 'Chicontepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2146,
                'estado_id' => 30,
                'clave' => '059',
                'nombre' => 'Chinameca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2147,
                'estado_id' => 30,
                'clave' => '060',
                'nombre' => 'Chinampa de Gorostiza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2148,
                'estado_id' => 30,
                'clave' => '061',
                'nombre' => 'Las Choapas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2149,
                'estado_id' => 30,
                'clave' => '062',
                'nombre' => 'Chocamán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2150,
                'estado_id' => 30,
                'clave' => '063',
                'nombre' => 'Chontla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2151,
                'estado_id' => 30,
                'clave' => '064',
                'nombre' => 'Chumatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2152,
                'estado_id' => 30,
                'clave' => '065',
                'nombre' => 'Emiliano Zapata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2153,
                'estado_id' => 30,
                'clave' => '066',
                'nombre' => 'Espinal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2154,
                'estado_id' => 30,
                'clave' => '067',
                'nombre' => 'Filomeno Mata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2155,
                'estado_id' => 30,
                'clave' => '068',
                'nombre' => 'Fortín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2156,
                'estado_id' => 30,
                'clave' => '069',
                'nombre' => 'Gutiérrez Zamora',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2157,
                'estado_id' => 30,
                'clave' => '070',
                'nombre' => 'Hidalgotitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2158,
                'estado_id' => 30,
                'clave' => '071',
                'nombre' => 'Huatusco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2159,
                'estado_id' => 30,
                'clave' => '072',
                'nombre' => 'Huayacocotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2160,
                'estado_id' => 30,
                'clave' => '073',
                'nombre' => 'Hueyapan de Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2161,
                'estado_id' => 30,
                'clave' => '074',
                'nombre' => 'Huiloapan de Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2162,
                'estado_id' => 30,
                'clave' => '075',
                'nombre' => 'Ignacio de la Llave',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2163,
                'estado_id' => 30,
                'clave' => '076',
                'nombre' => 'Ilamatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2164,
                'estado_id' => 30,
                'clave' => '077',
                'nombre' => 'Isla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2165,
                'estado_id' => 30,
                'clave' => '078',
                'nombre' => 'Ixcatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2166,
                'estado_id' => 30,
                'clave' => '079',
                'nombre' => 'Ixhuacán de los Reyes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2167,
                'estado_id' => 30,
                'clave' => '080',
                'nombre' => 'Ixhuatlán del Café',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2168,
                'estado_id' => 30,
                'clave' => '081',
                'nombre' => 'Ixhuatlancillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2169,
                'estado_id' => 30,
                'clave' => '082',
                'nombre' => 'Ixhuatlán del Sureste',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2170,
                'estado_id' => 30,
                'clave' => '083',
                'nombre' => 'Ixhuatlán de Madero',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2171,
                'estado_id' => 30,
                'clave' => '084',
                'nombre' => 'Ixmatlahuacan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2172,
                'estado_id' => 30,
                'clave' => '085',
                'nombre' => 'Ixtaczoquitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2173,
                'estado_id' => 30,
                'clave' => '086',
                'nombre' => 'Jalacingo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2174,
                'estado_id' => 30,
                'clave' => '087',
                'nombre' => 'Xalapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2175,
                'estado_id' => 30,
                'clave' => '088',
                'nombre' => 'Jalcomulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2176,
                'estado_id' => 30,
                'clave' => '089',
                'nombre' => 'Jáltipan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2177,
                'estado_id' => 30,
                'clave' => '090',
                'nombre' => 'Jamapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2178,
                'estado_id' => 30,
                'clave' => '091',
                'nombre' => 'Jesús Carranza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2179,
                'estado_id' => 30,
                'clave' => '092',
                'nombre' => 'Xico',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2180,
                'estado_id' => 30,
                'clave' => '093',
                'nombre' => 'Jilotepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2181,
                'estado_id' => 30,
                'clave' => '094',
                'nombre' => 'Juan Rodríguez Clara',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2182,
                'estado_id' => 30,
                'clave' => '095',
                'nombre' => 'Juchique de Ferrer',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2183,
                'estado_id' => 30,
                'clave' => '096',
                'nombre' => 'Landero y Coss',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2184,
                'estado_id' => 30,
                'clave' => '097',
                'nombre' => 'Lerdo de Tejada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2185,
                'estado_id' => 30,
                'clave' => '098',
                'nombre' => 'Magdalena',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2186,
                'estado_id' => 30,
                'clave' => '099',
                'nombre' => 'Maltrata',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2187,
                'estado_id' => 30,
                'clave' => '100',
                'nombre' => 'Manlio Fabio Altamirano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2188,
                'estado_id' => 30,
                'clave' => '101',
                'nombre' => 'Mariano Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2189,
                'estado_id' => 30,
                'clave' => '102',
                'nombre' => 'Martínez de la Torre',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2190,
                'estado_id' => 30,
                'clave' => '103',
                'nombre' => 'Mecatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2191,
                'estado_id' => 30,
                'clave' => '104',
                'nombre' => 'Mecayapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2192,
                'estado_id' => 30,
                'clave' => '105',
                'nombre' => 'Medellín de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2193,
                'estado_id' => 30,
                'clave' => '106',
                'nombre' => 'Miahuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2194,
                'estado_id' => 30,
                'clave' => '107',
                'nombre' => 'Las Minas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2195,
                'estado_id' => 30,
                'clave' => '108',
                'nombre' => 'Minatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2196,
                'estado_id' => 30,
                'clave' => '109',
                'nombre' => 'Misantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2197,
                'estado_id' => 30,
                'clave' => '110',
                'nombre' => 'Mixtla de Altamirano',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2198,
                'estado_id' => 30,
                'clave' => '111',
                'nombre' => 'Moloacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2199,
                'estado_id' => 30,
                'clave' => '112',
                'nombre' => 'Naolinco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2200,
                'estado_id' => 30,
                'clave' => '113',
                'nombre' => 'Naranjal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2201,
                'estado_id' => 30,
                'clave' => '114',
                'nombre' => 'Nautla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2202,
                'estado_id' => 30,
                'clave' => '115',
                'nombre' => 'Nogales',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2203,
                'estado_id' => 30,
                'clave' => '116',
                'nombre' => 'Oluta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2204,
                'estado_id' => 30,
                'clave' => '117',
                'nombre' => 'Omealca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2205,
                'estado_id' => 30,
                'clave' => '118',
                'nombre' => 'Orizaba',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2206,
                'estado_id' => 30,
                'clave' => '119',
                'nombre' => 'Otatitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2207,
                'estado_id' => 30,
                'clave' => '120',
                'nombre' => 'Oteapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2208,
                'estado_id' => 30,
                'clave' => '121',
                'nombre' => 'Ozuluama de Mascareñas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2209,
                'estado_id' => 30,
                'clave' => '122',
                'nombre' => 'Pajapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2210,
                'estado_id' => 30,
                'clave' => '123',
                'nombre' => 'Pánuco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2211,
                'estado_id' => 30,
                'clave' => '124',
                'nombre' => 'Papantla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2212,
                'estado_id' => 30,
                'clave' => '125',
                'nombre' => 'Paso del Macho',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2213,
                'estado_id' => 30,
                'clave' => '126',
                'nombre' => 'Paso de Ovejas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2214,
                'estado_id' => 30,
                'clave' => '127',
                'nombre' => 'La Perla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2215,
                'estado_id' => 30,
                'clave' => '128',
                'nombre' => 'Perote',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2216,
                'estado_id' => 30,
                'clave' => '129',
                'nombre' => 'Platón Sánchez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2217,
                'estado_id' => 30,
                'clave' => '130',
                'nombre' => 'Playa Vicente',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2218,
                'estado_id' => 30,
                'clave' => '131',
                'nombre' => 'Poza Rica de Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2219,
                'estado_id' => 30,
                'clave' => '132',
                'nombre' => 'Las Vigas de Ramírez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2220,
                'estado_id' => 30,
                'clave' => '133',
                'nombre' => 'Pueblo Viejo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2221,
                'estado_id' => 30,
                'clave' => '134',
                'nombre' => 'Puente Nacional',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2222,
                'estado_id' => 30,
                'clave' => '135',
                'nombre' => 'Rafael Delgado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2223,
                'estado_id' => 30,
                'clave' => '136',
                'nombre' => 'Rafael Lucio',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2224,
                'estado_id' => 30,
                'clave' => '137',
                'nombre' => 'Los Reyes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2225,
                'estado_id' => 30,
                'clave' => '138',
                'nombre' => 'Río Blanco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2226,
                'estado_id' => 30,
                'clave' => '139',
                'nombre' => 'Saltabarranca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2227,
                'estado_id' => 30,
                'clave' => '140',
                'nombre' => 'San Andrés Tenejapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2228,
                'estado_id' => 30,
                'clave' => '141',
                'nombre' => 'San Andrés Tuxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2229,
                'estado_id' => 30,
                'clave' => '142',
                'nombre' => 'San Juan Evangelista',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2230,
                'estado_id' => 30,
                'clave' => '143',
                'nombre' => 'Santiago Tuxtla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2231,
                'estado_id' => 30,
                'clave' => '144',
                'nombre' => 'Sayula de Alemán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2232,
                'estado_id' => 30,
                'clave' => '145',
                'nombre' => 'Soconusco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2233,
                'estado_id' => 30,
                'clave' => '146',
                'nombre' => 'Sochiapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2234,
                'estado_id' => 30,
                'clave' => '147',
                'nombre' => 'Soledad Atzompa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2235,
                'estado_id' => 30,
                'clave' => '148',
                'nombre' => 'Soledad de Doblado',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2236,
                'estado_id' => 30,
                'clave' => '149',
                'nombre' => 'Soteapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2237,
                'estado_id' => 30,
                'clave' => '150',
                'nombre' => 'Tamalín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2238,
                'estado_id' => 30,
                'clave' => '151',
                'nombre' => 'Tamiahua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2239,
                'estado_id' => 30,
                'clave' => '152',
                'nombre' => 'Tampico Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2240,
                'estado_id' => 30,
                'clave' => '153',
                'nombre' => 'Tancoco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2241,
                'estado_id' => 30,
                'clave' => '154',
                'nombre' => 'Tantima',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2242,
                'estado_id' => 30,
                'clave' => '155',
                'nombre' => 'Tantoyuca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2243,
                'estado_id' => 30,
                'clave' => '156',
                'nombre' => 'Tatatila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2244,
                'estado_id' => 30,
                'clave' => '157',
                'nombre' => 'Castillo de Teayo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2245,
                'estado_id' => 30,
                'clave' => '158',
                'nombre' => 'Tecolutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2246,
                'estado_id' => 30,
                'clave' => '159',
                'nombre' => 'Tehuipango',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2247,
                'estado_id' => 30,
                'clave' => '160',
                'nombre' => 'Álamo Temapache',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2248,
                'estado_id' => 30,
                'clave' => '161',
                'nombre' => 'Tempoal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2249,
                'estado_id' => 30,
                'clave' => '162',
                'nombre' => 'Tenampa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2250,
                'estado_id' => 30,
                'clave' => '163',
                'nombre' => 'Tenochtitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2251,
                'estado_id' => 30,
                'clave' => '164',
                'nombre' => 'Teocelo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2252,
                'estado_id' => 30,
                'clave' => '165',
                'nombre' => 'Tepatlaxco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2253,
                'estado_id' => 30,
                'clave' => '166',
                'nombre' => 'Tepetlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2254,
                'estado_id' => 30,
                'clave' => '167',
                'nombre' => 'Tepetzintla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2255,
                'estado_id' => 30,
                'clave' => '168',
                'nombre' => 'Tequila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2256,
                'estado_id' => 30,
                'clave' => '169',
                'nombre' => 'José Azueta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2257,
                'estado_id' => 30,
                'clave' => '170',
                'nombre' => 'Texcatepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2258,
                'estado_id' => 30,
                'clave' => '171',
                'nombre' => 'Texhuacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2259,
                'estado_id' => 30,
                'clave' => '172',
                'nombre' => 'Texistepec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2260,
                'estado_id' => 30,
                'clave' => '173',
                'nombre' => 'Tezonapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2261,
                'estado_id' => 30,
                'clave' => '174',
                'nombre' => 'Tierra Blanca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2262,
                'estado_id' => 30,
                'clave' => '175',
                'nombre' => 'Tihuatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2263,
                'estado_id' => 30,
                'clave' => '176',
                'nombre' => 'Tlacojalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2264,
                'estado_id' => 30,
                'clave' => '177',
                'nombre' => 'Tlacolulan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2265,
                'estado_id' => 30,
                'clave' => '178',
                'nombre' => 'Tlacotalpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2266,
                'estado_id' => 30,
                'clave' => '179',
                'nombre' => 'Tlacotepec de Mejía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2267,
                'estado_id' => 30,
                'clave' => '180',
                'nombre' => 'Tlachichilco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2268,
                'estado_id' => 30,
                'clave' => '181',
                'nombre' => 'Tlalixcoyan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2269,
                'estado_id' => 30,
                'clave' => '182',
                'nombre' => 'Tlalnelhuayocan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2270,
                'estado_id' => 30,
                'clave' => '183',
                'nombre' => 'Tlapacoyan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2271,
                'estado_id' => 30,
                'clave' => '184',
                'nombre' => 'Tlaquilpa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2272,
                'estado_id' => 30,
                'clave' => '185',
                'nombre' => 'Tlilapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2273,
                'estado_id' => 30,
                'clave' => '186',
                'nombre' => 'Tomatlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2274,
                'estado_id' => 30,
                'clave' => '187',
                'nombre' => 'Tonayán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2275,
                'estado_id' => 30,
                'clave' => '188',
                'nombre' => 'Totutla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2276,
                'estado_id' => 30,
                'clave' => '189',
                'nombre' => 'Tuxpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2277,
                'estado_id' => 30,
                'clave' => '190',
                'nombre' => 'Tuxtilla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2278,
                'estado_id' => 30,
                'clave' => '191',
                'nombre' => 'Ursulo Galván',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2279,
                'estado_id' => 30,
                'clave' => '192',
                'nombre' => 'Vega de Alatorre',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2280,
                'estado_id' => 30,
                'clave' => '193',
                'nombre' => 'Veracruz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2281,
                'estado_id' => 30,
                'clave' => '194',
                'nombre' => 'Villa Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2282,
                'estado_id' => 30,
                'clave' => '195',
                'nombre' => 'Xoxocotla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2283,
                'estado_id' => 30,
                'clave' => '196',
                'nombre' => 'Yanga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2284,
                'estado_id' => 30,
                'clave' => '197',
                'nombre' => 'Yecuatla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2285,
                'estado_id' => 30,
                'clave' => '198',
                'nombre' => 'Zacualpan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2286,
                'estado_id' => 30,
                'clave' => '199',
                'nombre' => 'Zaragoza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2287,
                'estado_id' => 30,
                'clave' => '200',
                'nombre' => 'Zentla',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2288,
                'estado_id' => 30,
                'clave' => '201',
                'nombre' => 'Zongolica',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2289,
                'estado_id' => 30,
                'clave' => '202',
                'nombre' => 'Zontecomatlán de López y Fuentes',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2290,
                'estado_id' => 30,
                'clave' => '203',
                'nombre' => 'Zozocolco de Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2291,
                'estado_id' => 30,
                'clave' => '204',
                'nombre' => 'Agua Dulce',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2292,
                'estado_id' => 30,
                'clave' => '205',
                'nombre' => 'El Higo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2293,
                'estado_id' => 30,
                'clave' => '206',
                'nombre' => 'Nanchital de Lázaro Cárdenas del Río',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2294,
                'estado_id' => 30,
                'clave' => '207',
                'nombre' => 'Tres Valles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2295,
                'estado_id' => 30,
                'clave' => '208',
                'nombre' => 'Carlos A. Carrillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2296,
                'estado_id' => 30,
                'clave' => '209',
                'nombre' => 'Tatahuicapan de Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2297,
                'estado_id' => 30,
                'clave' => '210',
                'nombre' => 'Uxpanapa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2298,
                'estado_id' => 30,
                'clave' => '211',
                'nombre' => 'San Rafael',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2299,
                'estado_id' => 30,
                'clave' => '212',
                'nombre' => 'Santiago Sochiapan',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2300,
                'estado_id' => 31,
                'clave' => '001',
                'nombre' => 'Abalá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2301,
                'estado_id' => 31,
                'clave' => '002',
                'nombre' => 'Acanceh',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2302,
                'estado_id' => 31,
                'clave' => '003',
                'nombre' => 'Akil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2303,
                'estado_id' => 31,
                'clave' => '004',
                'nombre' => 'Baca',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2304,
                'estado_id' => 31,
                'clave' => '005',
                'nombre' => 'Bokobá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2305,
                'estado_id' => 31,
                'clave' => '006',
                'nombre' => 'Buctzotz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2306,
                'estado_id' => 31,
                'clave' => '007',
                'nombre' => 'Cacalchén',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2307,
                'estado_id' => 31,
                'clave' => '008',
                'nombre' => 'Calotmul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2308,
                'estado_id' => 31,
                'clave' => '009',
                'nombre' => 'Cansahcab',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2309,
                'estado_id' => 31,
                'clave' => '010',
                'nombre' => 'Cantamayec',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2310,
                'estado_id' => 31,
                'clave' => '011',
                'nombre' => 'Celestún',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2311,
                'estado_id' => 31,
                'clave' => '012',
                'nombre' => 'Cenotillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2312,
                'estado_id' => 31,
                'clave' => '013',
                'nombre' => 'Conkal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2313,
                'estado_id' => 31,
                'clave' => '014',
                'nombre' => 'Cuncunul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2314,
                'estado_id' => 31,
                'clave' => '015',
                'nombre' => 'Cuzamá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2315,
                'estado_id' => 31,
                'clave' => '016',
                'nombre' => 'Chacsinkín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2316,
                'estado_id' => 31,
                'clave' => '017',
                'nombre' => 'Chankom',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2317,
                'estado_id' => 31,
                'clave' => '018',
                'nombre' => 'Chapab',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2318,
                'estado_id' => 31,
                'clave' => '019',
                'nombre' => 'Chemax',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2319,
                'estado_id' => 31,
                'clave' => '020',
                'nombre' => 'Chicxulub Pueblo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2320,
                'estado_id' => 31,
                'clave' => '021',
                'nombre' => 'Chichimilá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2321,
                'estado_id' => 31,
                'clave' => '022',
                'nombre' => 'Chikindzonot',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2322,
                'estado_id' => 31,
                'clave' => '023',
                'nombre' => 'Chocholá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2323,
                'estado_id' => 31,
                'clave' => '024',
                'nombre' => 'Chumayel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2324,
                'estado_id' => 31,
                'clave' => '025',
                'nombre' => 'Dzán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2325,
                'estado_id' => 31,
                'clave' => '026',
                'nombre' => 'Dzemul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2326,
                'estado_id' => 31,
                'clave' => '027',
                'nombre' => 'Dzidzantún',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2327,
                'estado_id' => 31,
                'clave' => '028',
                'nombre' => 'Dzilam de Bravo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2328,
                'estado_id' => 31,
                'clave' => '029',
                'nombre' => 'Dzilam González',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2329,
                'estado_id' => 31,
                'clave' => '030',
                'nombre' => 'Dzitás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2330,
                'estado_id' => 31,
                'clave' => '031',
                'nombre' => 'Dzoncauich',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2331,
                'estado_id' => 31,
                'clave' => '032',
                'nombre' => 'Espita',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2332,
                'estado_id' => 31,
                'clave' => '033',
                'nombre' => 'Halachó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2333,
                'estado_id' => 31,
                'clave' => '034',
                'nombre' => 'Hocabá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2334,
                'estado_id' => 31,
                'clave' => '035',
                'nombre' => 'Hoctún',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2335,
                'estado_id' => 31,
                'clave' => '036',
                'nombre' => 'Homún',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2336,
                'estado_id' => 31,
                'clave' => '037',
                'nombre' => 'Huhí',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2337,
                'estado_id' => 31,
                'clave' => '038',
                'nombre' => 'Hunucmá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2338,
                'estado_id' => 31,
                'clave' => '039',
                'nombre' => 'Ixil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2339,
                'estado_id' => 31,
                'clave' => '040',
                'nombre' => 'Izamal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2340,
                'estado_id' => 31,
                'clave' => '041',
                'nombre' => 'Kanasín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2341,
                'estado_id' => 31,
                'clave' => '042',
                'nombre' => 'Kantunil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2342,
                'estado_id' => 31,
                'clave' => '043',
                'nombre' => 'Kaua',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2343,
                'estado_id' => 31,
                'clave' => '044',
                'nombre' => 'Kinchil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2344,
                'estado_id' => 31,
                'clave' => '045',
                'nombre' => 'Kopomá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2345,
                'estado_id' => 31,
                'clave' => '046',
                'nombre' => 'Mama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2346,
                'estado_id' => 31,
                'clave' => '047',
                'nombre' => 'Maní',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2347,
                'estado_id' => 31,
                'clave' => '048',
                'nombre' => 'Maxcanú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2348,
                'estado_id' => 31,
                'clave' => '049',
                'nombre' => 'Mayapán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2349,
                'estado_id' => 31,
                'clave' => '050',
                'nombre' => 'Mérida',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2350,
                'estado_id' => 31,
                'clave' => '051',
                'nombre' => 'Mocochá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2351,
                'estado_id' => 31,
                'clave' => '052',
                'nombre' => 'Motul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2352,
                'estado_id' => 31,
                'clave' => '053',
                'nombre' => 'Muna',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2353,
                'estado_id' => 31,
                'clave' => '054',
                'nombre' => 'Muxupip',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2354,
                'estado_id' => 31,
                'clave' => '055',
                'nombre' => 'Opichén',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2355,
                'estado_id' => 31,
                'clave' => '056',
                'nombre' => 'Oxkutzcab',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2356,
                'estado_id' => 31,
                'clave' => '057',
                'nombre' => 'Panabá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2357,
                'estado_id' => 31,
                'clave' => '058',
                'nombre' => 'Peto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2358,
                'estado_id' => 31,
                'clave' => '059',
                'nombre' => 'Progreso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2359,
                'estado_id' => 31,
                'clave' => '060',
                'nombre' => 'Quintana Roo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2360,
                'estado_id' => 31,
                'clave' => '061',
                'nombre' => 'Río Lagartos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2361,
                'estado_id' => 31,
                'clave' => '062',
                'nombre' => 'Sacalum',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2362,
                'estado_id' => 31,
                'clave' => '063',
                'nombre' => 'Samahil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2363,
                'estado_id' => 31,
                'clave' => '064',
                'nombre' => 'Sanahcat',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2364,
                'estado_id' => 31,
                'clave' => '065',
                'nombre' => 'San Felipe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2365,
                'estado_id' => 31,
                'clave' => '066',
                'nombre' => 'Santa Elena',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2366,
                'estado_id' => 31,
                'clave' => '067',
                'nombre' => 'Seyé',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2367,
                'estado_id' => 31,
                'clave' => '068',
                'nombre' => 'Sinanché',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2368,
                'estado_id' => 31,
                'clave' => '069',
                'nombre' => 'Sotuta',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2369,
                'estado_id' => 31,
                'clave' => '070',
                'nombre' => 'Sucilá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2370,
                'estado_id' => 31,
                'clave' => '071',
                'nombre' => 'Sudzal',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2371,
                'estado_id' => 31,
                'clave' => '072',
                'nombre' => 'Suma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2372,
                'estado_id' => 31,
                'clave' => '073',
                'nombre' => 'Tahdziú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2373,
                'estado_id' => 31,
                'clave' => '074',
                'nombre' => 'Tahmek',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2374,
                'estado_id' => 31,
                'clave' => '075',
                'nombre' => 'Teabo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2375,
                'estado_id' => 31,
                'clave' => '076',
                'nombre' => 'Tecoh',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2376,
                'estado_id' => 31,
                'clave' => '077',
                'nombre' => 'Tekal de Venegas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2377,
                'estado_id' => 31,
                'clave' => '078',
                'nombre' => 'Tekantó',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2378,
                'estado_id' => 31,
                'clave' => '079',
                'nombre' => 'Tekax',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2379,
                'estado_id' => 31,
                'clave' => '080',
                'nombre' => 'Tekit',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2380,
                'estado_id' => 31,
                'clave' => '081',
                'nombre' => 'Tekom',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2381,
                'estado_id' => 31,
                'clave' => '082',
                'nombre' => 'Telchac Pueblo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2382,
                'estado_id' => 31,
                'clave' => '083',
                'nombre' => 'Telchac Puerto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2383,
                'estado_id' => 31,
                'clave' => '084',
                'nombre' => 'Temax',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2384,
                'estado_id' => 31,
                'clave' => '085',
                'nombre' => 'Temozón',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2385,
                'estado_id' => 31,
                'clave' => '086',
                'nombre' => 'Tepakán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2386,
                'estado_id' => 31,
                'clave' => '087',
                'nombre' => 'Tetiz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2387,
                'estado_id' => 31,
                'clave' => '088',
                'nombre' => 'Teya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2388,
                'estado_id' => 31,
                'clave' => '089',
                'nombre' => 'Ticul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2389,
                'estado_id' => 31,
                'clave' => '090',
                'nombre' => 'Timucuy',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2390,
                'estado_id' => 31,
                'clave' => '091',
                'nombre' => 'Tinum',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2391,
                'estado_id' => 31,
                'clave' => '092',
                'nombre' => 'Tixcacalcupul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2392,
                'estado_id' => 31,
                'clave' => '093',
                'nombre' => 'Tixkokob',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2393,
                'estado_id' => 31,
                'clave' => '094',
                'nombre' => 'Tixmehuac',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2394,
                'estado_id' => 31,
                'clave' => '095',
                'nombre' => 'Tixpéhual',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2395,
                'estado_id' => 31,
                'clave' => '096',
                'nombre' => 'Tizimín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2396,
                'estado_id' => 31,
                'clave' => '097',
                'nombre' => 'Tunkás',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2397,
                'estado_id' => 31,
                'clave' => '098',
                'nombre' => 'Tzucacab',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2398,
                'estado_id' => 31,
                'clave' => '099',
                'nombre' => 'Uayma',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2399,
                'estado_id' => 31,
                'clave' => '100',
                'nombre' => 'Ucú',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2400,
                'estado_id' => 31,
                'clave' => '101',
                'nombre' => 'Umán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2401,
                'estado_id' => 31,
                'clave' => '102',
                'nombre' => 'Valladolid',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2402,
                'estado_id' => 31,
                'clave' => '103',
                'nombre' => 'Xocchel',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2403,
                'estado_id' => 31,
                'clave' => '104',
                'nombre' => 'Yaxcabá',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2404,
                'estado_id' => 31,
                'clave' => '105',
                'nombre' => 'Yaxkukul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2405,
                'estado_id' => 31,
                'clave' => '106',
                'nombre' => 'Yobaín',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2406,
                'estado_id' => 32,
                'clave' => '001',
                'nombre' => 'Apozol',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2407,
                'estado_id' => 32,
                'clave' => '002',
                'nombre' => 'Apulco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2408,
                'estado_id' => 32,
                'clave' => '003',
                'nombre' => 'Atolinga',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2409,
                'estado_id' => 32,
                'clave' => '004',
                'nombre' => 'Benito Juárez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2410,
                'estado_id' => 32,
                'clave' => '005',
                'nombre' => 'Calera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2411,
                'estado_id' => 32,
                'clave' => '006',
                'nombre' => 'Cañitas de Felipe Pescador',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2412,
                'estado_id' => 32,
                'clave' => '007',
                'nombre' => 'Concepción del Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2413,
                'estado_id' => 32,
                'clave' => '008',
                'nombre' => 'Cuauhtémoc',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2414,
                'estado_id' => 32,
                'clave' => '009',
                'nombre' => 'Chalchihuites',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2415,
                'estado_id' => 32,
                'clave' => '010',
                'nombre' => 'Fresnillo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2416,
                'estado_id' => 32,
                'clave' => '011',
                'nombre' => 'Trinidad García de la Cadena',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2417,
                'estado_id' => 32,
                'clave' => '012',
                'nombre' => 'Genaro Codina',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2418,
                'estado_id' => 32,
                'clave' => '013',
                'nombre' => 'General Enrique Estrada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2419,
                'estado_id' => 32,
                'clave' => '014',
                'nombre' => 'General Francisco R. Murguía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2420,
                'estado_id' => 32,
                'clave' => '015',
                'nombre' => 'El Plateado de Joaquín Amaro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2421,
                'estado_id' => 32,
                'clave' => '016',
                'nombre' => 'General Pánfilo Natera',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2422,
                'estado_id' => 32,
                'clave' => '017',
                'nombre' => 'Guadalupe',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2423,
                'estado_id' => 32,
                'clave' => '018',
                'nombre' => 'Huanusco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2424,
                'estado_id' => 32,
                'clave' => '019',
                'nombre' => 'Jalpa',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2425,
                'estado_id' => 32,
                'clave' => '020',
                'nombre' => 'Jerez',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2426,
                'estado_id' => 32,
                'clave' => '021',
                'nombre' => 'Jiménez del Teul',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2427,
                'estado_id' => 32,
                'clave' => '022',
                'nombre' => 'Juan Aldama',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2428,
                'estado_id' => 32,
                'clave' => '023',
                'nombre' => 'Juchipila',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2429,
                'estado_id' => 32,
                'clave' => '024',
                'nombre' => 'Loreto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2430,
                'estado_id' => 32,
                'clave' => '025',
                'nombre' => 'Luis Moya',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2431,
                'estado_id' => 32,
                'clave' => '026',
                'nombre' => 'Mazapil',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2432,
                'estado_id' => 32,
                'clave' => '027',
                'nombre' => 'Melchor Ocampo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2433,
                'estado_id' => 32,
                'clave' => '028',
                'nombre' => 'Mezquital del Oro',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2434,
                'estado_id' => 32,
                'clave' => '029',
                'nombre' => 'Miguel Auza',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2435,
                'estado_id' => 32,
                'clave' => '030',
                'nombre' => 'Momax',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2436,
                'estado_id' => 32,
                'clave' => '031',
                'nombre' => 'Monte Escobedo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2437,
                'estado_id' => 32,
                'clave' => '032',
                'nombre' => 'Morelos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2438,
                'estado_id' => 32,
                'clave' => '033',
                'nombre' => 'Moyahua de Estrada',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2439,
                'estado_id' => 32,
                'clave' => '034',
                'nombre' => 'Nochistlán de Mejía',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2440,
                'estado_id' => 32,
                'clave' => '035',
                'nombre' => 'Noria de Ángeles',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2441,
                'estado_id' => 32,
                'clave' => '036',
                'nombre' => 'Ojocaliente',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2442,
                'estado_id' => 32,
                'clave' => '037',
                'nombre' => 'Pánuco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2443,
                'estado_id' => 32,
                'clave' => '038',
                'nombre' => 'Pinos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2444,
                'estado_id' => 32,
                'clave' => '039',
                'nombre' => 'Río Grande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2445,
                'estado_id' => 32,
                'clave' => '040',
                'nombre' => 'Sain Alto',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2446,
                'estado_id' => 32,
                'clave' => '041',
                'nombre' => 'El Salvador',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2447,
                'estado_id' => 32,
                'clave' => '042',
                'nombre' => 'Sombrerete',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2448,
                'estado_id' => 32,
                'clave' => '043',
                'nombre' => 'Susticacán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2449,
                'estado_id' => 32,
                'clave' => '044',
                'nombre' => 'Tabasco',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2450,
                'estado_id' => 32,
                'clave' => '045',
                'nombre' => 'Tepechitlán',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2451,
                'estado_id' => 32,
                'clave' => '046',
                'nombre' => 'Tepetongo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2452,
                'estado_id' => 32,
                'clave' => '047',
                'nombre' => 'Teúl de González Ortega',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2453,
                'estado_id' => 32,
                'clave' => '048',
                'nombre' => 'Tlaltenango de Sánchez Román',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2454,
                'estado_id' => 32,
                'clave' => '049',
                'nombre' => 'Valparaíso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2455,
                'estado_id' => 32,
                'clave' => '050',
                'nombre' => 'Vetagrande',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2456,
                'estado_id' => 32,
                'clave' => '051',
                'nombre' => 'Villa de Cos',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2457,
                'estado_id' => 32,
                'clave' => '052',
                'nombre' => 'Villa García',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2458,
                'estado_id' => 32,
                'clave' => '053',
                'nombre' => 'Villa González Ortega',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2459,
                'estado_id' => 32,
                'clave' => '054',
                'nombre' => 'Villa Hidalgo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2460,
                'estado_id' => 32,
                'clave' => '055',
                'nombre' => 'Villanueva',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2461,
                'estado_id' => 32,
                'clave' => '056',
                'nombre' => 'Zacatecas',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2462,
                'estado_id' => 32,
                'clave' => '057',
                'nombre' => 'Trancoso',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2463,
                'estado_id' => 32,
                'clave' => '058',
                'nombre' => 'Santa María de la Paz',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
           
        ));
        
        
    }
}