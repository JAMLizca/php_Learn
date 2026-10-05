<?php 

//arrays multidimensional
$estudiantes = [
    [
    "nombre" => "Juan",
    "grado" => 5,
    "edad" => 12
    ],
    [
    "nombre" => "Juana",
    "grado" => 9,
    "edad" => 17
    ],
    [
    "nombre" => "Dani",
    "grado" => 3,
    "edad" => 7
    ]
];
//toma cada estudiante
foreach ($estudiantes as $estudia){
    //toma cada dato del estudiante
    foreach ($estudia as $clave => $valor ){
        echo "$clave : $valor";
    }
}
?>