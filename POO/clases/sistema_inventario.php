<?php

class producto{
    public $nombre;
    public $precio;
    public $stock;

    public function __construct($nombre,$precio,$stock){
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> stock = $stock;
    }

    public function mostrarDatos(): string {
        return "Nombre: {$this->nombre} <br>
                Precio: {$this->precio} <br>
                Stock: {$this->stock}";
    }

    public function vender($cantidad): string{
       if($cantidad <= 0 ){
        return "La cantidad debe ser mayor a cero";

       }elseif ($cantidad > $this->stock){
           return "Unidades insuficientes";
       }else{ 
          $this->stock =   $this->stock - $cantidad;
          return "Quedan {$this->stock} productos";
       }
    }

    public function reponer($cantidad): string{
        if($cantidad <= 0 ){
            return "La cantidad a reponer debe ser mayor a cero";
        }else{
            $this->stock = $this->stock + $cantidad;
            return "Nuevo stock disponible {$this->stock}";
        }
    }
}

$producto_Uno = new producto("Arroz", 2012, 12);
$productoDos = new producto("Fideos", 123, 14);

echo "<h3>Productos la rebaja</h3>";
echo "<br>";
echo $producto_Uno->mostrarDatos();
echo "<br>";
echo $producto_Uno->vender(12);
echo "<br>";
echo $producto_Uno->reponer(12);


?>