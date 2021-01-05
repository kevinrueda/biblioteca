<?php

namespace Database\Seeders;

use App\Models\EstadoUsuario;
use App\Models\Role;
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
        $this->call([
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            JornadaSeeder::class,
            GradoSeeder::class,
            RoleSeeder::class,
            GeneroSeeder::class,
            EstadoUsuarioSeeder::class,
            PsDeweySeeder::class]);    
    }
}
