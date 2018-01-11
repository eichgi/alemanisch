<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SustantivosCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['categoria' => 'Personas'],
            ['categoria' => 'Animales'],
            ['categoria' => 'Lugares'],
        ];

        DB::table('sustantivos_categorias')->insert($categorias);
    }
}
