<?php
require_once("ClassOperaciones.php");

$num1=10;
$num2=13;
$oprecion= new operaciones($num1,$num2);

$suma= $oprecion->getSuma();
echo "<h2>".'total de la suma de '.$num1. " y ". $num2. " es: ".$suma ."</h2>";
echo "<br><br>";

$resta= $oprecion->getResta();
echo "<h2>".'total de la resta de '.$num1. " y ". $num2. " es: ".$resta."</h2>";
echo "<br><br>";

$multiplicacion= $oprecion->getMultiplicasion();
echo "<h2>".'total de la multiplicación de '.$num1. " y ". $num2. " es: ".$multiplicacion ."</h2>";
echo "<br><br>";

$division= $oprecion->getDivicion();
echo "<h2>".'total de la division de '.$num1. " y ". $num2. " es: ".$division ."</h2>";
echo "<br><br>";