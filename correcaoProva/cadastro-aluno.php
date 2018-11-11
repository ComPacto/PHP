<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Cadastro de Aluno</title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1,maximum-scale=1" name="viewport">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="jumbotron">Cadastro de Aluno</h1>
      <form name="cadalu" id="cadalu" method="POST" action="controle/aluno-controle.php">

        <div class="form-group">
          <input type="text" name="txtnome" placeholder="Digite o nome do aluno" autofocus class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txtsobrenome"
          placeholder="Digite o sobrenome do aluno"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="number" name="txtidade"
          placeholder="Digite a idade"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txttiposanguineo"
          placeholder="Digite o tipo sanguíneo"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txtn1"
          placeholder="Digite a N1"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txtn2"
          placeholder="Digite a N2"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txtpeso1"
          placeholder="Digite o peso 1"
          class="form-control">
        </div>


        <div class="form-group">
          <input type="text" name="txtpeso2"
          placeholder="Digite o peso 2"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txttotaulas"
          placeholder="Digite o total de aulas"
          class="form-control">
        </div>

        <div class="form-group">
          <input type="text" name="txtnumpres"
          placeholder="Digite o número de presenças"
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
