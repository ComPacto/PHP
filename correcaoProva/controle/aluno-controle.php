<?php
session_start();
include "../modelo/aluno.class.php";

$a = new Aluno();

$a->nome = $_POST['txtnome'];
$a->sobrenome = $_POST['txtsobrenome'];
$a->idade = $_POST['txtidade'];
$a->tipoSanguineo = $_POST['txttiposanguineo'];
$a->n1 =$_POST['txtn1'];
$a->n2 = $_POST['txtn2'];
$a->p1 = $_POST['txtpeso1'];
$a->p2 = $_POST['txtpeso2'];
$a->totAulas = $_POST['txttotaulas'];
$a->numPres = $_POST['txtnumpres'];

echo $a;

$_SESSION['msg'] = "Aluno cadastrado com sucesso!";
$_SESSION['a'] = serialize($a);

$a->__destruct();
header("location:../resposta.php");
