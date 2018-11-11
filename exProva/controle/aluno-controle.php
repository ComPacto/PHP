<?php
include '../modelo/aluno.class.php';

$a = new Aluno();

$a->setNome($_POST['txtnome']);
$a->setSobrenome($_POST['txtsobrenome']);
$a->setIdade($_POST['numidade']);
$a->setTipoSanguineo($_POST['txtsangue']);
$a->setNota1($_POST['nota1']);
$a->setPeso1($_POST['peso1']);
$a->setNota2($_POST['nota2']);
$a->setPeso2($_POST['peso2']);
$a->setTotalAulas($_POST['numaulas']);
$a->setNumPresencas($_POST['numpresencas']);

//echo "<p>Nome: ".$a->getNome().
//     "<br>Sobrenome: ".$a->getSobrenome().
//     "<br>Idade: ".$a->getIdade().
//     "<br>Tipo sanguíneo: ".$a->getTipoSanguineo().
//     "<br>N1: ".$a->getNota1().
//     "<br>Peso 1: ".$a->getPeso1().
//     "<br>N2: ".$a->getNota2().
//     "<br>Peso 2: ".$a->getPeso2().
//     "<br>Número de aulas ministradas: ".$a->getTotalAulas().
//     "<br>Número de presenças: ".$a->getNumPresencas()."</p>";

header("location:../resposta.php?aritmetica={$a->calcularMediaAritmetica()}&ponderada={$a->calcularMediaPonderada()}&frequencia={$a->calcularFrequencia()}&status={$a->verificarAprovacao()}&conceito={$a->verificarConceito()}&categoria={$a->verificarCategoria()}");
