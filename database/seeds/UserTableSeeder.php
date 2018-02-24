<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@alemanisch.xyz',
                'password' => Hash::make('31chg1'),
                'api_token' => str_random(60),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Miembro',
                'email' => 'miembro@alemanisch.xyz',
                'password' => Hash::make('m13mbr0'),
                'api_token' => str_random(60),
                'created_at' => Carbon::now(),
            ]
        ];

        DB::table('users')->insert($users);
    }
}
