<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SsDeweySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ss_deweys')->insert(['id' => '010', 'nombre' => 'Bibliografía', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '020', 'nombre' => 'Bibliotecología y ciencias de la información', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '030', 'nombre' => 'Obras enciclopédicas generales', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '050', 'nombre' => 'Publicaciones en serie generales', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '060', 'nombre' => 'Organizaciones generales y museología', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '070', 'nombre' => 'Medios noticiosos, periodismo, publicación', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '080', 'nombre' => 'Colecciones generales', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '090', 'nombre' => 'Manuscritos y libros raros', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '110', 'nombre' => 'Metafísica', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '120', 'nombre' => 'Epistemología, causalidad, género humano', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '130', 'nombre' => 'Fenómenos paranormales', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '140', 'nombre' => 'Escuelas filosóficas específicas', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '150', 'nombre' => 'Psicología', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '160', 'nombre' => 'Lógica', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '170', 'nombre' => 'Ética (filosofía moral)', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '180', 'nombre' => 'Filosofía antigua, medieval, oriental', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '190', 'nombre' => 'Filosofía moderna occidental', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '210', 'nombre' => 'Filosofía y teología de la religión', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '220', 'nombre' => 'La Biblia', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '230', 'nombre' => 'Cristianismo; Teología cristiana', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '240', 'nombre' => 'Moral cristiana y teología piadosa', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '250', 'nombre' => 'Ordenes cristianas y iglesia local', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '260', 'nombre' => 'Teología social y eclesiástica', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '270', 'nombre' => 'Historia del cristianismo y de la iglesia cristiana', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '280', 'nombre' => 'Confesiones y sectas cristianas', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '290', 'nombre' => 'Religión comparada y otras religiones', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '310', 'nombre' => 'Colecciones de estadística general', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '320', 'nombre' => 'Ciencia política', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '330', 'nombre' => 'Economía', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '340', 'nombre' => 'Derecho', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '350', 'nombre' => 'Administración pública y ciencia militar', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '360', 'nombre' => 'Problemas y servicios sociales; asociaciones', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '370', 'nombre' => 'Educación', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '380', 'nombre' => 'Comercio, comunicaciones, transporte', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '390', 'nombre' => 'Costumbres, etiqueta, folclor', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '410', 'nombre' => 'Lingüística', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '420', 'nombre' => 'Inglés e inglés antiguo', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '430', 'nombre' => 'Lenguas germánicas Alemán', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '440', 'nombre' => 'Lenguas romances Francés', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '450', 'nombre' => 'Italiano, rumano, retorromano', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '460', 'nombre' => 'Lenguas española y portuguesa', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '470', 'nombre' => 'Lenguas itálicas Latín', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '480', 'nombre' => 'Lenguas helénicas Griego clásico', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '490', 'nombre' => 'Otras lenguas', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '510', 'nombre' => 'Matemáticas', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '520', 'nombre' => 'Astronomía y ciencias afines', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '530', 'nombre' => 'Física', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '540', 'nombre' => 'Química y ciencias afines', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '550', 'nombre' => 'Ciencias de la tierra', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '560', 'nombre' => 'Paleontología, Paleozoología', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '570', 'nombre' => 'Ciencias de la vida. Biología', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '580', 'nombre' => 'Ciencias botánicas. Plantas', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '590', 'nombre' => 'Ciencias zoológicas. Animales', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '610', 'nombre' => 'Ciencias médicas Medicina', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '620', 'nombre' => 'Ingeniería y operaciones afines', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '630', 'nombre' => 'Agricultura y tecnologías relacionadas', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '640', 'nombre' => 'Economía doméstica y vida familiar', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '650', 'nombre' => 'Gerencia y servicios auxiliares', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '660', 'nombre' => 'Ingeniería Química', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '670', 'nombre' => 'Manufactura', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '680', 'nombre' => 'Manufactura para usos específicos', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '690', 'nombre' => 'Construcción', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '710', 'nombre' => 'Urbanismo y arte del paisaje', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '720', 'nombre' => 'Arquitectura del paisaje', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '730', 'nombre' => 'Artes plásticas, Escultura', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '740', 'nombre' => 'Dibujo y artes decorativas', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '750', 'nombre' => 'Pintura y pinturas', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '760', 'nombre' => 'Artes gráficas, Arte de grabar y grabados', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '770', 'nombre' => 'Fotografía y fotografías', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '780', 'nombre' => 'Música', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '790', 'nombre' => 'Artes recreativas y de la actuación', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '810', 'nombre' => 'Literatura norteamericana en inglés', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '820', 'nombre' => 'Literatura inglesa e inglesa antigua', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '830', 'nombre' => 'Literatura de las lenguas germánicas', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '840', 'nombre' => 'Literaturas de las lenguas romances', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '850', 'nombre' => 'Literaturas italiana, rumana, retorromana', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '860', 'nombre' => 'Literatura española y portuguesa', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '870', 'nombre' => 'Literaturas itálicas, Literatura latina', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '880', 'nombre' => 'Literaturas helénicas, Literatura griega clásica', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '890', 'nombre' => 'Literatura de otras lenguas', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '910', 'nombre' => 'Geografía y viajes', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '920', 'nombre' => 'Biografía, genealogía, insignias', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '930', 'nombre' => 'Historia del mundo antiguo', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '940', 'nombre' => 'Historia general de Europa', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '950', 'nombre' => 'Historia general de Asia. Lejano Oriente', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '960', 'nombre' => 'Historia general de África', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '970', 'nombre' => 'Historia general de América del Norte', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '980', 'nombre' => 'Historia general de América del Sur', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '990', 'nombre' => 'Historia general de otras áreas', 'ps_deweys_id' =>  '900']);
        DB::table('ss_deweys')->insert(['id' => '000', 'nombre' => 'Generalidades', 'ps_deweys_id' =>  '000']);
        DB::table('ss_deweys')->insert(['id' => '100', 'nombre' => 'Filosofía y psicología', 'ps_deweys_id' =>  '100']);
        DB::table('ss_deweys')->insert(['id' => '200', 'nombre' => 'Religión', 'ps_deweys_id' =>  '200']);
        DB::table('ss_deweys')->insert(['id' => '300', 'nombre' => 'Ciencias sociales', 'ps_deweys_id' =>  '300']);
        DB::table('ss_deweys')->insert(['id' => '400', 'nombre' => 'Lenguas', 'ps_deweys_id' =>  '400']);
        DB::table('ss_deweys')->insert(['id' => '500', 'nombre' => 'Ciencias naturales y matemáticas', 'ps_deweys_id' =>  '500']);
        DB::table('ss_deweys')->insert(['id' => '600', 'nombre' => 'Tecnología (Ciencias aplicadas)', 'ps_deweys_id' =>  '600']);
        DB::table('ss_deweys')->insert(['id' => '700', 'nombre' => 'Las artes. Bellas artes y decorativas', 'ps_deweys_id' =>  '700']);
        DB::table('ss_deweys')->insert(['id' => '800', 'nombre' => 'Literatura y retórica', 'ps_deweys_id' =>  '800']);
        DB::table('ss_deweys')->insert(['id' => '900', 'nombre' => 'Geografía e historia', 'ps_deweys_id' =>  '900']);
    }
}
