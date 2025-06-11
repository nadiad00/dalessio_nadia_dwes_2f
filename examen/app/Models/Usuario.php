<?php

namespace App\Models;

class Usuario {
    public $nombre;
    public $apellido;
    public $dni;

    public function __construct($nombre, $apellido, $dni) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    public function obtenerNombreCompleto($nombre, $apellido, $dni) {
        $nombreCompleto = "Me llamo " . $nombre . " " . $apellido . " y mi DNI es " . $dni;
        return $nombreCompleto;
    }
    
}