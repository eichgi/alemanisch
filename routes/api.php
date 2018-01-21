<?php

use App\Ejercicio;
use App\Pronombre;
use App\PronombreTipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registro', 'UserController@registro');
Route::post('/login', 'UserController@login');

Route::get('/pronombres/{tipo}', function ($tipo) {
    $pronombre_tipo = PronombreTipo::where('nombre', $tipo)->first();
    $pronombres = Pronombre::where('pronombre_tipo_id', $pronombre_tipo->id)->get();
    $descripcion = $pronombre_tipo->descripcion;
    $enlace = $pronombre_tipo->enlace;
    $ejercicio_id = $pronombre_tipo->ejercicio_id;
    return response()->json(['data' => compact('pronombres', 'descripcion', 'enlace', 'ejercicio_id'), 'status' => 200]);
});

Route::post('/saveToRecord', 'HistorialEjerciciosController@store');
Route::post('/getRecord', 'HistorialEjerciciosController@index');

Route::get('/verbos/{categoria}/niveles', 'VerbosController@niveles');
Route::get('/verbos/{categoria}/{nivel}', 'VerbosController@show');

Route::get('/sustantivos/{categoria}/niveles', 'SustantivosController@niveles');
Route::get('/sustantivos/{categoria}/{nivel}', 'SustantivosController@show');

Route::get('/conjugador/{categoria}/niveles', 'ConjugadorController@niveles');
Route::get('/conjugador/{categoria}/{nivel}', 'ConjugadorController@show');
Route::get('/conjugador/{verbo}', 'ConjugadorController@mostrarVerbo');

Route::post('/contacto', 'EmailController@newContactMessage');










