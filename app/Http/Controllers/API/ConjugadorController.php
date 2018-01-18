<?php

namespace App\Http\Controllers;

use App\Ejercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConjugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoria, $nivel)
    {
        $verbos = DB::table('conjugador')
            ->join('verbos_categorias', 'verbos_categorias.id', '=', 'conjugador.verbos_categoria')
            ->join('verbos', 'verbos.id', '=', 'conjugador.verbos_id')
            ->where('categoria', ucfirst($categoria))
            ->where('conjugador.nivel', ucfirst($nivel))
            ->select('pronombre', 'pronomen', 'conjugador.verbo', 'conjugador.verb')
            ->get();

        $ejercicio = Ejercicio::
        where('categoria', $categoria)
            ->where('nivel', $nivel)
            ->first();

        $ejercicio_id = $ejercicio->id;

        return response()->json(compact('verbos', 'ejercicio_id'), 200);
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

    public function niveles($categoria)
    {
        $niveles = DB::table('conjugador')
            ->join('verbos_categorias', 'verbos_categorias.id', '=', 'conjugador.verbos_categoria')
            ->where('categoria', ucfirst($categoria))
            ->max('nivel');

        return response()->json(compact('niveles'), 200);
    }
}
