<?php

class producto {
    public $nombre;
    public $precio;
    public $stock;
    public $categoria;

    // Métodos
    public function mostrarDatos(): string {
        return "Producto {$this->nombre} precio {$this->precio} stock {$this->stock} categoria {$this->categoria}";
    }

    public function hayStock(): string {
        if ($this->stock != 0) {
            return "Hay unidades disponibles";
        } else {
            return "Producto agotado";
        }
    }

    // Constructor
    public function __construct($nombre, $precio, $stock, $categoria) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->categoria = $categoria;
    }
}

// Objetos
$producto_uno = new producto("Teclado", 12.32, 12, "PC gamer");

$producto_dos = new producto("Nevera", 45.12, 0, "Electrodomesticos");

$producto_tres = new producto("Mesa", 70.43, 4, "Hogar");

echo "<h3>Primer producto</h3>";
echo $producto_uno->nombre, "<br>";
echo $producto_uno->precio, "<br>";
echo $producto_uno->hayStock(), "<br>";
echo $producto_uno->categoria;

echo "<br>";

echo "<h3>Segundo producto</h3>";
echo $producto_dos->nombre, "<br>";
echo $producto_dos->precio, "<br>";
echo $producto_dos->hayStock(), "<br>";
echo $producto_dos->categoria;

echo "<br>";

echo "<h3>Tercer producto</h3>";
echo $producto_tres->nombre, "<br>";
echo $producto_tres->precio, "<br>";
echo $producto_tres->hayStock(), "<br>";
echo $producto_tres->categoria;

?>