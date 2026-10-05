<?php 
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$edad = $_POST['edad'] ?? '';

if( empty($nombre) || empty($correo) || $edad < 18){
  echo "Registro invalido";
}else{
  echo "Registro valido";
}

?>