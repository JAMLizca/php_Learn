<?php 

//Funciones
function calcularEdad($añoActual, $añoNacimiento){
    return ($añoActual - $añoNacimiento);
}
$edad = calcularEdad (2030, 2000);
echo $edad;

?>