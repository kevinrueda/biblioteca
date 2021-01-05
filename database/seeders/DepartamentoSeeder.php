<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'id' => '05',
            'nombre' => 'ANTIOQUIA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '08',
            'nombre' => 'ATLÁNTICO',
        ]);
        DB::table('departamentos')->insert([
            'id' => '11',
            'nombre' => 'BOGOTÁ D.C.',
        ]);
        DB::table('departamentos')->insert([
            'id' => '13',
            'nombre' => 'BOLÍVAR',
        ]);
        DB::table('departamentos')->insert([
            'id' => '15',
            'nombre' => 'BOYACÁ',
        ]);
        DB::table('departamentos')->insert([
            'id' => '17',
            'nombre' => 'CALDAS',
        ]);
        DB::table('departamentos')->insert([
            'id' => '18',
            'nombre' => 'CAQUETÁ',
        ]);
        DB::table('departamentos')->insert([
            'id' => '19',
            'nombre' => 'CAUCA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '20',
            'nombre' => 'CESAR',
        ]);
        DB::table('departamentos')->insert([
            'id' => '23',
            'nombre' => 'CÓRDOBA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '25',
            'nombre' => 'CUNDINAMARCA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '27',
            'nombre' => 'CHOCÓ',
        ]);
        DB::table('departamentos')->insert([
            'id' => '41',
            'nombre' => 'HUILA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '44',
            'nombre' => 'LA GUAJIRA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '47',
            'nombre' => 'MAGDALENA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '50',
            'nombre' => 'META',
        ]);
        DB::table('departamentos')->insert([
            'id' => '52',
            'nombre' => 'NARIÑO',
        ]);
        DB::table('departamentos')->insert([
            'id' => '54',
            'nombre' => 'NORTE DE SANTANDER',
        ]);
        DB::table('departamentos')->insert([
            'id' => '63',
            'nombre' => 'QUINDIO',
        ]);
        DB::table('departamentos')->insert([
            'id' => '66',
            'nombre' => 'RISARALDA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '68',
            'nombre' => 'SANTANDER',
        ]);
        DB::table('departamentos')->insert([
            'id' => '70',
            'nombre' => 'SUCRE',
        ]);
        DB::table('departamentos')->insert([
            'id' => '73',
            'nombre' => 'TOLIMA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '76',
            'nombre' => 'VALLE DEL CAUCA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '81',
            'nombre' => 'ARAUCA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '85',
            'nombre' => 'CASANARE',
        ]);
        DB::table('departamentos')->insert([
            'id' => '86',
            'nombre' => 'PUTUMAYO',
        ]);
        DB::table('departamentos')->insert([
            'id' => '88',
            'nombre' => 'ARCHIPIÉLAGO DE SAN ANDRÉS PROVIDENCIA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '91',
            'nombre' => 'AMAZONAS',
        ]);
        DB::table('departamentos')->insert([
            'id' => '94',
            'nombre' => 'GUAINÍA',
        ]);
        DB::table('departamentos')->insert([
            'id' => '95',
            'nombre' => 'GUAVIARE',
        ]);
        DB::table('departamentos')->insert([
            'id' => '97',
            'nombre' => 'VAUPÉS',
        ]);
        DB::table('departamentos')->insert([
            'id' => '99',
            'nombre' => 'VICHADA',
        ]);
    }
}
