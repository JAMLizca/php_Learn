<?php
$nombre = $_POST['nombre']?? '';
$correo = $_POST['correo']?? '';
$edad = $_POST['edad'] ?? '';

if(empty($nombre) ){
    echo "El nombre es obligatorio";
}elseif(empty($correo)){
    echo "El correo es obligatorio";
}elseif($edad < 18){
    echo "Debes tener 18 años o más";
}else{
    echo "Registro exitoso";
}

?>