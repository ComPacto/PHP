<?php
session_start();
include '../modelo/cliente.class.php';
include '../util/padronizacao.class.php';

$c = new Cliente;

$c->nomeCompleto = Padronizacao::padronizarMaiMin(Padronizacao::juntarNome($_POST['txtnome'],$_POST['txtsobrenome']));
$c->dataNasc = Padronizacao::juntarData($_POST['txtdia'],$_POST['txtmes'],$_POST['txtano']);
$c->renda = Padronizacao::padronizarMin($_POST['txtrenda']);
$c->email = ($_POST['txtemail']);
$c->sexo = Padronizacao::padronizarMaiMin($_POST['txtsexo']);
$c->cpf = Padronizacao::padronizarMaiMin($_POST['txtcpf']);
$c->rg = Padronizacao::padronizarMai($_POST['txtrg']);
$c->endereco = Padronizacao::padronizarMaiMin($_POST['txtendereco']);
$c->complemento = Padronizacao::padronizarMaiMin($_POST['txtcomplemento']);
$c->bairro = Padronizacao::padronizarMaiMin($_POST['txtbairro']);
$c->cep = ($_POST['txtcep']);
$c->cidade = Padronizacao::padronizarMaiMin(($_POST['txtcidade']));
$c->estado = Padronizacao::padronizarMai(($_POST['txtestado']));

$_SESSION['c']=serialize($c);

header("location:../resposta.php");
?>