<?php
// require_once("../controllers/Empleado.php");
// require_once("../controllers/Cliente.php");
// require_once("../controllers/Persona.php");
require_once("../autoload.php");
use controllers\Empleado;
use controllers\Cliente;
//use Controllers\Persona;

$objEmpleado=new Empleado(1233,"margarito",25);
$objEmpleado->setPuesto("administrador");
$objEmpleado->setMensaje("Bievenido empleado");

echo $objEmpleado->getMensaje();
echo $objEmpleado->getDatosPersonales();
echo $objEmpleado->getPuesto();

echo "<br><hr><br>";
$objCliente=new Cliente(1233,"margarito",25);
$objCliente->setCredito(100);

echo $objCliente->getDatosPersonales();
echo 'Creditos: '.$objCliente->getCredito();
$objCliente->setMensaje("Bievenido cliente");
echo $objCliente->getMensaje();

// $msg= new Persona();
// echo "<br><br>";
// echo $msg->saludar();