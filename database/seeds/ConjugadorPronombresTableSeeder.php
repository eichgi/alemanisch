<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConjugadorPronombresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pronombres = [
            [
                'pronombre' => 'yo',
                'pronomen' => 'ich',
            ],
            [
                'pronombre' => 'tú',
                'pronomen' => 'du',
            ],
            [
                'pronombre' => 'él',
                'pronomen' => 'er',
            ],
            [
                'pronombre' => 'ella',
                'pronomen' => 'sie',
            ],
            [
                'pronombre' => 'eso',
                'pronomen' => 'es',
            ],
            [
                'pronombre' => 'nosotros',
                'pronomen' => 'wir',
            ],
            [
                'pronombre' => 'ustedes',
                'pronomen' => 'ihr',
            ],
            [
                'pronombre' => 'ellos',
                'pronomen' => 'sie',
            ],
        ];

        DB::table('conjugador_pronombres')->insert($pronombres);
    }
}
