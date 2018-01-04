<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PronombresTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            [
                'ejercicio_id' => 1,
                'nombre' => 'Nominativos',
                'descripcion' => 'Los pronombres personales en Nominativo es una de las primeras cosas que hay
                    aprender en alemán, dado que son básicos para realizar nuestras primeras
                    oraciones.',
                'enlace' => 'https://www.alemansencillo.com/pronombres-en-aleman',
                'created_at' => Carbon::now(),
            ],
            [
                'ejercicio_id' => 2,
                'nombre' => 'Acusativos',
                'descripcion' => 'Los pronombres personales en Nominativo es una de las primeras cosas que hay
                    aprender en alemán, dado que son básicos para realizar nuestras primeras
                    oraciones.',
                'enlace' => 'https://www.alemansencillo.com/pronombres-en-aleman',
                'created_at' => Carbon::now(),
            ],
            [
                'ejercicio_id' => 3,
                'nombre' => 'Dativos',
                'descripcion' => 'El dativo se utiliza para expresar la persona o cosa que recibe el daño o provecho
                    de la acción verbal. Así que responde a las preguntas: ¿a quién? o ¿para quién?, formuladas al verbo.',
                'enlace' => 'https://www.gramatica-alemana.es/gramatica/pronombres-personales',
                'created_at' => Carbon::now(),
            ],
            [
                'ejercicio_id' => 4,
                'nombre' => 'Posesivos',
                'descripcion' => 'El pronombre posesivo se utiliza para hacer referencia al objeto que pertenece a 
                    una persona. Para declinar el pronombre posesivo primero debes elegir el pronombre correcto según la
                    persona y después declinarlo según el género y el número.',
                'enlace' => 'https://www.alemansencillo.com/pronombres-en-aleman#posesivos',
                'created_at' => Carbon::now(),
            ],
            [
                'ejercicio_id' => 5,
                'nombre' => 'Reflexivos',
                'descripcion' => 'Los pronombres reflexivos hacen referencia al sujeto sobre el cual versa la frase.
                    Al igual que en español los verbos reflexivos, necesitan un pronombre reflexivo para completar el 
                    significado del verbo.',
                'enlace' => 'https://www.gramatica-alemana.es/gramatica/pronombres-reflexivos',
                'created_at' => Carbon::now(),
            ],

        ];

        DB::table('pronombres_tipos')->insert($tipos);
    }
}
