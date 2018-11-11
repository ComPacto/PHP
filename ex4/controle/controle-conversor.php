<?php
require '../modelo/conversor.class.php';

$c= new Conversor();

$c->setReal($_POST['real']);
$c->setDolar(4.03);
$c->setEuro(4.73);

echo $c->converterParaDolar();
echo "<br>";
echo $c->converterParaEuro();
