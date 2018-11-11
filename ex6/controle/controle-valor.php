<?php
require '../modelo/valor.class.php';

$v = new Valor();

$v->setValor1($_POST['num1']);
$v->setValor2($_POST['num2']);
$v->setValor3($_POST['num3']);
$v->setOp($_POST['op']);

echo $v->ordenarValores();
