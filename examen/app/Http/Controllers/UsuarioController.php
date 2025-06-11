<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //
    public function procesarNombre(Request $request) {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $dni = $request->input('dni');

        $usuario = new Usuario($nombre, $apellido, $dni);
        $nombreCompleto = $usuario->obtenerNombreCompleto($nombre, $apellido, $dni);
        
        return response()->json([
            'nombrecompleto' => $nombreCompleto
        ], 200);
    }
}
