<?php
require_once("ClassTienda.php");

$objProducto = new Tienda();
$strProducto = "Teclado";
$fltPrecio=110;
$intStock= 10;

$intCantidadVendida=3;
$objProducto->setProducto($strProducto,$fltPrecio,$intStock);

echo $objProducto->getProducto();

$objProducto->setCarrito($strProducto,$intCantidadVendida);
$objProducto->setStock($intCantidadVendida);

echo $objProducto->getProducto();
echo $objProducto->getCarrito();