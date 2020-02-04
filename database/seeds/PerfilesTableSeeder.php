<?php

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create(['nombre'=>'Superusuario']);
        Perfil::create(['nombre'=>'Administrador']);
        Perfil::create(['nombre'=>'Despacho']);
        Perfil::create(['nombre'=>'Dependencia']);
        Perfil::create(['nombre'=>'Consulta']);
    }
}
