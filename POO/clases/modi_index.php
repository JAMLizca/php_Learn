<?php

//clase
class Estudiante {
    public $nombre;
    public $edad;
    public $grado;

    //métodos = comportamientos de la clase
    public function saludar(): string {
        //$this hace referencia al objeto actual
        return "Hola soy {$this->nombre}";
    }

    //método con varias propiedades
    public function mostrarDatos(): string {
        return "{$this->nombre} tiene {$this->edad} y esta en grado {$this->grado}";
    }

    //constructor
    public function __construct( $nombre, $edad, $grado ){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->grado = $grado;
    }
}
//instancias de la clase = objetos
$estudiantesUno = new Estudiante("Juan", 18, 5);
$estudiantesDos = new Estudiante("pepito", 24, 7);

echo $estudiantesDos->nombre;


?>