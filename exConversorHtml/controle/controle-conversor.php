<?php
require '../modelo/conversor.class.php';

$conversor = new Conversor();

$conversor->setAno($_POST['ano']);
$conversor->setOp($_POST['op']);

echo $conversor->calcularIdadeMeses();
