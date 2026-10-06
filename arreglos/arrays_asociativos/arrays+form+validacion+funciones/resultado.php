<?php
$nombre = $_POST['nombre'] ?? '';
$rol    = $_POST['rol'] ?? '';

$rolesPermitidos = ["Administrador", "Empleado", "Recepcionista"];

$usuario = [
    "Nombre" => $nombre,
    "Rol"    => $rol
];

function validarNombre($nombre){
    if(empty($nombre)){
        return "El nombre es obligatorio";
    }
    return null;
}

function validarRol($rol, $rolesPermitidos){
    if(empty($rol)){
        return "El rol es obligatorio";
    }elseif(!in_array($rol, $rolesPermitidos)){
        return "El rol seleccionado no es válido";
    }
    return null;
}

$validarNombreUser = validarNombre($nombre);
$validarRolUsuario = validarRol($rol, $rolesPermitidos);

if(!empty($validarNombreUser)){
    echo $validarNombreUser;
}elseif(!empty($validarRolUsuario)){
    echo $validarRolUsuario;
}else{
    foreach($usuario as $clave => $valor){
        echo "$clave : $valor<br>";
    }
}
?>