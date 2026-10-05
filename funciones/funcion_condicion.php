<?php
function verificarEdad($edad){
    if($edad < 18){
       return "Menor de edad";
    } else{
        return "Mayor de edad";
    }
}
$resultado = verificarEdad(34);
echo $resultado;
?>