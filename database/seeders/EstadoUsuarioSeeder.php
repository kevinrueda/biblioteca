<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_usuarios')->insert([
            'nombre' => 'ACTIVO',
        ]);

        DB::table('estado_usuarios')->insert([
            'nombre' => 'SANCIONADO',
        ]);

        DB::table('estado_usuarios')->insert([
            'nombre' => 'CANCELADO',
        ]);
    }
}
