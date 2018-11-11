<?php
require '../modelo/valor.class.php';

$v= new Valor();

$v->setX1($_POST['x1']);
$v->setY1($_POST['y1']);
$v->setX2($_POST['x2']);
$v->setY2($_POST['y2']);

header("location:../resposta.php?parordenado={$v->calcularParOrdenado()}");
