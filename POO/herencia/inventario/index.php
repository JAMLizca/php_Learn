<?php
require_once 'inventario.php';

$nuevoProducto = new Producto("Mouse", 50000, 10);

echo $nuevoProducto->getNombre();
echo "<br>";
echo $nuevoProducto->getPrecio();
echo "<br>";
echo $nuevoProducto->getStock();
echo "<br>";
$nuevoProducto->setPrecio(600000);
echo "<br>";
echo "Nuevo precio:"," ".  $nuevoProducto->getPrecio();

?>