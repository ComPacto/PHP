<?php
require 'calculadora.class.php';

$calculadora = new Calculadora();


$calculadora->setNum1(5);
$calculadora->setNum2(6);
$calculadora->setOp(2);

echo '<p>Resultado da opção escolhida: '.$calculadora->calcularNumeros().'</p>';
