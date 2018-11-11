<?php
require '../modelo/calculadora.class.php';

$calculadora = new Calculadora();


$calculadora->setNum1($_POST['num1']);
$calculadora->setNum2($_POST['num2']);
$calculadora->setOp($_POST['op']);

echo '<p>Resultado da opção escolhida: '.$calculadora->calcularNumeros().'</p>';
