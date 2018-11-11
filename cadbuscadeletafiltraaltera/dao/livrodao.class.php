<?php
require 'conexaobanco.class.php';
 class LivroDAO { //DATA ACCESS OBJECT

   private $conexao = null;

   public function __construct(){
     $this->conexao = ConexaoBanco::getInstance();
   }

   public function __destruct(){}

   public function cadastrarLivro($liv){
     try{
       //statement                    //SQL --> case insensitive
       $stat=$this->conexao->prepare("insert into livro
                                    (idlivro,titulo,editora,autor,anolanc,genero)
                                    values(null,?,?,?,?,?)");
       $stat->bindValue(1, $liv->titulo);
       $stat->bindValue(2, $liv->editora);
       $stat->bindValue(3, $liv->autor);
       $stat->bindValue(4, $liv->anoLanc);
       $stat->bindValue(5, $liv->genero);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao cadastrar! ".$e;
     }//fecha catch
   }//fecha cadastrarLivro

   public function buscarLivros(){
     try{
       $stat = $this->conexao->query("select * from livro");
       $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Livro');
       return $array;
     }catch(PDOException $e){
       echo "Erro ao buscar livros! ".$e;
     }//fecha catch
   }//fecha buscarLivros

   public function filtrar($pesquisa, $filtro){
     try{
       $query = "";
       switch($filtro){
         case "todos": $query = "";
         break;

         case "codigo": $query = "where idlivro = ".$pesquisa;
         break;

         case "titulo": $query = "where titulo like '%".$pesquisa."%'";
         break;

         case "editora": $query = "where editora like '%".$pesquisa."%'";
         break;

         case "autor": $query = "where autor like '%".$pesquisa."%'";
         break;

         case "anolancamento": $query = "where anolanc like '%".$pesquisa."%'";
         break;

         case "genero": $query = "where genero like '%".$pesquisa."%'";
         break;
       }

       $stat = $this->conexao->query("select * from livro {$query}");
       $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Livro');
       return $array;

     }catch(PDOException $e){
       echo "Erro ao filtrar livros. ".$e;
     }//fecha catch
   }//fecha filtrar

   public function alterarLivro($liv){
     try{
       $stat = $this->conexao->prepare("update livro set titulo=?, editora=?, autor=?, anolanc=?, genero=? where idlivro=?");

       $stat->bindValue(1, $liv->titulo);
       $stat->bindValue(2, $liv->editora);
       $stat->bindValue(3, $liv->autor);
       $stat->bindValue(4, $liv->anoLanc);
       $stat->bindValue(5, $liv->genero);
       $stat->bindValue(6, $liv->idLivro);

       $stat->execute();

     }catch(PDOException $e){
       echo "Erro ao alterar livro! ".$e;
     }//fecha catch
   }//fecha alterarLivros

   public function deletarLivro($id){
     try{
       $stat = $this->conexao->prepare("delete from livro where idlivro = ?");
       $stat->bindValue(1, $id);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao excluir livro! ".$e;
     }//fecha catch
   }//fecha deletarLivro
 }//fecha classe
