<?php
session_start();
include "../modelo/circulo.class.php";

$c = new Circulo();

$c->raio = $_POST['raio'];

echo $c;

$_SESSION['msg'] = 'Raio cadastrado com sucesso!';
$_SESSION['a'] = serialize($c);

$c->__destruct();
header("location:../resposta.php");
