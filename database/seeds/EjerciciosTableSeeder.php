<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ejercicios = [
            [
                'ejercicios_categorias_id' => 1,
                'categoria' => 'nominativos',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 1,
                'categoria' => 'acusativos',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 1,
                'categoria' => 'dativos',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 1,
                'categoria' => 'posesivos',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 1,
                'categoria' => 'reflexivos',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'regulares',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'regulares',
                'nivel' => 2,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'regulares',
                'nivel' => 3,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'regulares',
                'nivel' => 4,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'modales',
                'nivel' => 1,
            ],
        ];

        DB::table('ejercicios')->insert($ejercicios);
    }
}
