<?php
$nombre = $_POST['nombre']?? '';
$edad = $_POST['edad']?? '';
$correo = $_POST['correo']?? '';

$datos = [
    "Nombre" => $nombre,
    "Edad"=> $edad,
    "Correo" => $correo
];

//validar nombre
if (empty($nombre)){
    echo "Nombre obligatorio<br>";
}
//validar edad
elseif(empty($edad)){
    echo "Edad obligatoria";
}elseif(!is_numeric($edad)){
    echo "La edad debe ser numerica<br>";
}elseif($edad <18 || $edad >100){
    echo "Rango de edad permitido 18-100<br>";
}
//validar correo
elseif(empty($correo)){
    echo "Correo obligatorio<br>";
}elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
    echo "Formato invalido<br>";
}else{
    foreach ($datos as $clave => $valor){
    echo "$clave : $valor <br>";
 }
} 
?>