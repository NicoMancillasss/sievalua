<?php

use Illuminate\Database\Seeder;

class CatPaisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cat_paises')->delete();
        
        \DB::table('cat_paises')->insert(array (
            0 => 
            array (
                'id' => 1,
                'clave' => 101,
                'nombre' => 'República de Angola',
            ),
            1 => 
            array (
                'id' => 2,
                'clave' => 102,
                'nombre' => 'República Democrática y Popular de Argelia',
            ),
            2 => 
            array (
                'id' => 3,
                'clave' => 104,
                'nombre' => 'República de Benín',
            ),
            3 => 
            array (
                'id' => 4,
                'clave' => 105,
                'nombre' => 'República de Botswana',
            ),
            4 => 
            array (
                'id' => 5,
                'clave' => 106,
                'nombre' => 'Burkina Faso',
            ),
            5 => 
            array (
                'id' => 6,
                'clave' => 107,
                'nombre' => 'República de Burundi',
            ),
            6 => 
            array (
                'id' => 7,
                'clave' => 108,
                'nombre' => 'República de Cabo Verde',
            ),
            7 => 
            array (
                'id' => 8,
                'clave' => 109,
                'nombre' => 'República de Camerún',
            ),
            8 => 
            array (
                'id' => 9,
                'clave' => 112,
                'nombre' => 'República de Ruanda',
            ),
            9 => 
            array (
                'id' => 10,
                'clave' => 113,
                'nombre' => 'República Popular del Congo',
            ),
            10 => 
            array (
                'id' => 11,
                'clave' => 114,
                'nombre' => 'República de Costa de Marfil',
            ),
            11 => 
            array (
                'id' => 12,
                'clave' => 115,
                'nombre' => 'República de Chad',
            ),
            12 => 
            array (
                'id' => 13,
                'clave' => 116,
                'nombre' => 'República de Djibouti',
            ),
            13 => 
            array (
                'id' => 14,
                'clave' => 117,
                'nombre' => 'República Árabe deEgipto',
            ),
            14 => 
            array (
                'id' => 15,
                'clave' => 118,
                'nombre' => 'Estado de Eritrea',
            ),
            15 => 
            array (
                'id' => 16,
                'clave' => 119,
                'nombre' => 'República Federal Democrática
de Etiopía',
            ),
            16 => 
            array (
                'id' => 17,
                'clave' => 120,
                'nombre' => 'República Gabonesa',
            ),
            17 => 
            array (
                'id' => 18,
                'clave' => 121,
                'nombre' => 'República de Gambia',
            ),
            18 => 
            array (
                'id' => 19,
                'clave' => 122,
                'nombre' => 'República de Ghana',
            ),
            19 => 
            array (
                'id' => 20,
                'clave' => 123,
                'nombre' => 'República de Guinea',
            ),
            20 => 
            array (
                'id' => 21,
                'clave' => 124,
                'nombre' => 'República de Guinea Bissau',
            ),
            21 => 
            array (
                'id' => 22,
                'clave' => 125,
                'nombre' => 'República de Guinea Ecuatorial',
            ),
            22 => 
            array (
                'id' => 23,
                'clave' => 126,
                'nombre' => 'República de Kenia',
            ),
            23 => 
            array (
                'id' => 24,
                'clave' => 127,
                'nombre' => 'Reino de Lesotho',
            ),
            24 => 
            array (
                'id' => 25,
                'clave' => 128,
                'nombre' => 'República de Liberia',
            ),
            25 => 
            array (
                'id' => 26,
                'clave' => 129,
                'nombre' => 'Libia',
            ),
            26 => 
            array (
                'id' => 27,
                'clave' => 130,
                'nombre' => 'República de Madagascar',
            ),
            27 => 
            array (
                'id' => 28,
                'clave' => 133,
                'nombre' => 'República de Malawi',
            ),
            28 => 
            array (
                'id' => 29,
                'clave' => 134,
                'nombre' => 'República de Malí',
            ),
            29 => 
            array (
                'id' => 30,
                'clave' => 135,
                'nombre' => 'Reino de Marruecos',
            ),
            30 => 
            array (
                'id' => 31,
                'clave' => 136,
                'nombre' => 'República de Mauricio',
            ),
            31 => 
            array (
                'id' => 32,
                'clave' => 137,
                'nombre' => 'República Islámica de Mauritania',
            ),
            32 => 
            array (
                'id' => 33,
                'clave' => 138,
                'nombre' => 'Islas Anglonormandas',
            ),
            33 => 
            array (
                'id' => 34,
                'clave' => 139,
                'nombre' => 'República de Mozambique',
            ),
            34 => 
            array (
                'id' => 35,
                'clave' => 140,
                'nombre' => 'República de Namibia',
            ),
            35 => 
            array (
                'id' => 36,
                'clave' => 141,
                'nombre' => 'República de Níger',
            ),
            36 => 
            array (
                'id' => 37,
                'clave' => 142,
                'nombre' => 'República Federal de Nigeria',
            ),
            37 => 
            array (
                'id' => 38,
                'clave' => 143,
                'nombre' => 'República Centroafricana',
            ),
            38 => 
            array (
                'id' => 39,
                'clave' => 145,
                'nombre' => 'Colectividad territorial de San Pedro y Miquelón',
            ),
            39 => 
            array (
                'id' => 40,
                'clave' => 147,
                'nombre' => 'Isla Santa Helena',
            ),
            40 => 
            array (
                'id' => 41,
                'clave' => 148,
                'nombre' => 'República Democrática de Santo Tome y Príncipe',
            ),
            41 => 
            array (
                'id' => 42,
                'clave' => 149,
                'nombre' => 'República de Senegal',
            ),
            42 => 
            array (
                'id' => 43,
                'clave' => 150,
                'nombre' => 'República de Isla Seychelles',
            ),
            43 => 
            array (
                'id' => 44,
                'clave' => 151,
                'nombre' => 'República de Sierra Leona',
            ),
            44 => 
            array (
                'id' => 45,
                'clave' => 152,
                'nombre' => 'Unión de las Comoras',
            ),
            45 => 
            array (
                'id' => 46,
                'clave' => 153,
                'nombre' => 'República de Somalia',
            ),
            46 => 
            array (
                'id' => 47,
                'clave' => 154,
                'nombre' => 'República de Sudáfrica',
            ),
            47 => 
            array (
                'id' => 48,
                'clave' => 160,
                'nombre' => 'Reino de Suazilandia',
            ),
            48 => 
            array (
                'id' => 49,
                'clave' => 161,
                'nombre' => 'República Unida de Tanzania',
            ),
            49 => 
            array (
                'id' => 50,
                'clave' => 162,
                'nombre' => 'República Togolesa',
            ),
            50 => 
            array (
                'id' => 51,
                'clave' => 164,
                'nombre' => 'República de Túnez',
            ),
            51 => 
            array (
                'id' => 52,
                'clave' => 165,
                'nombre' => 'República de Uganda',
            ),
            52 => 
            array (
                'id' => 53,
                'clave' => 167,
                'nombre' => 'República de Zambia',
            ),
            53 => 
            array (
                'id' => 54,
                'clave' => 168,
                'nombre' => 'República de Zimbabwe',
            ),
            54 => 
            array (
                'id' => 55,
                'clave' => 169,
                'nombre' => 'República Democrática del Congo República Árabe Saharaui Democrática',
            ),
            55 => 
            array (
                'id' => 56,
                'clave' => 171,
                'nombre' => 'República de Sudán',
            ),
            56 => 
            array (
                'id' => 57,
                'clave' => 172,
                'nombre' => 'República de Sudán del Sur',
            ),
            57 => 
            array (
                'id' => 58,
                'clave' => 201,
                'nombre' => 'Anguila',
            ),
            58 => 
            array (
                'id' => 59,
                'clave' => 202,
                'nombre' => 'Antigua y Barbuda',
            ),
            59 => 
            array (
                'id' => 60,
                'clave' => 204,
                'nombre' => 'República Argentina',
            ),
            60 => 
            array (
                'id' => 61,
                'clave' => 205,
                'nombre' => 'Aruba',
            ),
            61 => 
            array (
                'id' => 62,
                'clave' => 206,
                'nombre' => 'Commonwealth de las Bahamas',
            ),
            62 => 
            array (
                'id' => 63,
                'clave' => 207,
                'nombre' => 'Barbados',
            ),
            63 => 
            array (
                'id' => 64,
                'clave' => 208,
                'nombre' => 'Belice',
            ),
            64 => 
            array (
                'id' => 65,
                'clave' => 209,
                'nombre' => 'Islas Bermudas',
            ),
            65 => 
            array (
                'id' => 66,
                'clave' => 210,
                'nombre' => 'República de Bolivia',
            ),
            66 => 
            array (
                'id' => 67,
                'clave' => 211,
                'nombre' => 'República Federativa de Brasil',
            ),
            67 => 
            array (
                'id' => 68,
                'clave' => 212,
                'nombre' => 'Islas Caimán',
            ),
            68 => 
            array (
                'id' => 69,
                'clave' => 213,
                'nombre' => 'Canadá',
            ),
            69 => 
            array (
                'id' => 70,
                'clave' => 214,
                'nombre' => 'República de Colombia',
            ),
            70 => 
            array (
                'id' => 71,
                'clave' => 215,
                'nombre' => 'República de Costa rica',
            ),
            71 => 
            array (
                'id' => 72,
                'clave' => 216,
                'nombre' => 'República de Cuba',
            ),
            72 => 
            array (
                'id' => 73,
                'clave' => 217,
                'nombre' => 'República de Chile',
            ),
            73 => 
            array (
                'id' => 74,
                'clave' => 218,
                'nombre' => 'Commonwealth de Dominica',
            ),
            74 => 
            array (
                'id' => 75,
                'clave' => 219,
                'nombre' => 'República de Ecuador',
            ),
            75 => 
            array (
                'id' => 76,
                'clave' => 220,
                'nombre' => 'República de El Salvador',
            ),
            76 => 
            array (
                'id' => 77,
                'clave' => 221,
                'nombre' => 'Estados Unidos de América',
            ),
            77 => 
            array (
                'id' => 78,
                'clave' => 222,
                'nombre' => 'Granada',
            ),
            78 => 
            array (
                'id' => 79,
                'clave' => 223,
                'nombre' => 'Groenlandia',
            ),
            79 => 
            array (
                'id' => 80,
                'clave' => 224,
                'nombre' => 'Departamento de Guadalupe',
            ),
            80 => 
            array (
                'id' => 81,
                'clave' => 225,
                'nombre' => 'República de Guatemala',
            ),
            81 => 
            array (
                'id' => 82,
                'clave' => 226,
                'nombre' => 'República Cooperativa de Guyana',
            ),
            82 => 
            array (
                'id' => 83,
                'clave' => 227,
                'nombre' => 'Guayana Francesa',
            ),
            83 => 
            array (
                'id' => 84,
                'clave' => 228,
                'nombre' => 'República de Haití',
            ),
            84 => 
            array (
                'id' => 85,
                'clave' => 229,
                'nombre' => 'República de Honduras',
            ),
            85 => 
            array (
                'id' => 86,
                'clave' => 230,
                'nombre' => 'Jamaica',
            ),
            86 => 
            array (
                'id' => 87,
                'clave' => 231,
                'nombre' => 'Islas Malvinas',
            ),
            87 => 
            array (
                'id' => 88,
                'clave' => 233,
                'nombre' => 'Isla de Montserrat',
            ),
            88 => 
            array (
                'id' => 89,
                'clave' => 234,
                'nombre' => 'República de Nicaragua',
            ),
            89 => 
            array (
                'id' => 90,
                'clave' => 235,
                'nombre' => 'República de Panamá',
            ),
            90 => 
            array (
                'id' => 91,
                'clave' => 236,
                'nombre' => 'República de Paraguay',
            ),
            91 => 
            array (
                'id' => 92,
                'clave' => 237,
                'nombre' => 'República de Perú',
            ),
            92 => 
            array (
                'id' => 93,
                'clave' => 238,
                'nombre' => 'Estado Libre Asociado de Puerto Rico',
            ),
            93 => 
            array (
                'id' => 94,
                'clave' => 239,
                'nombre' => 'República Dominicana
Federación de San Cristóbal y Nieves',
            ),
            94 => 
            array (
                'id' => 95,
                'clave' => 241,
                'nombre' => 'Islas de Man',
            ),
            95 => 
            array (
                'id' => 96,
                'clave' => 242,
                'nombre' => 'San Vicente y las Granadinas',
            ),
            96 => 
            array (
                'id' => 97,
                'clave' => 243,
                'nombre' => 'Santa Lucía',
            ),
            97 => 
            array (
                'id' => 98,
                'clave' => 244,
                'nombre' => 'República de Surinam',
            ),
            98 => 
            array (
                'id' => 99,
                'clave' => 245,
                'nombre' => 'República de Trinidad y Tobago',
            ),
            99 => 
            array (
                'id' => 100,
                'clave' => 246,
                'nombre' => 'Islas Turcas y Caicos',
            ),
            100 => 
            array (
                'id' => 101,
                'clave' => 247,
                'nombre' => 'República Oriental del Uruguay',
            ),
            101 => 
            array (
                'id' => 102,
                'clave' => 248,
                'nombre' => 'Islas Vírgenes de los Estados Unidos',
            ),
            102 => 
            array (
                'id' => 103,
                'clave' => 249,
                'nombre' => 'Islas Vírgenes Británicas',
            ),
            103 => 
            array (
                'id' => 104,
                'clave' => 250,
                'nombre' => 'República Boliviana de Venezuela',
            ),
            104 => 
            array (
                'id' => 105,
                'clave' => 251,
                'nombre' => 'Curazao',
            ),
            105 => 
            array (
                'id' => 106,
                'clave' => 252,
                'nombre' => 'Isla de Saint Marteen',
            ),
            106 => 
            array (
                'id' => 107,
                'clave' => 253,
                'nombre' => 'Bonaire, San Eustaquio, Saba',
            ),
            107 => 
            array (
                'id' => 108,
                'clave' => 260,
                'nombre' => 'México',
            ),
            108 => 
            array (
                'id' => 109,
                'clave' => 301,
                'nombre' => 'Estado Islámico de Afganistán',
            ),
            109 => 
            array (
                'id' => 110,
                'clave' => 302,
                'nombre' => 'Reino de Arabia Saudita',
            ),
            110 => 
            array (
                'id' => 111,
                'clave' => 303,
                'nombre' => 'República de Armenia',
            ),
            111 => 
            array (
                'id' => 112,
                'clave' => 304,
                'nombre' => 'República de Azerbaiyán',
            ),
            112 => 
            array (
                'id' => 113,
                'clave' => 305,
                'nombre' => 'Reino de Bahréin',
            ),
            113 => 
            array (
                'id' => 114,
                'clave' => 306,
                'nombre' => 'República Popular de Bangladesh',
            ),
            114 => 
            array (
                'id' => 115,
                'clave' => 307,
                'nombre' => 'Reino de Bhutan',
            ),
            115 => 
            array (
                'id' => 116,
                'clave' => 308,
                'nombre' => 'Estado de Brunei Darussalam',
            ),
            116 => 
            array (
                'id' => 117,
                'clave' => 309,
                'nombre' => 'Reino de Camboya',
            ),
            117 => 
            array (
                'id' => 118,
                'clave' => 312,
                'nombre' => 'República Popular democrática de Corea',
            ),
            118 => 
            array (
                'id' => 119,
                'clave' => 313,
                'nombre' => 'República de Corea',
            ),
            119 => 
            array (
                'id' => 120,
                'clave' => 315,
                'nombre' => 'República Popular China',
            ),
            120 => 
            array (
                'id' => 121,
                'clave' => 316,
                'nombre' => 'Taiwán',
            ),
            121 => 
            array (
                'id' => 122,
                'clave' => 318,
                'nombre' => 'República de Chipre',
            ),
            122 => 
            array (
                'id' => 123,
                'clave' => 321,
                'nombre' => 'Emiratos Árabes Unidos',
            ),
            123 => 
            array (
                'id' => 124,
                'clave' => 322,
                'nombre' => 'República de Filipinas',
            ),
            124 => 
            array (
                'id' => 125,
                'clave' => 323,
                'nombre' => 'República de Georgia',
            ),
            125 => 
            array (
                'id' => 126,
                'clave' => 325,
                'nombre' => 'República de la India',
            ),
            126 => 
            array (
                'id' => 127,
                'clave' => 326,
                'nombre' => 'República de Indonesia',
            ),
            127 => 
            array (
                'id' => 128,
                'clave' => 327,
                'nombre' => 'República Islámica de Irán',
            ),
            128 => 
            array (
                'id' => 129,
                'clave' => 328,
                'nombre' => 'República de Iraq',
            ),
            129 => 
            array (
                'id' => 130,
                'clave' => 329,
                'nombre' => 'Estado de Israel',
            ),
            130 => 
            array (
                'id' => 131,
                'clave' => 330,
                'nombre' => 'Estado de Japón',
            ),
            131 => 
            array (
                'id' => 132,
                'clave' => 331,
                'nombre' => 'Reino Hachemí de Jordania',
            ),
            132 => 
            array (
                'id' => 133,
                'clave' => 332,
                'nombre' => 'República de Kazajstán',
            ),
            133 => 
            array (
                'id' => 134,
                'clave' => 333,
                'nombre' => 'República Kirguisa
Estado de Kuwait',
            ),
            134 => 
            array (
                'id' => 135,
                'clave' => 335,
                'nombre' => 'República Libanesa',
            ),
            135 => 
            array (
                'id' => 136,
                'clave' => 337,
                'nombre' => 'Malasia',
            ),
            136 => 
            array (
                'id' => 137,
                'clave' => 338,
                'nombre' => 'República de Maldivas',
            ),
            137 => 
            array (
                'id' => 138,
                'clave' => 339,
                'nombre' => 'Mongolia',
            ),
            138 => 
            array (
                'id' => 139,
                'clave' => 340,
                'nombre' => 'Unión de Myanmar',
            ),
            139 => 
            array (
                'id' => 140,
                'clave' => 341,
                'nombre' => 'República Federal Democrática de Nepal',
            ),
            140 => 
            array (
                'id' => 141,
                'clave' => 342,
                'nombre' => 'Sultanato de Omán',
            ),
            141 => 
            array (
                'id' => 142,
                'clave' => 343,
                'nombre' => 'República Islámica de Pakistán',
            ),
            142 => 
            array (
                'id' => 143,
                'clave' => 344,
                'nombre' => 'Estado de Qatar',
            ),
            143 => 
            array (
                'id' => 144,
                'clave' => 345,
                'nombre' => 'República Democrática Popular de Laos',
            ),
            144 => 
            array (
                'id' => 145,
                'clave' => 346,
                'nombre' => 'República de Singapur',
            ),
            145 => 
            array (
                'id' => 146,
                'clave' => 347,
                'nombre' => 'República árabe Siria',
            ),
            146 => 
            array (
                'id' => 147,
                'clave' => 348,
                'nombre' => 'República Democrática Socialista Sri Lanka',
            ),
            147 => 
            array (
                'id' => 148,
                'clave' => 349,
                'nombre' => 'Reino de Tailandia',
            ),
            148 => 
            array (
                'id' => 149,
                'clave' => 350,
                'nombre' => 'República de Tayikistán',
            ),
            149 => 
            array (
                'id' => 150,
                'clave' => 351,
                'nombre' => 'Turkmenistán',
            ),
            150 => 
            array (
                'id' => 151,
                'clave' => 352,
                'nombre' => 'República de Turquía',
            ),
            151 => 
            array (
                'id' => 152,
                'clave' => 353,
                'nombre' => 'República de Uzbekistán',
            ),
            152 => 
            array (
                'id' => 153,
                'clave' => 354,
                'nombre' => 'República Socialista de Vietnam',
            ),
            153 => 
            array (
                'id' => 154,
                'clave' => 355,
                'nombre' => 'República de Yemen',
            ),
            154 => 
            array (
                'id' => 155,
                'clave' => 356,
                'nombre' => 'República de Palaos',
            ),
            155 => 
            array (
                'id' => 156,
                'clave' => 357,
                'nombre' => 'República Democrática de Timor Oriental',
            ),
            156 => 
            array (
                'id' => 157,
                'clave' => 358,
                'nombre' => 'Estado de Palestina',
            ),
            157 => 
            array (
                'id' => 158,
                'clave' => 401,
                'nombre' => 'República de Albania',
            ),
            158 => 
            array (
                'id' => 159,
                'clave' => 402,
                'nombre' => 'República Federal de Alemania',
            ),
            159 => 
            array (
                'id' => 160,
                'clave' => 403,
                'nombre' => 'Principado de Andorra',
            ),
            160 => 
            array (
                'id' => 161,
                'clave' => 405,
                'nombre' => 'República de Austria',
            ),
            161 => 
            array (
                'id' => 162,
                'clave' => 407,
                'nombre' => 'República de Bielorrusia',
            ),
            162 => 
            array (
                'id' => 163,
                'clave' => 408,
                'nombre' => 'Reino de Bélgica',
            ),
            163 => 
            array (
                'id' => 164,
                'clave' => 409,
                'nombre' => 'Bosnia y Herzegovina',
            ),
            164 => 
            array (
                'id' => 165,
                'clave' => 410,
                'nombre' => 'República de Bulgaria',
            ),
            165 => 
            array (
                'id' => 166,
                'clave' => 411,
                'nombre' => 'República de Croacia',
            ),
            166 => 
            array (
                'id' => 167,
                'clave' => 412,
                'nombre' => 'Reino de Dinamarca',
            ),
            167 => 
            array (
                'id' => 168,
                'clave' => 413,
                'nombre' => 'República Eslovaca',
            ),
            168 => 
            array (
                'id' => 169,
                'clave' => 414,
                'nombre' => 'República de Eslovenia',
            ),
            169 => 
            array (
                'id' => 170,
                'clave' => 415,
                'nombre' => 'Reino de España',
            ),
            170 => 
            array (
                'id' => 171,
                'clave' => 416,
                'nombre' => 'República de Estonia',
            ),
            171 => 
            array (
                'id' => 172,
                'clave' => 417,
                'nombre' => 'Islas Feroe',
            ),
            172 => 
            array (
                'id' => 173,
                'clave' => 418,
                'nombre' => 'República de Finlandia
República Francesa',
            ),
            173 => 
            array (
                'id' => 174,
                'clave' => 420,
                'nombre' => 'Gibraltar',
            ),
            174 => 
            array (
                'id' => 175,
                'clave' => 421,
                'nombre' => 'República Helénica',
            ),
            175 => 
            array (
                'id' => 176,
                'clave' => 422,
                'nombre' => 'República de Hungría',
            ),
            176 => 
            array (
                'id' => 177,
                'clave' => 423,
                'nombre' => 'República de Irlanda',
            ),
            177 => 
            array (
                'id' => 178,
                'clave' => 424,
                'nombre' => 'República de Islandia',
            ),
            178 => 
            array (
                'id' => 179,
                'clave' => 425,
                'nombre' => 'República Italiana',
            ),
            179 => 
            array (
                'id' => 180,
                'clave' => 426,
                'nombre' => 'República de Letonia',
            ),
            180 => 
            array (
                'id' => 181,
                'clave' => 427,
                'nombre' => 'Principado de Liechtenstein',
            ),
            181 => 
            array (
                'id' => 182,
                'clave' => 428,
                'nombre' => 'República de Lituania',
            ),
            182 => 
            array (
                'id' => 183,
                'clave' => 429,
                'nombre' => 'Gran Ducado de Luxemburgo',
            ),
            183 => 
            array (
                'id' => 184,
                'clave' => 430,
                'nombre' => 'Antigua República Yugoslava de Macedonia',
            ),
            184 => 
            array (
                'id' => 185,
                'clave' => 431,
                'nombre' => 'República de Malta',
            ),
            185 => 
            array (
                'id' => 186,
                'clave' => 433,
                'nombre' => 'República de Moldavia',
            ),
            186 => 
            array (
                'id' => 187,
                'clave' => 434,
                'nombre' => 'Principado de Mónaco',
            ),
            187 => 
            array (
                'id' => 188,
                'clave' => 435,
                'nombre' => 'Reino de Noruega',
            ),
            188 => 
            array (
                'id' => 189,
                'clave' => 436,
                'nombre' => 'Reino de los Países Bajos',
            ),
            189 => 
            array (
                'id' => 190,
                'clave' => 437,
                'nombre' => 'República de Polonia',
            ),
            190 => 
            array (
                'id' => 191,
                'clave' => 438,
                'nombre' => 'República Portuguesa',
            ),
            191 => 
            array (
                'id' => 192,
                'clave' => 439,
                'nombre' => 'Reino Unido de Gran Bretaña e Irlanda',
            ),
            192 => 
            array (
                'id' => 193,
                'clave' => 440,
                'nombre' => 'República Checa',
            ),
            193 => 
            array (
                'id' => 194,
                'clave' => 441,
                'nombre' => 'Rumania',
            ),
            194 => 
            array (
                'id' => 195,
                'clave' => 442,
                'nombre' => 'Federación de Rusia',
            ),
            195 => 
            array (
                'id' => 196,
                'clave' => 443,
                'nombre' => 'República de San Marino',
            ),
            196 => 
            array (
                'id' => 197,
                'clave' => 444,
                'nombre' => 'Estado de la Ciudad del Vaticano',
            ),
            197 => 
            array (
                'id' => 198,
                'clave' => 445,
                'nombre' => 'Reino de Suecia',
            ),
            198 => 
            array (
                'id' => 199,
                'clave' => 446,
                'nombre' => 'Confederación Suiza',
            ),
            199 => 
            array (
                'id' => 200,
                'clave' => 447,
                'nombre' => 'Ucrania',
            ),
            200 => 
            array (
                'id' => 201,
                'clave' => 452,
                'nombre' => 'República de Serbia',
            ),
            201 => 
            array (
                'id' => 202,
                'clave' => 453,
                'nombre' => 'República de Montenegro',
            ),
            202 => 
            array (
                'id' => 203,
                'clave' => 501,
                'nombre' => 'Commonwealth de Australia',
            ),
            203 => 
            array (
                'id' => 204,
                'clave' => 503,
                'nombre' => 'Islas Cook',
            ),
            204 => 
            array (
                'id' => 205,
                'clave' => 505,
                'nombre' => 'Guam',
            ),
            205 => 
            array (
                'id' => 206,
                'clave' => 507,
                'nombre' => 'República de Kiribati',
            ),
            206 => 
            array (
                'id' => 207,
                'clave' => 512,
                'nombre' => 'Islas Marianas del Norte',
            ),
            207 => 
            array (
                'id' => 208,
                'clave' => 513,
                'nombre' => 'República de las Islas Marshall',
            ),
            208 => 
            array (
                'id' => 209,
                'clave' => 514,
                'nombre' => 'Estados Federados de Micronesia',
            ),
            209 => 
            array (
                'id' => 210,
                'clave' => 516,
                'nombre' => 'República de Nauru',
            ),
            210 => 
            array (
                'id' => 211,
                'clave' => 517,
                'nombre' => 'Niue',
            ),
            211 => 
            array (
                'id' => 212,
                'clave' => 520,
                'nombre' => 'Nueva Zelanda',
            ),
            212 => 
            array (
                'id' => 213,
                'clave' => 522,
                'nombre' => 'Isla Wake',
            ),
            213 => 
            array (
                'id' => 214,
                'clave' => 523,
                'nombre' => 'Estado Independiente de Papúa Nueva Guinea',
            ),
            214 => 
            array (
                'id' => 215,
                'clave' => 524,
                'nombre' => 'islas Pitcairn',
            ),
            215 => 
            array (
                'id' => 216,
                'clave' => 526,
                'nombre' => 'Islas Salomón',
            ),
            216 => 
            array (
                'id' => 217,
                'clave' => 527,
                'nombre' => 'Estado Independiente de Samoa',
            ),
            217 => 
            array (
                'id' => 218,
                'clave' => 528,
                'nombre' => 'Samoa Americana',
            ),
            218 => 
            array (
                'id' => 219,
                'clave' => 530,
                'nombre' => 'Tokelau',
            ),
            219 => 
            array (
                'id' => 220,
                'clave' => 531,
                'nombre' => 'Reino de Tonga',
            ),
            220 => 
            array (
                'id' => 221,
                'clave' => 532,
                'nombre' => 'Tuvalu',
            ),
            221 => 
            array (
                'id' => 222,
                'clave' => 533,
                'nombre' => 'República de Vanuatu',
            ),
            222 => 
            array (
                'id' => 223,
                'clave' => 534,
                'nombre' => 'Territorio de las Islas Wallis y Futuna',
            ),
            223 => 
            array (
                'id' => 224,
                'clave' => 535,
                'nombre' => 'República de Las Islas Fiji',
            ),
        ));
        
        
    }
}