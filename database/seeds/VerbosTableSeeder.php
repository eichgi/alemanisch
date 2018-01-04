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
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Responder',
                'verb' => 'Antworten',
                'ejemplo' => 'Respondo a la profesora',
                'exampel' => 'Ich antworte dem Lehrerin',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Trabajar',
                'verb' => 'Arbeiten',
                'ejemplo' => 'El trabajo es necesario',
                'exampel' => 'Die Arbeit ist not',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Preguntar',
                'verb' => 'Fragen',
                'ejemplo' => 'El pregunta la hora',
                'exampel' => 'Er fragt die Zeit',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Creer',
                'verb' => 'Glauben',
                'ejemplo' => 'Yo creo en mi mismo',
                'exampel' => 'Ich glaube an mich',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Vivir',
                'verb' => 'Leben',
                'ejemplo' => 'El perro esta con vida',
                'exampel' => 'Der Hund lebt',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Aprender',
                'verb' => 'Lernen',
                'ejemplo' => 'Todos aprendemos',
                'exampel' => 'Wir alle lernen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Hacer',
                'verb' => 'Machen',
                'ejemplo' => 'Ellos hacen comida',
                'exampel' => 'Sie machen Essen ',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 1,
                'verbo' => 'Hablar',
                'verb' => 'Reden',
                'ejemplo' => 'Yo hablo con el profesor',
                'exampel' => 'Ich rede mit den Lehrer',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Decir',
                'verb' => 'Sagen',
                'ejemplo' => 'Todos decimos lo que pensamos',
                'exampel' => 'Wir alle sagen was wir denken',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Jugar',
                'verb' => 'Spielen',
                'ejemplo' => 'La niña juega con muñecas',
                'exampel' => 'Das mädchen spielt mit Puppen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Construir',
                'verb' => 'Bauen',
                'ejemplo' => 'Yo construyo casas',
                'exampel' => 'Ich baue Hausen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Significar',
                'verb' => 'Bedeuten',
                'ejemplo' => 'El cartel significa muerte',
                'exampel' => 'Das plakat bedeutet Tod',
                'nivel' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Formar',
                'verb' => 'Bilden',
                'ejemplo' => 'Ella forma un muñeco de nieve',
                'exampel' => 'Sie bildet einen Schneemann',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Desarrollar',
                'verb' => 'Entwickeln',
                'ejemplo' => 'Yo desarrollo una página',
                'exampel' => 'Ich entwickeln eine Seite',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Acordarse',
                'verb' => 'Erinnern',
                'ejemplo' => 'No recordamos la dirección',
                'exampel' => 'Wir erinnern uns nicht die Adresse',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 2,
                'verbo' => 'Aclarar',
                'verb' => 'Erklären',
                'ejemplo' => 'Tu aclaras el error',
                'exampel' => 'Du erklärt dieses Fehler',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Alcanzar',
                'verb' => 'Erreichen',
                'ejemplo' => 'El gato alcanza al ratón',
                'exampel' => 'Die Katze erreicht die Maus',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Narrar',
                'verb' => 'Erzählen',
                'ejemplo' => 'El periodista narra el suceso',
                'exampel' => 'Der Journalist erzählt das Ereignis',
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('verbos')->insert($verbos);
    }
}
