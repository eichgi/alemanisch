<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerbosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verbos = [
            /** MODALES */
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'Poder (permiso)',
                'verb' => 'Dürfen',
                'ejemplo' => '¿Puedo ir al baño?',
                'exampel' => 'Darf ich in das Badezimmer gehen?',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'Poder (capacidad)',
                'verb' => 'Können',
                'ejemplo' => 'Ella puede leer el periódico',
                'exampel' => 'Sie kann das Zeitung lesen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'Gustar',
                'verb' => 'Mögen',
                'ejemplo' => 'A los perros les gustan los huesos',
                'exampel' => 'Hunde mögen Knochen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'Tener que',
                'verb' => 'Müssen',
                'ejemplo' => 'Tengo que ir a la escuela',
                'exampel' => 'Ich muss zur Schule gehen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'Deber',
                'verb' => 'Sollen',
                'ejemplo' => 'Deberías correr más',
                'exampel' => 'Du solltest mehr rennen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'Querer',
                'verb' => 'Wollen',
                'ejemplo' => 'El niño quiere queso',
                'exampel' => 'Das Kind willst Käse',
                'created_at' => Carbon::now(),
            ],
            /** AUXILIARES  */
            [
                'verbo_categoria_id' => 4,
                'nivel' => 1,
                'verbo' => 'Ser',
                'verb' => 'Sein',
                'ejemplo' => 'Ser o no ser, esa es la cuestión',
                'exampel' => 'Sein oder nicht sein, das ist hier die Frage',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 4,
                'nivel' => 1,
                'verbo' => 'Tener',
                'verb' => 'Haben',
                'ejemplo' => 'Yo tengo tiempo para aprender alemán',
                'exampel' => 'Ich habe Zeit um Deutsch zu lernen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 4,
                'nivel' => 1,
                'verbo' => 'Convertirse',
                'verb' => 'Werden',
                'ejemplo' => 'A sabio sólo se llega a través de la experiencia',
                'exampel' => 'Klug wird man nur aus Erfahrung',
                'created_at' => Carbon::now(),
            ],

        ];

        DB::table('verbos')->insert($verbos);
    }
}

















