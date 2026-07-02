<?php
class ventas extends personas{
    public $propiedades;

    public function __construct($nombre, $edad, $apellido,$correo,$propiedades){
        parent::__construct($nombre,$edad,$apellido,$correo);
        $this->propiedades=$propiedades;
    }
    
        public function saludar(){
        return parent::saludar() . $this->propiedades;
    }
}
?>