<?php

$nombre = $_POST['nombre']?? '';
$edad = $_POST['edad'] ?? '' ;

if (empty($nombre) || $edad <18){
    echo "Datos invalidos";
}else {
    echo "Datos validos";
}
?>