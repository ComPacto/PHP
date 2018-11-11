<?php
session_start();
ob_start();
include_once 'util/helper.class.php';

if(isset($_GET['id'])){
  include_once "dao/livrodao.class.php";
  include_once "modelo/livro.class.php";

  $livDAO = new LivroDAO();
  $array = $livDAO->filtrar($_GET['id'], "codigo");

  //var_dump($array);

  $liv = $array[0];

  //echo "<br>".$liv;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Edição de Livro</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
  <body>
      <div class="container">
        <h1 class="jumbotron bg-info">Edição de livro</h1>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Sistema</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastro-livro.php">Cad. Livros <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="consulta-livros.php">Cons. Livros</a>
              </li>
            </ul>
          </div>
        </nav>
        <?php
        echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
        unset($_SESSION['msg']);
        ?>
        <form name="cadlivro" method="post" action="">
          <div class="form-group">
            <input type="text" name="txttitulo" placeholder="Titulo" class="form-control"
                   value="<?php if(isset($liv)){ echo $liv->titulo; }?>">
          </div>
          <div class="form-group">
            <input type="text" name="txteditora" placeholder="Editora" class="form-control"
                   value="<?php if(isset($liv)){ echo $liv->editora; }?>">
          </div>
          <div class="form-group">
            <input type="text" name="txtautor" placeholder="Autor" class="form-control"
                   value="<?php if(isset($liv)){ echo $liv->autor; }?>">
          </div>
          <div class="form-group">
            <input type="number" name="txtanolanc" placeholder="Ano de lançamento" class="form-control"
            value="<?php if(isset($liv)){ echo $liv->anoLanc; }?>">
          </div>
          <div class="form-group">
            <select name="selgenero" class="form-control">
              <option value="Terror" <?php
                                     if(isset($liv)){
                                        if($liv->genero == "Terror"){
                                          echo "selected='selected'";
                                        }
                                     }
                                     ?>
                                     >Terror</option>
              <option value="Ação" <?php if(isset($liv)){if($liv->genero == "Ação"){echo "selected='selected'";}} ?>>Ação</option>
              <option value="Suspense" <?php if(isset($liv)){if($liv->genero == "Suspense"){echo "selected='selected'";}} ?>>Suspense</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="alterar" value="Alterar" class="btn btn-primary">
            <input type="reset" name="Limpar" value="Limpar" class="btn btn-danger">
          </div>
        </form>
        <?php
          //falta código
          if(isset($_POST['alterar'])){
            include_once 'modelo/livro.class.php';
            include_once 'dao/livrodao.class.php';
            include 'util/padronizacao.class.php';

            $liv = new Livro();
            $liv->idLivro = $_GET['id'];
            $liv->titulo = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txttitulo']));
            $liv->editora = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txteditora']));
            $liv->autor = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txtautor']));
            $liv->anoLanc = $_POST['txtanolanc']; //n precisa é int
            $liv->genero = Padronizacao::antiXSS($_POST['selgenero']);
            $livDAO = new LivroDAO();
            $livDAO->alterarLivro($liv);

            $_SESSION['msg'] = "Livro alterado com sucesso!";
            header("location:consulta-livros.php");

            //echo "<h2>Livro cadastrado com sucesso!</h2>";
            //Helper::alert("Livro cadastrado com sucesso!");
            //echo $liv;
            ob_end_flush();
          }
        ?>
      </div>
  </body>
</html>
