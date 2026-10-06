<?php
$nombre = $_POST['nombre']?? '';
$edad = $_POST['edad']?? '';
$correo = $_POST['correo']?? '';

$datos_usuarios = [
    "nombre" => $nombre,
    "edad"=>  $edad,
    "correo" => $correo,
];

foreach ($datos_usuarios as $clave => $valor){
   echo "$clave : $valor<br>";
}
?>