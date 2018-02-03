<?php

namespace App\Http\Controllers;

use App\Tiempo;
use Illuminate\Http\Request;

class TiempoController extends Controller
{

    public function index()
    {
        $tiempos = Tiempo::all();
        return response()->json(compact('tiempos'), 200);
    }

}
