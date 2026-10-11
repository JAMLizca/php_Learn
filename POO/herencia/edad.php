<?php
class edad{
    private $edad = 20;


    public function __construct(int $edad){
        $this->edad = $edad;
    }

    public function getEdad(): int{
        return $this->edad;

    }

    public function setEdad(int $nuevaEdad): void{
        if( $nuevaEdad <= 5 || $nuevaEdad >100){
            return;
        }
        $this->edad = $nuevaEdad;
    }
}
 $edadNueva = new edad(20);

 echo "Edad antigua:"," \n" . $edadNueva->getEdad();
 echo "<br>";
 $edadNueva->setEdad(15);
 echo "Nueva edad: ", "\n" . $edadNueva->getEdad();
?>