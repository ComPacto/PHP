<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Cadastro do Raio</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="jumbotron bg-info" align="center">Digite o raio</h1>
      <form name="cadcirculo" id="cadcirculo" method="POST" action="controle/circulo-controle.php">
          <div class="form-group">
            <input type="number" name="raio" placeholder="Digite o raio" autofocus class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
            <input type="reset" value="Limpar" class="btn btn-warning btn-block">
          </div>
      </form>
    </div>
  </body>
</html>
