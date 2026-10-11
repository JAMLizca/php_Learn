<?php

class producto{
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

    public function getPrecio() : int{
        return $this->precio;
    }

    public function getStock() : int{
        return $this->stock;
    }
    
    //setters
    public function setPrecio($nuevoPrecio): void{
        if($nuevoPrecio <= 0){
            return;
        }
        $this->precio = $nuevoPrecio;
    }

    //método
   public function vender(int $cantidad): void {
        if ($cantidad <= 0) {
            return;
        }

        if ($this->stock < $cantidad) {
            return;
        }

        $this->stock -= $cantidad; 
    }
}

//pruebas
$producto = new Producto("Teclado", 80000, 10);

echo $producto->getNombre();
echo "<br>";
echo $producto->getPrecio();
echo "<br>";
echo $producto->getStock();

$producto->vender(3);
echo "<br>";

echo $producto->getStock();
?>