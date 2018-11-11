<?php
require '../modelo/mes.class.php';

$m = new Mes();

$m->setMes($_POST['mes']);

echo $m->validarMes();
