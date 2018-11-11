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
      <form name="cadraio" method="POST" action="controle/controle-circulo.php">
        <div class="form-group">
          <input type="number" name="raio" placeholder="Digite o raio" autofocus class="form-control">
        </div>
        <div class="form-group text-center">
          <input type="submit" value="Verificar" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-danger">
        </div>
      </form>
      </div>
  </body>
</html>
