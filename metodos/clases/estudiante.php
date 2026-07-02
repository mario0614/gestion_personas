<?php
require_once "persona.php";

class estudiante extends personas
{
    public function saludar()
    {
        return "Hola soy estudiante" . "". $this->nombre . "" . $this->apellido . " tengo " . $this->edad . " años y mi correo es: " . $this->correo . "<br>";
    }

}

?>