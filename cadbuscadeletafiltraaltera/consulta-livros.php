<?php
session_start();
ob_start();

include_once 'dao/livrodao.class.php';
include_once 'modelo/livro.class.php';
include_once 'util/helper.class.php';

$livDAO = new LivroDAO();
$array = $livDAO->buscarLivros();
//TESTE!!!!!!
//var_dump($array);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Consulta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="jumbotron bg-info">Consulta de Livros</h1>

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
            <a class="nav-link" href="cadastro-livro.php">Cad. Livros</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="consulta-livros.php">Cons. Livros <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <h2>Consulta de livros!</h2>
    <?php
    if(isset($_SESSION['msg'])){
      Helper::alert($_SESSION['msg']);
      unset($_SESSION['msg']);
    }

    if(count($array) == 0){
        echo "<h2>Não há livros no banco!</h2>";
        return;
    }
    ?>

    <form name="filtrar" method="post" action="">

      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" name="txtfiltro"
                 placeholder="Digite a sua pesquisa" class="form-control">
        </div>

        <div class="form-group col-md-6">
          <select name="selfiltro" class="form-control">
            <option value="todos">Todos</option>
            <option value="codigo">Código</option>
            <option value="titulo">Título</option>
            <option value="editora">Editora</option>
            <option value="autor">Autor</option>
            <option value="anolancamento">Ano lançamento</option>
            <option value="genero">Gênero</option>
          </select>
        </div>
      </div> <!-- fecha row -->

      <div class="form-group">
        <input type="submit" name="filtrar" value="Filtrar" class="btn btn-primary btn-block">
      </div>
    </form>
    <?php
    if(isset($_POST['filtrar'])){
      $pesquisa = $_POST['txtfiltro'];
      $filtro = $_POST['selfiltro'];

      if(!empty($pesquisa)){
        $livDAO = new LivroDAO();
        $array = $livDAO->filtrar($pesquisa,$filtro);

        if(count($array) == 0){
          echo "<h3>Sua pesquisa não retornou nenhum livro!</h3>";
          return;
        }

      }else{
        echo "Digite uma pesquisa!";
      }//fecha else

    }//fecha if
    ?>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
          <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Editora</th>
            <th>Autor</th>
            <th>Ano lançamento</th>
            <th>Gênero</th>
            <th>Excluir</th>
            <th>Alterar</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Editora</th>
            <th>Autor</th>
            <th>Ano lançamento</th>
            <th>Gênero</th>
            <th>Excluir</th>
            <th>Alterar</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          foreach($array as $l){ //<- é um L
            echo "<tr>";
              echo "<td>$l->idLivro</td>";
              echo "<td>$l->titulo</td>";
              echo "<td>$l->editora</td>";
              echo "<td>$l->autor</td>";
              echo "<td>$l->anoLanc</td>";
              echo "<td>$l->genero</td>";
              echo "<td><a href='consulta-livros.php?id=$l->idLivro' class='btn btn-danger'>Excluir</a></td>";
              echo "<td><a href='alterar-livro.php?id=$l->idLivro' class='btn btn-warning'>Alterar</a></td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div><!-- table responsive -->
  </div>
  <?php
  if(isset($_GET['id'])){
    $livDAO->deletarLivro($_GET['id']);
    $_SESSION['msg'] = "Livro excluído com sucesso!";
    header("location:consulta-livros.php");
  }
  ?>
</body>
</html>
