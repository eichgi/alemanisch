<?php

namespace App\Http\Controllers;

use App\HistorialEjercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialEjerciciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario = $request->usuario_id;
        $categories = [];

        $record = DB::select('SELECT 
                                CONCAT(ejercicios_categorias.categoria, " ", ejercicios.categoria, " ", ejercicios.nivel) AS nombre, 
                                COUNT(*) as total,
                                ejercicios_categorias.categoria as categoria
                              FROM historial_ejercicios
                              INNER JOIN ejercicios ON ejercicios.id = historial_ejercicios.ejercicio_id
                              INNER JOIN ejercicios_categorias ON ejercicios_categorias.id = ejercicios.ejercicios_categorias_id
                              WHERE user_id = ?
                              GROUP BY historial_ejercicios.ejercicio_id', [$usuario]);
        foreach ($record as $rec) {
            $rec->nombre = ucwords($rec->nombre);
        }

        foreach ($record as $rec) {
            $categories[$rec->categoria][] = $rec;
        }

        return response()->json(compact('categories'), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $record = new HistorialEjercicio;
        $record->user_id = $request->user_id;
        $record->ejercicio_id = $request->ejercicio_id;
        $record->save();

        return response()->json(['status' => 'Registrado'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
