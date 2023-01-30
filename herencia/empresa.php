<?php
require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

$objEmpleado=new Empleado(1233,"margarito",25);
$objEmpleado->setPuesto("administrador");
echo $objEmpleado->getDatosPersonales();
echo $objEmpleado->getPuesto();


$objCliente=new Cliente(1233,"margarito",25);
$objCliente->setCredito(100);
echo $objCliente->getDatosPersonales();
echo $objCliente->getCredito();