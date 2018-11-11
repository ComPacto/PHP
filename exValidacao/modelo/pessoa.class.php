<?php
class Pessoa{
  private $nome;
  private $sobrenome;
  private $email;
  private $pais;
  private $estado;
  private $cidade;
  private $bairro;
  private $rua;
  private $complemento;
  private $cep;

  public function __construct(){}
  public function __destruct(){}

  public function __get($a){
    return $this->$a;
  }

  public function __set($a,$v){
    $this->$a = $v;
  }

  public function __toString(){
    return nl2br("Nome: $this->nome $this->sobrenome
                  E-mail: $this->email
                  País: $this->pais
                  Estado: $this->estado
                  Cidade: $this->cidade
                  Bairro: $this->bairro
                  Rua: $this->rua
                  Complemento: $this->complemento
                  CEP: $this->cep");
  }
}
