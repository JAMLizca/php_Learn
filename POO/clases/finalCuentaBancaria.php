<?php
class cuentaBancaria{
    public $titular;
    public $numeroCuenta;
    public $saldo;

    public function __construct($titular, $numeroCuenta, $saldo){
        $this-> titular= $titular;
        $this-> numeroCuenta= $numeroCuenta;
        $this-> saldo= $saldo;
    }

    public function mostrarDatos(): string{
        return "Titular: {$this->titular}<br>
                Numero de cuenta: {$this->numeroCuenta}<br>
                Saldo: {$this->saldo}";
    }

    public function depositar($cantidad): string{
        if($cantidad <= 0){
            return "La cantidad necesita ser mayor a cero";
        }else{
            $this->saldo = $this->saldo + $cantidad;
            return "El nuevo saldo es de {$this->saldo}";
        }
    }

    public function retirar($cantidad): string{
        if ($cantidad <= 0){
            return "La cantidad necesita ser mayor a cero";
        }elseif($cantidad > $this->saldo){
            return "La cantidad supera al saldo disponible";
        }else{
            $this->saldo = $this->saldo - $cantidad;
            return "El nuevo saldo actualizado con el descuento es de {$this->saldo}";
        }
    }


}

$titularUno = new cuentaBancaria("Laura",1001, 500000);
$titularDos = new cuentaBancaria("Andrés", 1002, 800000);

echo "<h3>Datos de la cuenta bancaria {$titularUno->nombre}</h3>";
echo $titularUno->mostrarDatos();
echo "<br>";
echo $titularUno->depositar(100000);
echo "<br>";
echo $titularUno->retirar(200000);
echo $titularUno->retirar(500000);
echo "<br>";
echo "<h3>Datos de la cuenta bancaria {$titularDos->nombre}</h3>";

?>