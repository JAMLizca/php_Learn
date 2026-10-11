<?php

class Producto{
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
   public function vender(int $cantidad): string {
        if ($cantidad <= 0) {
            return "Cantidad inválida";
        }

        if ($this->stock < $cantidad) {
            return "Stock insuficiente";
        } else {
            $this->stock -= $cantidad; 
            return "Venta realizada correctamente";
        }
    }
}

//pruebas
$producto = new Producto("Teclado", 80000, 10);

echo $producto->getNombre();
echo "<br>";
echo $producto->getPrecio();
echo "<br>";
echo $producto->getStock();
echo "<br>";
echo $producto->vender(4);

?>