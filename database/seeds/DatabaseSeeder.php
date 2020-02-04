<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        $this->call(CatPaisesTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(DependenciasTableSeeder::class);
        $this->call(PerfilesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProgramasTableSeeder::class);
        $this->call(EjerciciosTableSeeder::class);
        $this->call(CatEvaluacionesTableSeeder::class);
        $this->call(EvaluacionesTableSeeder::class);
        $this->call(CatVialidadesTableSeeder::class);
        $this->call(CatalagoDocumentosTableSeeder::class);
        $this->call(CatActoresTableSeeder::class);
        $this->call(SolicitudesTableSeeder::class);
        $this->call(PostulaTableSeeder::class);
        $this->call(EstatusTableSeeder::class);
        $this->call(CatTemasTableSeeder::class);
        $this->call(AccionesTableSeeder::class);
        $this->call(AspectosTableSeeder::class);
        $this->call(PrioridadesTableSeeder::class);
    }
}
