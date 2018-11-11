<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Resposta</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="jumbotron">Resposta</h1>
      <?php
      if(isset($_SESSION['p'])){
        include "modelo/pessoa.class.php";
        $p = unserialize($_SESSION['p']);
        echo $p;
      }
      ?>
    </div>
  </body>
</html>
