<?php
class Producto {
    private $nombre;
    private $precio;
    private $stock;

    public function __construct($nombre, $precio, $stock){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getStock(): float{
        return $this->stock;
    }
}
?>