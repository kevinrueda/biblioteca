<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parametros')->insert([
            'nombre' => 'Días prestamo',
            'valor' => '2'
        ]);

        DB::table('parametros')->insert([
            'nombre' => 'Valor por día',
            'valor' => '2000'
        ]);

        DB::table('parametros')->insert([
            'nombre' => 'Dias para reclamo',
            'valor' => '1'
        ]);

        DB::table('parametros')->insert([
            'nombre' => 'Cantidad máxima orden/prestamo',
            'valor' => '2'
        ]);

        DB::table('parametros')->insert([
            'nombre' => 'Años máximo de cuenta',
            'valor' => '2'
        ]);

        DB::table('parametros')->insert([
            'nombre' => 'Cantidad máxima de renovaciones',
            'valor' => '2'
        ]);
    }
}
