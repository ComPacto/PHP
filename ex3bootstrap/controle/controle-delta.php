<?php
require '../modelo/delta.class.php';

$d= new Delta();

$d->setA($_POST['a']);
$d->setB($_POST['b']);
$d->setC($_POST['c']);

header("location:../resposta.php?delta={$d->calcularDelta()}&x1={$d->calcularX1()}&x2={$d->calcularX2()}");
