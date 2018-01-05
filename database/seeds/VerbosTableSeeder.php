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
            /** REGULARES */

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
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Faltar',
                'verb' => 'Fehlen',
                'ejemplo' => 'Nos falta dinero',
                'exampel' => 'Wir fehlen Geld',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Seguir',
                'verb' => 'Folgen',
                'ejemplo' => 'Siguen a su líder',
                'exampel' => 'Sie folgen ihrem Anführer',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Sentir',
                'verb' => 'Fühlen',
                'ejemplo' => 'Siento su inconformidad',
                'exampel' => 'Ich fühle ihr Unmut',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Guiar',
                'verb' => 'Führen',
                'ejemplo' => 'La luz nos guía',
                'exampel' => 'Das licht führt uns',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Pertenecer',
                'verb' => 'Gehören',
                'ejemplo' => 'El carro pertenece a Mario',
                'exampel' => 'Das Auto gehört Mario',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 3,
                'verbo' => 'Comerciar',
                'verb' => 'Handeln',
                'ejemplo' => 'Negociamos con drogas',
                'exampel' => 'Wir handeln mit Drogen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 4,
                'verbo' => 'Interesar',
                'verb' => 'Interessieren',
                'ejemplo' => 'El retrato interesa a todos',
                'exampel' => 'Das Porträt interessiert alle',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 1,
                'nivel' => 4,
                'verbo' => 'Comprar',
                'verb' => 'Kaufen',
                'ejemplo' => 'Es época de compras navideñas',
                'exampel' => 'Es ist Weihnachten Kaufen Epoche',
                'created_at' => Carbon::now(),
            ],

            /** IRREGULARES */

            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Ofrecer',
                'verb' => 'Bieten',
                'ejemplo' => 'Me ofrecen un viaje gratis',
                'exampel' => 'Sie bieten mir eine kostenlose Reise an',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Permanecer',
                'verb' => 'Bleiben',
                'ejemplo' => 'Todos permanecemos unidos',
                'exampel' => 'Wir bleiben gemeinsam',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Pensar',
                'verb' => 'Denken',
                'ejemplo' => 'El sacerdote piensa en Dios',
                'exampel' => 'Der Priester denkt an Gott',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Aconsejar',
                'verb' => 'Empfehlen',
                'ejemplo' => 'La doctora nos recomienda tomar medicamentos',
                'exampel' => 'Die Ärztin empfiehlt uns trinken Medikamenten',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Comer',
                'verb' => 'Essen',
                'ejemplo' => 'Los leones comen humanos',
                'exampel' => 'Löwen essen Menschen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Conducir',
                'verb' => 'Fahren',
                'ejemplo' => 'El conduce por la ciudad',
                'exampel' => 'Er fährt durch die Stadt',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Caer',
                'verb' => 'Fallen',
                'ejemplo' => 'Los angeles malos caen del cielo',
                'exampel' => 'Die Bösen Engeln fallen vom Himmel',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 2,
                'nivel' => 1,
                'verbo' => 'Encontrar',
                'verb' => 'Finden',
                'ejemplo' => 'Encontrar un cine es tu prioridad',
                'exampel' => 'Ein Kino zu finden ist dein Priorität',
                'created_at' => Carbon::now(),
            ],

            /** MODALES */

            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'poder (permiso)',
                'verb' => 'dürfen',
                'ejemplo' => '¿Puedo ir al baño?',
                'exampel' => 'Darf ich in das Badezimmer gehen?',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'poder (capacidad)',
                'verb' => 'können',
                'ejemplo' => 'Ella puede leer el periódico',
                'exampel' => 'Sie kann das Zeitung lesen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'gustar',
                'verb' => 'mögen',
                'ejemplo' => 'A los perros les gustan los huesos',
                'exampel' => 'Hunde mögen Knochen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'tener que',
                'verb' => 'müssen',
                'ejemplo' => 'Tengo que ir a la escuela',
                'exampel' => 'Ich muss zur Schule gehen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'deber',
                'verb' => 'sollen',
                'ejemplo' => 'Deberías correr más',
                'exampel' => 'Du solltest mehr rennen',
                'created_at' => Carbon::now(),
            ],
            [
                'verbo_categoria_id' => 3,
                'nivel' => 1,
                'verbo' => 'querer',
                'verb' => 'wollen',
                'ejemplo' => 'El niño quiere queso',
                'exampel' => 'Das Kind willst Käse',
                'created_at' => Carbon::now(),
            ],

        ];

        DB::table('verbos')->insert($verbos);
    }
}

















