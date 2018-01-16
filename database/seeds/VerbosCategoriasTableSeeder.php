<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerbosCategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verbos_categorias = [
            [
                'ejercicio_id' => 6,
                'categoria' => 'Regulares'
            ],
            [
                'ejercicio_id' => 7,
                'categoria' => 'Irregulares'
            ],
            [
                'ejercicio_id' => 8,
                'categoria' => 'Modales'
            ],
            [
                'ejercicio_id' => 9,
                'categoria' => 'Auxiliares'
            ],
        ];

        DB::table('verbos_categorias')->insert($verbos_categorias);
    }
}
