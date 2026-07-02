<?php

class personas
 {
    public $nombre;
    public $edad;
    public $apellido;
    public $correo;

    public function __construct($nombre,$edad,$apellido,$correo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->apellido = $apellido;
        $this->correo = $correo;
        
        
    }

    public function saludar (){
  return "hola"."</br>". $this->nombre . "</br>" . $this->edad . $this->apellido . "</br>" . $this->correo ;
}
}


?>