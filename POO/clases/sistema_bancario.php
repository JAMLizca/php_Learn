
<?php

class CuentaBancaria {
    public $titular;
    public $numeroCuenta;
    public $saldo;

    // Constructor
    public function __construct($titular, $numeroCuenta, $saldo) {
        $this->titular = $titular;
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldo;
    }

    // Mostrar los datos de la cuenta
    public function mostrarDatos(): string {
        return "Titular: {$this->titular}<br>
                Número de cuenta: {$this->numeroCuenta}<br>
                Saldo: {$this->saldo}";
    }

    // Depositar dinero
    public function depositar($cantidad): string {
        if ($cantidad <= 0) {
            return "La cantidad debe ser mayor que cero";
        }

        $this->saldo = $this->saldo + $cantidad;

        return "Depósito exitoso. Nuevo saldo: {$this->saldo}";
    }

    // Retirar dinero
    public function retirar($cantidad): string {
        if ($cantidad <= 0) {
            return "La cantidad debe ser mayor que cero";
        } elseif ($cantidad > $this->saldo) {
            return "Saldo insuficiente";
        } else {
            $this->saldo = $this->saldo - $cantidad;

            return "Retiro exitoso. Nuevo saldo: {$this->saldo}";
        }
    }
}

// Crear objetos
$cuenta_Uno = new CuentaBancaria("Juan", 1234, 125.30);
$cuenta_Dos = new CuentaBancaria("Pedro", 2345, 200);


echo "<h3>Cuenta de Pedro</h3>";
echo $cuenta_Dos->mostrarDatos();
echo "<hr>";
// Depositar 100
echo $cuenta_Dos->depositar(100);
echo "<br>";
// Retirar 20
echo $cuenta_Dos->retirar(20);
echo "<hr>";
// Mostrar saldo final
echo "<h3>Datos finales</h3>";
echo $cuenta_Dos->mostrarDatos();

?>