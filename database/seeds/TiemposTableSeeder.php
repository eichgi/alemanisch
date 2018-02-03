<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiemposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiempos = [
            [
                'nombre' => 'pasado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'presente',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
            [
                'nombre' => 'futuro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
        ];

        DB::table('tiempos')->insert($tiempos);
    }
}
