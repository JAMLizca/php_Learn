<?php
require_once 'inventario.php';

//array de objeos
$producto = [];

$producto[] = new Producto("Mouse", 500000, 10);
$producto[] = new Producto("Teclado", 600000, 110);
$producto[] = new Producto("Laptop", 700000, 90);

foreach ($producto as $item) {
    echo " ", " ". $item->getNombre();
    echo "<br>";
    echo " ", " ". $item->getPrecio();
    echo "<br>";
    echo " ", " ". $item->getStock();
       echo "<br>";
}

/*$nuevoProducto = new Producto("Mouse", 50000, 10);

echo $nuevoProducto->getNombre();
echo "<br>";
echo $nuevoProducto->getPrecio();
echo "<br>";
echo $nuevoProducto->getStock();
echo "<br>";
$nuevoProducto->setPrecio(600000);
echo "<br>";
echo "Nuevo precio:"," ".  $nuevoProducto->getPrecio();*/

?>