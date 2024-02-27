<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    public function inicio() {
        $tiposDeAsientos = TipoAsiento::all();
        return view('tiposAsientos', compact('tiposDeAsientos'));
    }

    public function create(Request $request) {
        $nvoTipoAsiento = new TipoAsiento();
        $nvoTipoAsiento->descripcion = $request->descripcion;
        $nvoTipoAsiento->precio = $request->precio;
        $nvoTipoAsiento->estado = $request->estado;
        $nvoTipoAsiento::save();
        return view('agregarTipoAsiento');
    }
}
