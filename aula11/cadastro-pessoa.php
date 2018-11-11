<?php
session_start();

if(isset($_SESSION['erros'])){
  $erros = unserialize($_SESSION['erros']);
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
      <h1 class="jumbotron">Cadastro de  pessoa</h1>
      <?php
      if (isset($_SESSION['erros'])) {
        foreach ($erros as $e) {
          echo "<br>".$e;
        }
        unset($_SESSION['erros']);
      }
      ?>
      <form name="cadalu" id="cadalu" method="POST" action="controle/pessoa-controle.php">

        <div class="form-group">
          <input type="text" name="txtnome" placeholder="Digite o nome" autofocus
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txtemail" placeholder="Digite o email" autofocus
          class="form-control">
        </div>

        <div class="form-group">
          <input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
          <input type="reset" value="Limpar" class="btn btn-warning btn-block">
        </div>
      </form>
    </div>
  </body>
</html>
