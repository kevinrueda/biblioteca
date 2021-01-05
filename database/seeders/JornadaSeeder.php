<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jornadas')->insert([
            'nombre' => 'MAÑANA',
        ]);

        DB::table('jornadas')->insert([
            'nombre' => 'TARDE',
        ]);

        DB::table('jornadas')->insert([
            'nombre' => 'NOCHE',
        ]);

        DB::table('jornadas')->insert([
            'nombre' => 'ÚNICA',
        ]);
    }
}
