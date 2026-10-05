<?php

//iniciando arrays asociativos sin fro ni foreach
$estudiantes = [
    "nombre" => "Alejandro",
    "edad" => 19,
    "correo" => "jose@gmail.com",
    "grado" => 9
];

echo $estudiantes["nombre"];
echo "<br>";
echo $estudiantes["edad"];
echo "<br>";
echo $estudiantes["correo"];
echo "<br>";
echo $estudiantes["grado"];
echo "<br>";
$estudiantes ["edad"] = 21;
echo $estudiantes["edad"];
?>