<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PsDeweySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ps_deweys')->insert([
            'id' => '000',
            'nombre' => 'GENERALIDADES',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '100',
            'nombre' => 'FILOSOFÍA Y PSICOLOGÍA',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '200',
            'nombre' => 'RELIGIÓN',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '300',
            'nombre' => 'CIENCIAS SOCIALES',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '400',
            'nombre' => 'LENGUAS',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '500',
            'nombre' => 'CIENCIAS NATURALES Y MATEMÁTICAS',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '600',
            'nombre' => 'TECNOLOGÍA (CIENCIAS APLICADAS)',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '700',
            'nombre' => 'LAS ARTES',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '800',
            'nombre' => 'LITERATURA Y RETÓRICA',
        ]);

        DB::table('ps_deweys')->insert([
            'id' => '900',
            'nombre' => 'GEOGRAFÍA E HISTORIA',
        ]);
    }
}
