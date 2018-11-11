<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Cadastro Aluno</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="jumbotron bg-info">Resposta</h1>
      <?php
        echo "<p>";
        echo "<br>Média aritmética: ".$_GET['aritmetica'];
        echo "<br>Média ponderada: ".$_GET['ponderada'];
        echo "<br>Frequência: ".$_GET['frequencia']."%";
        echo "<br>Status do aluno: ".$_GET['status'];
        echo "<br>Conceito: ".$_GET['conceito'];
        echo "<br>Categoria do aluno: ".$_GET['categoria'];
        echo "</p>";
      ?>
    </div>
  </body>
</html>
