<?php
session_start();
include "../modelo/pessoa.class.php";
include "../util/padronizacao.class.php";
$p = new Pessoa();

$p->nome = Padronizacao::padronizarMaiMin($_POST['txtnome']);
$p->sobrenome = Padronizacao::padronizarMaiMin($_POST['txtsobrenome']);
$p->email = Padronizacao::padronizarMin($_POST['txtemail']);
$p->pais = Padronizacao::padronizarMaiPais($_POST['txtpais']);
$p->estado = Padronizacao::padronizarMaiEstado($_POST['txtestado']);

$_SESSION['p'] = serialize($p);
header("location:../resposta.php");
