<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerbosNivelesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveles = [
            ['nivel' => '1'],
            ['nivel' => '2'],
            ['nivel' => '3'],
            ['nivel' => '4'],
            ['nivel' => '5'],
        ];

        DB::table('verbos_niveles')->insert($niveles);
    }
}
