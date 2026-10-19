<?php
 
 class Estudiante{
    private $nombre;
    private $edad;
    private $grado;

    //Constructor
    public function __construct($nombre, $edad, $grado){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->grado = $grado;
    }
    
    //Getters
    public function getNombre(): string{
        return $this->nombre;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function getGrado(): int{
        return $this->grado;
    }


    ///Setters
    public function setNombre($nuevoNombre): void{
        $this->nombre = $nuevoNombre;
    }

    public function setEdad($nuevaEdad): void{
        $this->edad = $nuevaEdad;
    }

    public function setGrado($nuevoGrado): void{
        $this->grado = $nuevoGrado;
    }

 }
?>