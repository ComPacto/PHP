<?php
session_start();
include '../modelo/pessoa.class.php';
include '../util/padronizacao.class.php';
include '../util/validacao.class.php';

$erros = array();

if (!Validacao::validarNome($_POST['txtnome'])) {
  $erros[] = "Nome inválido!";
}

if(!Validacao::validarEmail($_POST['txtemail'])){
  $erros[] = "E-mail inválido!";
}

if(count($erros) == 0){
$p = new Pessoa();
$p->nome = Padronizacao::converterMaiMin($_POST['txtnome']);
$p->email = Padronizacao::converterMin($_POST['txtemail']);
//echo $p;
$_SESSION['p'] = serialize($p);
header("location:../resposta.php");
}else{
  $_SESSION['erros'] = serialize($erros);
  header("location:../cadastro-pessoa.php");
}
