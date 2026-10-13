<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    /**
     * Show the hola view.
     */
    public function index()
    {
        $mensaje = '¡Hola Mundo desde Laravel!';
        return view('hola', compact('mensaje'));
    }
}
