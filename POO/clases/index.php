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
}
//instancias de la clase = objetos
$estudiantesUno = new Estudiante();
$estudiantesDos = new Estudiante();

//asignar valores a los objetos
$estudiantesUno->nombre = "Juan";
$estudiantesUno->edad = 18;
$estudiantesUno->grado = 11;

$estudiantesDos->nombre = "María";
$estudiantesDos->edad = 17;
$estudiantesDos->grado = 10;

echo "Estudiante"," ". $estudiantesUno->nombre ," ", "con edad"," ". $estudiantesUno->edad , " ", "del grado", " ". $estudiantesUno->grado ;
echo "<br>";
echo "Estudiante"," ". $estudiantesDos->nombre ," ", "con edad"," ". $estudiantesDos->edad , " ", "del grado", " ". $estudiantesDos->grado ;

echo "<br>";
//Llamar método instancia
echo $estudiantesUno->saludar();
echo "<br>";
echo $estudiantesUno->mostrarDatos();

?>