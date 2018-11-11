<?php
require 'cliente.class.php';

$c = new Cliente();

$c->setNome("Zé");
$c->setSexo("Masculino");
$c->setIdade(22);

echo '<p>'.$c->getNome();
echo '<br>'.$c->getSexo();
echo '<br>'.$c->verificarSexo();
echo '<br>'.$c->getIdade();
echo '<br>'.$c->calcularIdade();
echo '<br>'.$c->verificarIdade().'</p>';

echo '<p>'.$c->getNome().
     '<br>'.$c->getSexo().
     '<br>'.$c->verificarSexo().
     '<br>'.$c->getIdade().
     '<br>'.$c->calcularIdade().
     '<br>'.$c->verificarIdade().'</p>';
