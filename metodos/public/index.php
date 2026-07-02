<?php
require_once "../clases/personas.php";

$persona1 = new personas();
$persona1->nombre = "mario";
$persona1->edad = "36";
$persona1->correo = "mario_0614@outlook.es";
$persona1->apellido = "diaz";
$persona1->saludar();

$persona2 = new personas();
$persona2->nombre ="usuario";
$persona2->edad= 36;
$persona2->apellido= "mercado";
$persona2->correo= "usuario_@1542outloo.es";
$persona2->saludar();


?>