<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PronombresSeederTable extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $pronombres = [
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'yo',
                'pronomen' => 'ich',
                'ejemplo' => 'Yo aprendo',
                'exempel' => 'Ich lerne',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'tu',
                'pronomen' => 'du',
                'ejemplo' => 'Tú aprendes',
                'exempel' => 'Du lernst',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'el',
                'pronomen' => 'er',
                'ejemplo' => 'Él aprende',
                'exempel' => 'Er lernt',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'ella',
                'pronomen' => 'sie',
                'ejemplo' => 'Ella aprende',
                'exempel' => 'Sie lernt',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'eso',
                'pronomen' => 'es',
                'ejemplo' => 'Eso aprende',
                'exempel' => 'Es lernt',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'nosotros',
                'pronomen' => 'wir',
                'ejemplo' => 'Nosotros aprendemos',
                'exempel' => 'Wir lernen',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'ustedes',
                'pronomen' => 'ihr',
                'ejemplo' => 'Ustedes aprenden',
                'exempel' => 'Ihr lernt',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 1,
                'pronombre' => 'ellos',
                'pronomen' => 'sie',
                'ejemplo' => 'Ellos aprenden',
                'exempel' => 'Sie lernen',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'me',
                'pronomen' => 'mich',
                'ejemplo' => 'Ella me enseña',
                'exempel' => 'Sie unterrichtet mich',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'te',
                'pronomen' => 'dich',
                'ejemplo' => 'El te enseña',
                'exempel' => 'Er lehrt dich',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'lo',
                'pronomen' => 'ihn',
                'ejemplo' => 'Ella le enseña',
                'exempel' => 'Sie unterrichtet ihn',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'la',
                'pronomen' => 'sie',
                'ejemplo' => 'El la enseña',
                'exempel' => 'Er unterrichtet sie',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'nuestro',
                'pronomen' => 'uns',
                'ejemplo' => 'Ella nos enseña',
                'exempel' => 'Sie lehrt uns',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'suyo',
                'pronomen' => 'euch',
                'ejemplo' => 'El les enseña a ustedes',
                'exempel' => 'Er lehrt euch',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 2,
                'pronombre' => 'de ellos',
                'pronomen' => 'sie',
                'ejemplo' => 'Ella les enseña a ellos',
                'exempel' => 'Sie lehrt sie',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'a mi',
                'pronomen' => 'mir',
                'ejemplo' => 'Me dieron una lección',
                'exempel' => 'Sie gaben mir eine Lektion',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'a ti',
                'pronomen' => 'dir',
                'ejemplo' => 'Te doy un libro',
                'exempel' => 'Ich gebe dir ein Buch',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'le',
                'pronomen' => 'ihm',
                'ejemplo' => 'Yo le doy una lección',
                'exempel' => 'Ich gebe ihm eine Lektion',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'le',
                'pronomen' => 'ihr',
                'ejemplo' => 'El le da un consejo a ella',
                'exempel' => 'Er gibt ihr einen Rat',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'le',
                'pronomen' => 'ihm',
                'ejemplo' => 'Le doy una croqueta a el (al perro)',
                'exempel' => 'Ich gebe ihm eine Krokette',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'a nosotros',
                'pronomen' => 'uns',
                'ejemplo' => 'Ellos nos enseñan',
                'exempel' => 'Sie lehren uns',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'a ustedes',
                'pronomen' => 'euch',
                'ejemplo' => 'Los escuchamos',
                'exempel' => 'Wir hören euch',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 3,
                'pronombre' => 'a ellos',
                'pronomen' => 'ihnen',
                'ejemplo' => 'Les doy un libro a ellos',
                'exempel' => 'Ich gebe ihnen ein Buch',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'mio',
                'pronomen' => 'mein',
                'ejemplo' => 'Este proyecto es mío',
                'exempel' => 'Diese projekt ist mein',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'tuyo',
                'pronomen' => 'dein',
                'ejemplo' => 'El libro es tuyo',
                'exempel' => 'Das Buch ist deinen',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'suyo',
                'pronomen' => 'sein',
                'ejemplo' => 'Ella es su madre',
                'exempel' => 'Sie ist seine Mutter',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'suyo',
                'pronomen' => 'ihr',
                'ejemplo' => 'Este libro es de ella',
                'exempel' => 'Dieses Buch ist von ihr',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'suyo',
                'pronomen' => 'sein',
                'ejemplo' => 'Ese es su juguete',
                'exempel' => 'Das ist sein Spielzeug',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'de nosotros',
                'pronomen' => 'unser',
                'ejemplo' => 'Este curso es nuestro',
                'exempel' => 'Dieser Kurs ist unser',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'de ustedes',
                'pronomen' => 'euer',
                'ejemplo' => 'Su proyecto es genial',
                'exempel' => 'Euer projekt ist toll',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 4,
                'pronombre' => 'de ellos',
                'pronomen' => 'ihr',
                'ejemplo' => 'Su libro es negro',
                'exempel' => 'Ihr Buch ist schwarz',
                'created_at' => Carbon::now()
            ],
            [
                'pronombre_tipo_id' => 5,
                'pronombre' => '',
                'pronomen' => 'ihr',
                'ejemplo' => 'Su libro es negro',
                'exempel' => 'Ihr Buch ist schwarz',
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('pronombres')->insert($pronombres);
    }
}
