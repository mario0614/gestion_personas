<?php

class personas
 {
    public $nombre;
    public $edad;
    public $apellido;
    public $correo;

    public function __construct($nombre,$edad,$correo,$apellido)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->apellido = $apellido;
        
    }

    public function saludar (){
  return "hola"."</br>". $this->nombre . "</br>" . $this->edad . "</br>" . $this->correo ;
}
}
?>