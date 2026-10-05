<?php
 $estudiantes = ["Juan","Miguel","Daniela","Alejandro"];
 echo $estudiantes[2];
 //cuantos datos se tienen en el arreglo
 echo "<br>";
 echo count($estudiantes);
 echo "<br>";
 //recorrer el arreglo e imprimirlo
 for ($i=0; $i < count($estudiantes); $i++) { 
     echo $estudiantes[$i];
 }
 echo "<br>";
 foreach ($estudiantes as $estudiante) {
    echo $estudiante;
    /*Por cada estudiante que exista dentro de $estudiantes, guárdalo temporalmente en $estudiante.*/
 }
 echo "<br>";
 //modificar el valor 
 $estudiantes [2] = "Sofia";
 echo $estudiantes[2];

?>