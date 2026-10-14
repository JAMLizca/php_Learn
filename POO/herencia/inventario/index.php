<?php
require_once 'inventario.php';

// Array de objetos
$producto = [];

$producto[] = new Producto("Mouse", 500000, 10);
$producto[] = new Producto("Teclado", 600000, 110);
$producto[] = new Producto("Laptop", 700000, 90);

// Mostrar inventario inicial
echo "<h3>Inventario inicial</h3>";

foreach ($producto as $item) {
    echo "Nombre: " . $item->getNombre() . "<br>";
    echo "Precio: " . $item->getPrecio() . "<br>";
    echo "Stock: " . $item->getStock() . "<br><hr>";
}

// Modificar el precio del teclado
foreach ($producto as $item) {
    if ($item->getNombre() === "Teclado") {
        $item->setPrecio(650000);
    }
}

// Eliminar la Laptop
foreach ($producto as $indice => $item) {
    if ($item->getNombre() === "Laptop") {
        unset($producto[$indice]);
    }
}

// Mostrar inventario actualizado
echo "<h3>Inventario actualizado</h3>";

foreach ($producto as $item) {
    echo "Nombre: " . $item->getNombre() . "<br>";
    echo "Precio: " . $item->getPrecio() . "<br>";
    echo "Stock: " . $item->getStock() . "<br><hr>";
}
echo "<h3>Mostrar</h3>";
//Mostrar unicamente el producto a buscar
foreach($producto as $item){
    if($item->getNombre() === "Teclado"){
        echo $item->getNombre(). "<br>";
        echo $item->getPrecio(). "<br>";
        echo $item->getStock(). "<br>";
    }
}
?>