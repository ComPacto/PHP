<?php
class Aluno{
  private $nome;
  private $sobrenome;
  private $idade;
  private $tipoSanguineo;
  private $nota1;
  private $peso1;
  private $nota2;
  private $peso2;
  private $totalAulas;
  private $numPresencas;

  public function Aluno(){

  }

  public function getNome():string{
    return $this->nome;
  }

  public function setNome(string $nome):void{
    $this->nome = $nome;
  }

  public function getSobrenome():string{
    return $this->sobrenome;
  }

  public function setSobrenome(string $sobrenome):void{
    $this->sobrenome = $sobrenome;
  }

  public function getIdade():int{
    return $this->idade;
  }

  public function setIdade(int $idade):void{
    $this->idade= $idade;
  }

  public function getTipoSanguineo():string{
    return $this->tipoSanguineo;
  }

  public function setTipoSanguineo(string $tipoSanguineo):void{
    $this->tipoSanguineo=$tipoSanguineo;
  }

  public function getNota1():float{
    return $this->nota1;
  }

  public function setNota1(float $nota1):void{
    $this->nota1 = $nota1;
  }

  public function getPeso1():float{
    return $this->peso1;
  }

  public function setPeso1(float $peso1):void{
    $this->peso1 = $peso1;
  }

  public function getNota2():float{
    return $this->nota2;
  }

  public function setNota2(float $nota2):void{
    $this->nota2 = $nota2;
  }

  public function getPeso2():float{
    return $this->peso2;
  }

  public function setPeso2(float $peso2):void{
    $this->peso2 = $peso2;
  }

  public function getTotalAulas():int{
    return $this->totalAulas;
  }

  public function setTotalAulas(float $totalAulas):void{
    $this->totalAulas = $totalAulas;
  }

  public function getNumPresencas():float{
    return $this->numPresencas;
  }

  public function setNumPresencas(float $numPresencas):void{
    $this->numPresencas = $numPresencas;
  }

  public function calcularMediaAritmetica(){
   return ($this->nota1 + $this->nota2) / 2;
  }

  public function calcularMediaPonderada(){
    return ($this->nota1 * $this->peso1 + $this->nota2 * $this->peso2) / ($this->peso1 + $this->peso2);
  }

  public function calcularFrequencia(){
    return $this->numPresencas * 100 / $this->totalAulas;
  }


  public function verificarAprovacao(){
    if ($this->calcularMediaAritmetica() >= 6 && $this->calcularFrequencia() >= 75) {
      return "Aluno Aprovado";
    }
    return "Aluno Reprovado";
   }

    public function verificarConceito(){
      if ($this->calcularMediaAritmetica() >= 9) {
        return "A";
      }else if ($this->calcularMediaAritmetica() >= 8){
        return "B";
      }elseif ($this->calcularMediaAritmetica() >= 6) {
        return "C";
      }
      return "D";
    }

    public function verificarCategoria(){
      if ($this->idade >= 60) {
        return "Idoso";
      }elseif ($this->idade >= 59) {
        return "Adulto";
      }elseif ($this->idade >= 17) {
        return "Infanto Juvenil";
      }elseif ($this->idade >= 14) {
        return "Infantil";
      }elseif ($this->idade >= 10) {
        return "Mirim";
      }
      return "Pré mirim";
   }
}
