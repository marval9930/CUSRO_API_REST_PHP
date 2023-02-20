<?php
require_once("ClassOperacion.php");

$objRaiz = new Calcular();
// echo $objRaiz->raizCuadrada(9.0);
// echo '<br>';
// echo $objRaiz->potencia(3,5);

echo '<br>';
print($objRaiz->op_basica(3,5,'-'));


