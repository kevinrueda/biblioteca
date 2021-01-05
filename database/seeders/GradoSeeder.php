<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grados')->insert([
            'nombre' => 'SEXTO',
        ]);

        DB::table('grados')->insert([
            'nombre' => 'SÉPTIMO',
        ]);

        DB::table('grados')->insert([
            'nombre' => 'OCTAVO',
        ]);

        DB::table('grados')->insert([
            'nombre' => 'NOVENO',
        ]);

        DB::table('grados')->insert([
            'nombre' => 'DÉCIMO',
        ]);

        DB::table('grados')->insert([
            'nombre' => 'UNDÉCIMO',
        ]);
    }
}
