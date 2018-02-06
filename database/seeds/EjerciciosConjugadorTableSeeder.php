<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjerciciosConjugadorTableSeeder extends Seeder
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
                'tiempo_id' => 2,
                'verbo_id' => 65,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
            ]
        ];

        DB::table('ejercicios_conjugador')->insert($ejercicios);
    }
}
