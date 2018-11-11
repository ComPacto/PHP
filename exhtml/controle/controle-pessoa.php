<?php
include '../modelo/pessoa.class.php';

$p = new Pessoa();

$p->setNome($_POST['txtnome']);
$p->setIdade($_POST['numidade']);

echo "Nome: ".$p->getNome();
echo "<br>";
echo "Idade: ".$p->getIdade();
echo "<br>";
echo "Idade em meses: ".$p->calcularIdade();
