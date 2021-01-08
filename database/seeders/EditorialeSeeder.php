<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoriales')->insert(['nombre' => 'Planeta']);
        DB::table('editoriales')->insert(['nombre' => 'Harper']);
        DB::table('editoriales')->insert(['nombre' => 'Huemul']);
        DB::table('editoriales')->insert(['nombre' => 'Panamericana']);
        DB::table('editoriales')->insert(['nombre' => 'Taurus']);
        DB::table('editoriales')->insert(['nombre' => 'A.B.C']);
        DB::table('editoriales')->insert(['nombre' => 'Plaza & Janes']);
        DB::table('editoriales')->insert(['nombre' => 'Punto de lectura']);
        DB::table('editoriales')->insert(['nombre' => 'Alfaguara']);
        DB::table('editoriales')->insert(['nombre' => 'Santillana']);
        DB::table('editoriales')->insert(['nombre' => 'Tusquets']);
        DB::table('editoriales')->insert(['nombre' => 'Mondadori']);
        DB::table('editoriales')->insert(['nombre' => 'Villegas']);
        DB::table('editoriales')->insert(['nombre' => 'Malpaso']);
        DB::table('editoriales')->insert(['nombre' => 'Atónitos']);
        DB::table('editoriales')->insert(['nombre' => 'Apiario']);
        DB::table('editoriales')->insert(['nombre' => 'Perfil']);
        DB::table('editoriales')->insert(['nombre' => 'Zona libre']);
        DB::table('editoriales')->insert(['nombre' => 'Mansalva']);
        DB::table('editoriales')->insert(['nombre' => 'Gaviota']);
        DB::table('editoriales')->insert(['nombre' => 'Cátedra']);
        DB::table('editoriales')->insert(['nombre' => 'Dunken']);
        DB::table('editoriales')->insert(['nombre' => 'Inta']);
        DB::table('editoriales')->insert(['nombre' => 'Seix Barral']);
        DB::table('editoriales')->insert(['nombre' => 'Cataplum']);
        DB::table('editoriales')->insert(['nombre' => 'Desde abajo']);
        DB::table('editoriales')->insert(['nombre' => 'Penguin Random House']);
        DB::table('editoriales')->insert(['nombre' => 'Trilce']);
        DB::table('editoriales')->insert(['nombre' => 'Ministerio de Educación Nacional']);
        DB::table('editoriales')->insert(['nombre' => 'Alfaomega']);
        DB::table('editoriales')->insert(['nombre' => 'Addison-Wesley']);
        DB::table('editoriales')->insert(['nombre' => 'Pearson']);
        DB::table('editoriales')->insert(['nombre' => 'Prentice Hall']);
        DB::table('editoriales')->insert(['nombre' => 'Prentice Hall Hispanoamericana']);
        DB::table('editoriales')->insert(['nombre' => 'Microsoft-Press']);
        DB::table('editoriales')->insert(['nombre' => 'Urano']);
        DB::table('editoriales')->insert(['nombre' => 'Combel']);
    }
}
