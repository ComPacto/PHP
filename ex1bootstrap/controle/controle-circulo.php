<?php
require '../modelo/circulo.class.php';

$c = new Circulo();

$c->setRaio($_POST['raio']);

header("location:../resposta.php?raio={$c->getRaio()}&area={$c->calcularArea()}&perimetro={$c->calcularPerimetro()}");
