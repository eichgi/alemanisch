<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConjugadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verbos = [
            [
                'verbos_categoria' => 4,
                'verbos_id' => 71,
                'pronombre' => 'yo',
                'pronomen' => 'ich',
                'verbo' => 'soy/estoy',
                'verb' => 'bin',
                'nivel' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'verbos_categoria' => 4,
                'verbos_id' => 71,
                'pronombre' => 'tú',
                'pronomen' => 'du',
                'verbo' => 'eres/estás',
                'verb' => 'bist',
                'nivel' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'verbos_categoria' => 4,
                'verbos_id' => 71,
                'pronombre' => 'él/ella/eso',
                'pronomen' => 'er/sie/es',
                'verbo' => 'es/está',
                'verb' => 'ist',
                'nivel' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'verbos_categoria' => 4,
                'verbos_id' => 71,
                'pronombre' => 'nosotros',
                'pronomen' => 'wir',
                'verbo' => 'somos/estamos',
                'verb' => 'sind',
                'nivel' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'verbos_categoria' => 4,
                'verbos_id' => 71,
                'pronombre' => 'ustedes',
                'pronomen' => 'ihr',
                'verbo' => 'son/están',
                'verb' => 'seid',
                'nivel' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'verbos_categoria' => 4,
                'verbos_id' => 71,
                'pronombre' => 'ellos',
                'pronomen' => 'sie',
                'verbo' => 'son/están',
                'verb' => 'sind',
                'nivel' => 1,
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('conjugador')->insert($verbos);
    }
}
