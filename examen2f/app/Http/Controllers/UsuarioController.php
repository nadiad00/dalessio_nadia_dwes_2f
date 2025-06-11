<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function procesarNombre(Request $request) {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $dni = $request->input('dni');

        $usuario = new Usuario($nombre, $apellido, $dni);
        
        echo $request->input('nombre');
        echo "aa";
    }
}
