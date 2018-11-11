<?php
session_start();
ob_start();
include_once 'util/helper.class.php';

if (isset($_GET['id'])) {
  include_once "dao/petdao.class.php";
  include_once "modelo/pet.class.php";

  $petDAO = new PetDAO();
  $array = $petDAO->filtrar($_GET['id'], "codigo");


  $pet = $array[0];

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Alteração de Pet</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
  <body>
      <div class="container">
        <h1 class="jumbotron bg-info">Alteração de Pets</h1>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="cadastro-pet.php">Cadastro de Pets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="consulta-pets.php">Consulta Pets</a>
              </li>
            </ul>
          </div>
        </nav>
        <?php
        echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
        unset($_SESSION['msg']);
        ?>
        <form name="cadpet" method="post" action="">
          <div class="form-group">
            <input type="text" name="txtnome" placeholder="Nome" class="form-control" value="<?php if(isset($pet)){ echo $pet->nome; }?>">
          </div>
          <div class="form-group">
            <input type="text" name="txtraca" placeholder="Raca" class="form-control" value="<?php if(isset($pet)){ echo $pet->raca; }?>">
          </div>
          <div class="form-group">
            <input type="number" name="txtidade" placeholder="Idade" class="form-control" value="<?php if(isset($pet)){ echo $pet->idade; }?>">
          </div>
          <div class="form-group">
            <input type="number" name="txtpeso" placeholder="Peso" class="form-control" value="<?php if(isset($pet)){ echo $pet->peso; }?>">
          </div>
          <div class="form-group">
            <input type="text" name="txtdono" placeholder="Dono" class="form-control" value="<?php if(isset($pet)){ echo $pet->dono; }?>">
          </div>
          <div class="form-group">
            <input type="submit" name="Alterar" value="Alterar" class="btn btn-primary">
            <input type="reset" name="Limpar" value="Limpar" class="btn btn-danger">
          </div>
        </form>
        <?php
          if(isset($_POST['Alterar'])){
            include_once 'modelo/pet.class.php';
            include_once 'dao/petdao.class.php';
            include 'util/padronizacao.class.php';

            $pet = new Pet();
            $pet->idPet = $_GET['id'];
            $pet->nome = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txtnome']));
            $pet->raca = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txtraca']));
            $pet->idade = $_POST['txtidade'];
            $pet->peso = $_POST['txtpeso'];
            $pet->dono = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txtdono']));

            $petDAO = new PetDAO();
            $petDAO->alterarPet($pet);

            $_SESSION['msg'] = "Pet alterado com sucesso!";
            header("location:consulta-pets.php");
            ob_end_flush();
            }
        ?>
      </div>
  </body>
</html>
