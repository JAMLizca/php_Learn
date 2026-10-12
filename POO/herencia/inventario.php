<?php

class Producto{
    private $nombre;
    private $precio;
    private $stock;

    public function __construct($nombre, $precio, $stock){
     //validaciones en el constructor
     if (empty($nombre)){
        //throw new Exception("EL nombre no debe estar vacio", 1);   
        throw new InvalidArgumentException("El nombre no debe estar vacio");  
     }   
      
     if($precio <= 0){
        throw new InvalidArgumentException("El precio debe ser mayor que cero");
     }
    
     if($stock < 0){
        throw new InvalidArgumentException("El stock no puede ser negativo");
     }

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
           throw new InvalidArgumentException("Cantidad Invalida");
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
echo "<hr>";

try {
    $productoDos = new Producto("Teclado", -80000, 10);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();    
}finally{
    echo "<br> El programa continua ejecutandose";
}

echo "<hr>";
$productoTres = new Producto ("Mouse", 50000, 0);
echo $productoTres->getNombre();
echo "<br>";
echo $productoTres->getStock();
echo "<hr>";

try {
  echo $producto->vender(0);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo "<hr>";

try {
  echo $producto->vender(15);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo "<hr>";

try {
  echo $producto->vender(2);
  echo $producto->stock();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

?>