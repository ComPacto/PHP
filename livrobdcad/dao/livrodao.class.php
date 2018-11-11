<?php
require_once 'conexaobanco.class.php';
 class LivroDAO { //DATA ACCESS OBJECT
   private $conexao = null;

   public function __construct(){
     $this->conexao = ConexaoBanco::getInstance();
   }

   public function __destruct(){}

   public function cadastrarLivro($liv){
     try {
       $stat = $this->conexao->prepare("insert into livro(idlivro,titulo,editora,autor,anolanc,genero)
                                        values(null,?,?,?,?,?)");

       $stat->bindValue(1, $liv->titulo);
       $stat->bindValue(2, $liv->editora);
       $stat->bindValue(3, $liv->autor);
       $stat->bindValue(4, $liv->anoLanc);
       $stat->bindValue(5, $liv->genero);
       $stat->execute();
     } catch (PDOException $e) {
        echo "Erro ao cadastrar! ".$e;
     }


   }
 }//fecha classe
