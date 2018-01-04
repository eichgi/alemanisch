<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjerciciosCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['categoria' => 'pronombres'],
            ['categoria' => 'verbos'],
            ['categoria' => 'sustantivos'],
            ['categoria' => 'articulos'],
        ];

        DB::table('ejercicios_categorias')->insert($categorias);
    }
}
