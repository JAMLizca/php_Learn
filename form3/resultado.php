<?php
$nombre = $_POST['nombre']?? '' ;
$correo = $_POST['correo'] ?? '' ;
$edad = $_POST['edad'] ?? '' ;

if (empty($nombre)){
    echo "El nombre es obligatorio";
}elseif(empty($correo)){
    echo "El correo es obligatorio";
}elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
    echo "El correo no es válido";
}elseif(!is_numeric($edad)){
    echo "La edad debe ser un numero";
    }elseif($edad <18){
    echo "Debes tener 18 años o más";
    } else{
    echo "Registro exitoso";
}
?>

//empty. isset, filter_var, is_numeric