<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelHasRoles = [
            [
                'role_id' => 1,
                'model_id' => 1,
                'model_type' => 'App\User',
            ],
            [
                'role_id' => 2,
                'model_id' => 2,
                'model_type' => 'App\User',
            ],
        ];

        DB::table('model_has_roles')->insert($modelHasRoles);
    }
}
