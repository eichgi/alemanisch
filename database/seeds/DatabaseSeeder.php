<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PronombresSeederTable::class);
        $this->call(EjerciciosTableSeeder::class);
        $this->call(EjerciciosCategoriasTableSeeder::class);
        $this->call(PronombresTiposSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(VerbosCategoriasTableSeeder::class);
        $this->call(VerbosTiemposTableSeeder::class);
        /*$this->call(VerbosNivelesTableSeeder::class);*/
        $this->call(VerbosTableSeeder::class);
    }
}
