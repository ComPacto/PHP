<?php
require '../modelo/delta.class.php';

$d= new Delta();

$d->setA($_POST['a']);
$d->setB($_POST['b']);
$d->setC($_POST['c']);

echo $d->calcularDelta();
echo '<br>';
echo $d->calcularX1();
echo '<br>';-
echo $d->calcularX2();
