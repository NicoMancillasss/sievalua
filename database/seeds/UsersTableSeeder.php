<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Superusuario',
                'tipo_persona' => NULL,
                'email' => 'super@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$edX4OoBuJ2dqfSHR9U3z8eyP3GCm.S/bB/Eoea8Y0hR/vM5qXHnfG',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 1,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:08:06',
                'updated_at' => '2019-08-02 13:08:06',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Administrador',
                'tipo_persona' => NULL,
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$6z4Zbtesgfo0BioGlIWPZOYsXnfMAHtGJCX1an1yNbfbxzyPJlnZ6',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 2,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:08:07',
                'updated_at' => '2019-08-02 13:08:07',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Despacho4',
                'tipo_persona' => 'fisica',
                'email' => 'despacho4@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$EaMcHbHDpX.79N2LLfW4rOU/HcKd6MblBOHuJSvFsbvm5ILpLGLR6',
                'rfc_temporal' => 'GIVF840630E85',
                'activo' => 1,
                'perfil_id' => 3,
                'dependencia_id' => 11,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:08:07',
                'updated_at' => '2019-08-02 13:31:18',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Secretaria de Educación',
                'tipo_persona' => NULL,
                'email' => 'dependencia@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$OBx1CWkC8T4Vyp2wONJT9.FtB.2/uB/pNdun/E4KkylvB7oQvAWt6',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 4,
                'dependencia_id' => 10,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:08:07',
                'updated_at' => '2019-08-02 13:09:40',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Consulta',
                'tipo_persona' => NULL,
                'email' => 'consulta@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$GXSAYtnOamp/KYpEDS/AWOMRb0wY560i4rstGUemk6PKQMRNeZcHS',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 5,
                'dependencia_id' => 19,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:08:07',
                'updated_at' => '2019-08-02 13:09:12',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Servicios de Salud de Zacatecas',
                'tipo_persona' => NULL,
                'email' => 'ssz@admin.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$RgQAhUsVSHK6uW/sZN86suf9SVrjh3ODNfS149giU70fafsOtT1c6',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 4,
                'dependencia_id' => 64,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:12:57',
                'updated_at' => '2019-08-02 13:12:57',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'IZEA',
                'tipo_persona' => NULL,
                'email' => 'izea@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$BC4SCblVjMqWhgbyr0zWyeJzl1Vt1uSv6nhgtiSRzylS9sDAylq3O',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 4,
                'dependencia_id' => 72,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:15:20',
                'updated_at' => '2019-08-02 13:15:20',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'SEDUVOT',
                'tipo_persona' => NULL,
                'email' => 'seduvot@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$CNSjpiXX98Q0QRfVk5XEWuNr4KbgwXqkzyFNk6S6/g17NItZhJqSO',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 4,
                'dependencia_id' => 13,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:16:39',
                'updated_at' => '2019-08-02 13:16:39',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'SEFIN',
                'tipo_persona' => NULL,
                'email' => 'sefin@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$lcyp.NMQwesoNh2Eix2QtOOL5hTO7dzZkSoHH9ThTkkIkGGVhjcBa',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 4,
                'dependencia_id' => 3,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:17:37',
                'updated_at' => '2019-08-02 13:17:37',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'DIF',
                'tipo_persona' => NULL,
                'email' => 'dif@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$iFvMLC1eSA4.xjCxr20FJeJ2IspBIK1dXj/WuEIMY8zdb9K3o5zRm',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 4,
                'dependencia_id' => 61,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:18:24',
                'updated_at' => '2019-08-02 13:18:24',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'despacho1',
                'tipo_persona' => NULL,
                'email' => 'despacho1@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$KmR1s8P.VC4ZhSYsQdoNVOeSQhDIGdqkrZ1TPvz8VhZ0NmTe5/dXq',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 3,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:28:15',
                'updated_at' => '2019-08-02 13:29:14',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'despacho2',
                'tipo_persona' => NULL,
                'email' => 'despacho2@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$Lq4dz0TuAgmbpp9YhFXvluDg6ZenQUQohEI3IwQcFU2kZwbE4LSQG',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 3,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:28:36',
                'updated_at' => '2019-08-02 13:28:36',
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'despacho3',
                'tipo_persona' => NULL,
                'email' => 'despacho3@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$dKD479R.PckMBOf84IY5TeWG1dBJY/7NY9jllPj65RIX/2mROW066',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 3,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:29:04',
                'updated_at' => '2019-08-02 13:29:04',
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Despacho5',
                'tipo_persona' => NULL,
                'email' => 'despacho5@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$3qi7UIhAm/ZL1pK76iCQCeTg9FSGnYVJWlFhLf8sebZXOGEVn82rO',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 3,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:30:12',
                'updated_at' => '2019-08-02 13:30:12',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'despacho6',
                'tipo_persona' => NULL,
                'email' => 'despacho6@gmail.com',
                'email_verified_at' => '2019-06-18 19:43:29',
                'password' => '$2y$10$40seEhYIE45qJ/wKt6CDN.tuSgojjcdaSyLUjr6NA5EEuUb7zEOki',
                'rfc_temporal' => NULL,
                'activo' => 1,
                'perfil_id' => 3,
                'dependencia_id' => 6,
                'remember_token' => NULL,
                'created_at' => '2019-08-02 13:30:43',
                'updated_at' => '2019-08-02 13:30:43',
            ),
        ));
        
        
    }
}