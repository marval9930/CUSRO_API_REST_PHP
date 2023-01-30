<?php
require_once ("ClassUsuario.php");

$objUsuario= new Usuario("margarito","margarito@gmail.com","admin");

//echo Usuario::$strEstado; // accediendo a variables de tipo static

echo $objUsuario->getPerfil();

$objUsuario->setCambiarClave("1234567");

echo $objUsuario->getPerfil();