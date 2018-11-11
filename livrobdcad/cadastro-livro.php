<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de Livro</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
  <body>
      <div class="container">
        <h1 class="jumbotron bg-info">Cadastro de livros</h1>

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
                <a class="nav-link" href="cadastro-livro.php">Livros <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>

        <form name="cadlivro" method="post" action="">
          <div class="form-group">
            <input type="text" name="txttitulo" placeholder="Titulo" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="txteditora" placeholder="Editora" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="txtautor" placeholder="Autor" class="form-control">
          </div>
          <div class="form-group">
            <input type="number" name="txtanolanc" placeholder="Ano de lançamento" class="form-control">
          </div>
          <div class="form-group">
            <select name="selgenero" class="form-control">
              <option value="Terror">Terror</option>
              <option value="Ação">Ação</option>
              <option value="Suspense">Suspense</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary">
            <input type="reset" name="Limpar" value="Limpar" class="btn btn-danger">
          </div>
        </form>
        <?php
          if (isset($_POST['cadastrar'])) {
            include 'modelo/livro.class.php';
            include 'util/helper.class.php';
            include 'dao/livrodao.class.php';
            include 'util/padronizacao.class.php';

            $liv = new Livro();

            $liv->titulo = Padronizacao::padronizarMaiMin($_POST['txttitulo']);
            $liv->editora = Padronizacao::padronizarMaiMin($_POST['txteditora']);
            $liv->autor = Padronizacao::padronizarMaiMin($_POST['txtautor']);
            $liv->anoLanc = Padronizacao::padronizarMaiMin($_POST['txtanolanc']);
            $liv->genero = Padronizacao::padronizarMaiMin($_POST['selgenero']);

            $livDAO = new LivroDAO();
            $livDAO->cadastrarLivro($liv);

            Helper::alert("Livro cadastrado com sucesso!");
            echo $liv;
          }
        ?>
      </div>
  </body>
</html>
