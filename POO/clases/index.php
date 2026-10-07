<?php

class Estudiante {
    public $nombre;
    public $edad;
    public $grado;
}

$estudiantesUno = new Estudiante();
$estudiantesDos = new Estudiante();

//asignar valores 
$estudiantesUno->nombre = "Juan";
$estudiantesUno->edad = 18;
$estudiantesUno->grado = 11;

$estudiantesDos->nombre = "María";
$estudiantesDos->edad = 17;
$estudiantesDos->grado = 10;

echo "Estudiante"," ". $estudiantesUno->nombre ," ", "con edad"," ". $estudiantesUno->edad , " ", "del grado", " ". $estudiantesUno->grado ;
echo "<br>";
echo "Estudiante"," ". $estudiantesDos->nombre ," ", "con edad"," ". $estudiantesDos->edad , " ", "del grado", " ". $estudiantesDos->grado ;

?>