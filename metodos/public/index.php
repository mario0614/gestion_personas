<?php
require_once "../clases/personas.php";
require_once "../clases/ventas.php";

$persona1 = new personas("mario",36,"mercado","adminimario_0614@outlook.es");
echo $persona1->saludar();
$persona2 = new personas ("usermario",36,"mercado", "usermario_0614@outlook.es");
echo $persona2->saludar();

$ventas = new ventas("mario",36,"mercado","adminimario_0614@outlook.es","propiedades");
echo $ventas->saludar();

?>