<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Circulo</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <h1 class="jumbotron bg-info">Digite o raio</h1>
      <?php
      echo "<p>";
      echo "<br>Raio: ".$_GET['raio'];
      echo "<br>Área: ".$_GET['area'];
      echo "<br>Perímetro: ".$_GET['perimetro'];
      echo "</p>";
      ?>
      </div>
  </body>
</html>
