<?php
function validarNombre($nombre){
    if (empty($nombre)){
        return "Nombre obligatorio";
    }
}

function validarEdad($edad){
    if (empty($edad)){
        return "Edad obligatoria";
    }elseif(!is_numeric($edad)){
        return "La edad debe ser numérica";
    }elseif($edad <18 || $edad >100){
        return "Edad entre 18-100";
    }
}

function validarCorreo($correo){
    if(empty($correo)){
        return "Correo obligatorio";
    }elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
        return "Formato de correo invalido";

    }

}

?>