<?php 

//array asociativo + foreach
 $cata = [
    "producto" => "Pan",
    "precio" => 12.5,
    "stock" => 12, 
    "categoria" => "panesitos"
];

foreach ($cata as $clave => $valor){
    echo "$clave: $valor <br>";
}
?>