<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('cat_estados')->delete();
        
        \DB::table('cat_estados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_pais'=>108,
                'clave' => '01',
                'nombre' => 'Aguascalientes',
                'abreviatura' => 'Ags.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_pais'=>108,
                'clave' => '02',
                'nombre' => 'Baja California',
                'abreviatura' => 'BC',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_pais'=>108,
                'clave' => '03',
                'nombre' => 'Baja California Sur',
                'abreviatura' => 'BCS',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_pais'=>108,
                'clave' => '04',
                'nombre' => 'Campeche',
                'abreviatura' => 'Camp.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_pais'=>108,
                'clave' => '05',
                'nombre' => 'Coahuila de Zaragoza',
                'abreviatura' => 'Coah.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_pais'=>108,
                'clave' => '06',
                'nombre' => 'Colima',
                'abreviatura' => 'Col.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'id_pais'=>108,
                'clave' => '07',
                'nombre' => 'Chiapas',
                'abreviatura' => 'Chis.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'id_pais'=>108,
                'clave' => '08',
                'nombre' => 'Chihuahua',
                'abreviatura' => 'Chih.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'id_pais'=>108,
                'clave' => '09',
                'nombre' => 'Ciudad de México',
                'abreviatura' => 'CDMX',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'id_pais'=>108,
                'clave' => '10',
                'nombre' => 'Durango',
                'abreviatura' => 'Dgo.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'id_pais'=>108,
                'clave' => '11',
                'nombre' => 'Guanajuato',
                'abreviatura' => 'Gto.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'id_pais'=>108,
                'clave' => '12',
                'nombre' => 'Guerrero',
                'abreviatura' => 'Gro.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'id_pais'=>108,
                'clave' => '13',
                'nombre' => 'Hidalgo',
                'abreviatura' => 'Hgo.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'id_pais'=>108,
                'clave' => '14',
                'nombre' => 'Jalisco',
                'abreviatura' => 'Jal.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'id_pais'=>108,
                'clave' => '15',
                'nombre' => 'México',
                'abreviatura' => 'Mex.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'id_pais'=>108,
                'clave' => '16',
                'nombre' => 'Michoacán de Ocampo',
                'abreviatura' => 'Mich.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'id_pais'=>108,
                'clave' => '17',
                'nombre' => 'Morelos',
                'abreviatura' => 'Mor.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'id_pais'=>108,
                'clave' => '18',
                'nombre' => 'Nayarit',
                'abreviatura' => 'Nay.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'id_pais'=>108,
                'clave' => '19',
                'nombre' => 'Nuevo León',
                'abreviatura' => 'NL',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'id_pais'=>108,
                'clave' => '20',
                'nombre' => 'Oaxaca',
                'abreviatura' => 'Oax.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'id_pais'=>108,
                'clave' => '21',
                'nombre' => 'Puebla',
                'abreviatura' => 'Pue.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'id_pais'=>108,
                'clave' => '22',
                'nombre' => 'Querétaro',
                'abreviatura' => 'Qro.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'id_pais'=>108,
                'clave' => '23',
                'nombre' => 'Quintana Roo',
                'abreviatura' => 'Q. Roo',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'id_pais'=>108,
                'clave' => '24',
                'nombre' => 'San Luis Potosí',
                'abreviatura' => 'SLP',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'id_pais'=>108,
                'clave' => '25',
                'nombre' => 'Sinaloa',
                'abreviatura' => 'Sin.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'id_pais'=>108,
                'clave' => '26',
                'nombre' => 'Sonora',
                'abreviatura' => 'Son.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'id_pais'=>108,
                'clave' => '27',
                'nombre' => 'Tabasco',
                'abreviatura' => 'Tab.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'id_pais'=>108,
                'clave' => '28',
                'nombre' => 'Tamaulipas',
                'abreviatura' => 'Tamps.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'id_pais'=>108,
                'clave' => '29',
                'nombre' => 'Tlaxcala',
                'abreviatura' => 'Tlax.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'id_pais'=>108,
                'clave' => '30',
                'nombre' => 'Veracruz de Ignacio de la Llave',
                'abreviatura' => 'Ver.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'id_pais'=>108,
                'clave' => '31',
                'nombre' => 'Yucatán',
                'abreviatura' => 'Yuc.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'id_pais'=>108,
                'clave' => '32',
                'nombre' => 'Zacatecas',
                'abreviatura' => 'Zac.',
                'activo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
    }
}
