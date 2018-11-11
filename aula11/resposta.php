<?php
session_start();

if(isset($_SESSION['p'])){
  include 'modelo/pessoa.class.php';
  $p = unserialize($_SESSION['p']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Cadastro de Pessoa</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
      <script> src="vendor/components/jquery/jquery.min.js"></script>
      <script> src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="jumbotron">Resposta</h1>
      <?php
      if (isset($_SESSION['p'])) {
        echo "<p>".$p."</p>";
        unset($_SESSION['p']);
      }
      ?>
    </div>
  </body>
</html>
