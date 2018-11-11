<?php
class Cliente{
  private $nomeCompleto;
  private $dataNasc;
  private $renda;
  private $email;
  private $sexo;
  private $cpf;
  private $rg;
  private $endereco;
  private $complemento;
  private $bairro;
  private $cep;
  private $cidade;
  private $estado;

  public function __construct(){}
  public function __destruct(){}

  public function __get($a){
    return $this->$a;
  }

  public function __set($a,$v){
    $this->$a = $v;
  }

  public function __toString(){
    return nl2br("Nome: $this->nomeCompleto
                  Data de nascimento: $this->dataNasc
                  Renda: R$ $this->renda 
                  E-mail: $this->email
                  Sexo: $this->sexo
                  CPF: $this->cpf
                  RG: $this->rg
                  Complemento: $this->complemento
                  Bairro: $this->bairro
                  CEP: $this->cep
                  Cidade: $this->cidade
                  Estado: $this->estado");
  }
}
