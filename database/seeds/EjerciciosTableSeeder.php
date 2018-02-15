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
            /** VERBOS */
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
                'categoria' => 'regulares',
                'nivel' => 5,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'irregulares',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'irregulares',
                'nivel' => 2,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'irregulares',
                'nivel' => 3,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'irregulares',
                'nivel' => 4,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'modales',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 2,
                'categoria' => 'auxiliares',
                'nivel' => 1,
            ],
            /** SUSTANTIVOS */
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'personas',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'personas',
                'nivel' => 2,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'animales',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'animales',
                'nivel' => 2,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'lugares',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'transporte',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'tiempo',
                'nivel' => 1,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'tiempo',
                'nivel' => 2,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'tiempo',
                'nivel' => 3,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'tiempo',
                'nivel' => 4,
            ],
            [
                'ejercicios_categorias_id' => 3,
                'categoria' => 'tiempo',
                'nivel' => 5,
            ],
        ];

        DB::table('ejercicios')->insert($ejercicios);

        /** EJERCICIOS CONJUGADOR */
        unset($ejercicios);
        for ($verbo = 1; $verbo < 74; $verbo++) {
            if ($verbo <= 32) {
                $categoria = 'regulares';
            } else if ($verbo >= 33 && $verbo <= 64) {
                $categoria = 'irregulares';
            } else if ($verbo >= 65 && $verbo <= 70) {
                $categoria = 'modales';
            } else {
                $categoria = 'auxiliares';
            }

            for ($tiempo = 1; $tiempo < 4; $tiempo++) {
                $ejercicios[] = [
                    'ejercicios_categorias_id' => 4,
                    'categoria' => $categoria,
                    'tiempo_id' => $tiempo,
                    'verbo_id' => $verbo,
                ];
            }
        }

        /*$ejercicios = [
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'modales',
                'tiempo_id' => 2,
                'verbo_id' => 65,
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'modales',
                'tiempo_id' => 1,
                'verbo_id' => 65,
            ],

            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 1,
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 2
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 3
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 4
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 5
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 6
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 7
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 2,
                'verbo_id' => 8
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 1,
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 2
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 3
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 4
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 5
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 6
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 7
            ],
            [
                'ejercicios_categorias_id' => 4,
                'categoria' => 'regulares',
                'tiempo_id' => 1,
                'verbo_id' => 8
            ],
        ];*/

        DB::table('ejercicios')->insert($ejercicios);
    }
}












