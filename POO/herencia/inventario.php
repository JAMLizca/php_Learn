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
        throw new InvalidArgumentException("<br>El precio debe ser mayor que cero");
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
            throw new InvalidArgumentException("El precio no puede ser menor o igual a cero");
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

    //método para controlar el stock
    public function reponerStock(int $cantidad): void {
        if($cantidad <= 0){
            throw new InvalidArgumentException("La cantidad es igual o menor a cero");
        }

        $this->stock += $cantidad;
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
$producto->reponerStock(50);
echo "<br>";
echo "Nuevo stock"," ".  $producto->getStock();
echo "<hr>";
try {
    $producto->reponerStock(-5);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo "<br>Stock nuevo:", " ". $producto->getStock();

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
    echo "<br>Stock restante: " . $producto->getStock();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo "<hr> <br>";
try {
   $producto->setPrecio(-500);
} catch (InvalidArgumentException  $e) {
    echo $e->getMessage();
    
}

echo "<hr> <br>";
try {
     $producto->setPrecio(-5000);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo "<hr> <br>";
try {
    $producto->setPrecio(950000);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo "Precio actual:"," ".  $producto->getPrecio();

echo "<hr>";

$producto = new Producto("Mouse", 50000, 10);
echo $producto->vender(3);
echo "<br>";
$producto->reponerStock(5);
$producto->setPrecio(60000);
echo "<hr>";
echo "Nombre: " . $producto->getNombre() . "<br>";
echo "Precio: $" . $producto->getPrecio() . "<br>";
echo "Stock final: " . $producto->getStock();


?>