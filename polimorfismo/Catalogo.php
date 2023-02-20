<?php
require_once ("ClassMesa.php");

$objCama= new Producto("cama", 6500);
$arrInfoProducto= $objCama->getInfoProducto();

print_r('<pre>');
print_r($arrInfoProducto);
print_r('<pre>');

$objMueble = new Mueble("closet", 2000,"casita","cafe","madera");
$arrInfoMueble=$objMueble->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMueble);
print_r('<pre>');

$objMesa = new Mesa("mesa", 1500,"marca", "azul","madera","mediana");
$objMesa->setForma("cuadrada");
$arrInfoMesa=$objMesa->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMesa);
print_r('<pre>');

