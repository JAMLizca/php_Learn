<?php
require "validaciones.php";
include "datos.php";

$N_nombre = validarNombre($nombre);
$N_edad = validarEdad($edad);
$N_correo = validarCorreo($correo);

if (!empty($N_nombre)){
    echo $N_nombre;
}elseif(!empty($N_edad)){
    echo $N_edad;
}elseif(!empty($N_correo)){
    echo $N_correo;
}else{
    foreach ($arreglo as $clave => $valor) {
        echo "$clave : $valor<br>";
    }
    echo "Tudo bem";
}
?>