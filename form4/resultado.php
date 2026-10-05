<?php 
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$edad = $_POST['edad'] ?? '';


if(empty($nombre)){
    echo "Nombre obligatorio";
}elseif(empty($correo)){
   echo "Correo Obligatorio";
}elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
   echo "Correo invalido";
}elseif(empty($edad)){
    echo "Edad obligatoria";
}elseif(!is_numeric($edad)){
    echo "La edad debeb ser un numero";
}elseif($edad < 18 || $edad > 120){
    echo "La edad debe estar entre 18 y 120 años";
}else{
    echo "Registro correcto";
}
?>