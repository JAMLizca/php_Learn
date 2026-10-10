<?php
class empleado{
    public $nombre;
    public $cargo;
    public $salario;


    public function __construct($nombre, $cargo, $salario){
        $this-> nombre  = $nombre;
        $this-> cargo   = $cargo;
        $this-> salario = $salario;
    }

    public function mostrarDatos(): string{
        return "Nombre: {$this->nombre} <br>
                Cargo: {$this->cargo} <br>
                Salario: {$this->salario}";
    }

    public function aumentarSalario($cantidad): string{
        $this->salario = $this->salario + $cantidad;
        return "El nuevo salario es: {$this->salario}";
    }
}

$empleadoUno = new empleado("Juan", "Gerente", 122244);
$empleadoDos = new empleado("Pedro", "Desarrollador", 121234);

echo "<h3>Empleado Juan</h3>";
echo $empleadoUno->mostrarDatos();
echo "<br>";
echo $empleadoUno->aumentarSalario(200000);


?>