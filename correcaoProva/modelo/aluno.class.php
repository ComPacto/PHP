<?php
class Aluno{
  private $nome;
  private $sobrenome;
  private $idade;
  private $tipoSanguineo;
  private $n1;
  private $n2;
  private $p1;
  private $p2;
  private $totAulas;
  private $numPres;

  public function __construct(){}
  public function __destruct(){}

  public function __get($atributo){
    return $this->$atributo;
  }

  public function __set($atributo,$valor){
    $this->$atributo = $valor;
  }

  public function calcularMediaAritmetica(): float{
    return ($this->n1 + $this->n2) / 2;
  }

  public function calcularMediaPonderada(): float{
    return ($this->n1 * $this->p1 + $this->n2 * $this->p2) / ($this->p1 + $this->p2);
  }

  public function calcularFrequencia(): int{
    return ($this->numPres / $this->totAulas) * 100;
  }

  public function verificarAprovacao(): string{
    if ($this->calcularMediaAritmetica() >= 6 && $this->calcularFrequencia() >= 75) {
      return "Aprovado";
    }
    return "Reprovado";
  }

  public function verificarConceito(): string{
    if ($this->calcularMediaAritmetica() >= 9) {
      return "A";
    }else if($this->calcularMediaAritmetica() >= 8){
      return "B";
    }else if($this->calcularMediaAritmetica() >= 6){
      return "C";
    }
    return "D";
  }

  public function verificarCategoria(): string{
    if($this->idade >= 60){
      return "Idoso";
    }else if($this->idade >= 18){
      return "Adulto";
    }else if($this->idade >= 14){
      return "Juvenil";
    }else if($this->idade >= 12){
      return "Mirim";
    }
    return "Pré Mirim";
  }

  public function __toString(){
    return nl2br("Nome: $this->nome $this->sobrenome
                  Idade: $this->idade
                  Tipo sanguíneo: $this->tipoSanguineo
                  N1: $this->n1
                  N2: $this->n2
                  P1: $this->p1
                  P2: $this->p2
                  Total de aulas: $this->totAulas
                  Num. presenças: $this->numPres
                  MA: {$this->calcularMediaAritmetica()}
                  MP: {$this->calcularMediaPonderada()}
                  Frequência: {$this->calcularFrequencia()}%
                  Aprovação: {$this->verificarAprovacao()}
                  Conceito: {$this->verificarConceito()}
                  Categoria: {$this->verificarCategoria()}");
  }
}
