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
    
    //getters
    public function getNombre(): string{
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getStock(): int{
        return $this->stock;
    }

    //setters
    public function setNombre($nuevoNombre): void{
        $this->nombre = $nuevoNombre;
    }

    public function setPrecio($nuevoPrecio): void{
        $this->precio = $nuevoPrecio;
    }

    public function setStock($nuevoStock): void{
        $this->stock = $nuevoStock;
    }
}
?>