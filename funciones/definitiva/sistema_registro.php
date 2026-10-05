<?php 
$nombre = $_POST['nombre']?? '' ;
$correo = $_POST['correo']?? '' ;
$edad = $_POST['edad']?? '' ;
$grado = $_POST['grado']?? '' ;
$acudiente = $_POST['acudiente'] ?? '';

function validarNombre($nombre){
    if (empty($nombre)){
        return "El nombre del estudiante es obligatorio";
    }
}

function validarCorreo($correo){
  if(empty($correo)){
    return "El correo es obligatorio";
  }elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
    return "El correo no es valido";
  }
}

function validarEdad($edad){
    if(empty($edad)){
        return "La edad es obligatoria";
    }elseif(!is_numeric($edad)){
        return "La edad debe ser un número";
    }elseif($edad <5 || $edad >25){
        return "Edad minima 5 y maxima 25";
    }
}

function validarGrado($grado){
    if (empty($grado)){
       return "Ingresa el grado";
    } elseif($grado<1 || $grado >11){
        return "El grado no es válido";
    }
}

function validarAcudiente($acudiente){
    if(empty($acudiente)){
       return "El nombre del acudiente es obligatorio";
    }
}

//relacion edad y grado

function validarEdadGrado($edad, $grado){
    if (($grado >=1 && $grado <=3) && $edad < 5 ){
        return "La edad no corresponde al grado seleccionado";
    }elseif(($grado ==4 || $grado ==5) && $edad <8 ){
        return "La edad no corresponde al grado seleccionado";
    }elseif(($grado ==6 || $grado ==7) && $edad < 10){
        return "La edad no corresponde al grado seleccionado";
    }elseif(($grado ==8 || $grado ==9) && $edad < 12 ){
        return "La edad no corresponde al grado seleccionado";
    }elseif(($grado ==10 || $grado ==11) && $edad < 14){
        return "La edad no corresponde al grado seleccionado";
    }
}

$resultadoNombre = validarNombre($nombre);
$resultadoCorreo = validarCorreo($correo);
$resultadoEdad = validarEdad($edad);
$resultadoGrado = validarGrado($grado);
$resultadoAcudiente = validarAcudiente($acudiente);
$registroExitoso = "Registro exitoso";
//relacion
$resultadoRelacion = validarEdadGrado($edad, $grado);

if(!empty($resultadoNombre)){
  echo $resultadoNombre;
}elseif(!empty($resultadoCorreo)){
   echo $resultadoCorreo;
}elseif(!empty($resultadoEdad)){
    echo $resultadoEdad;
}elseif(!empty($resultadoGrado)){
   echo $resultadoGrado;
}elseif(!empty($resultadoAcudiente)){
    echo $resultadoAcudiente;
}elseif(!empty($resultadoRelacion)){
    echo $resultadoRelacion;
}else{
    echo "Registro exitoso";
}

?>