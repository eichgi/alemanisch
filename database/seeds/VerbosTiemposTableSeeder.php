<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerbosTiemposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verbos_tiempos = [
            ['tiempo' => 'Presente'],
            ['tiempo' => 'Pasado'],
            ['tiempo' => 'Futuro'],
        ];

        DB::table('verbos_tiempos')->insert($verbos_tiempos);
    }
}
