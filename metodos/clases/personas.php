<?php

class personas {
    public $nombre;
    public $edad;
    public $apellido;
    public $correo;

    public function saludar (){
return"mario"."</br>". $this->nombre . "</br>" . $this->edad . "</br>" . $this->correo ;
}
}
?>