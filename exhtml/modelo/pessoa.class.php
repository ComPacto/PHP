<?php
class Pessoa{
  private $nome;
  private $idade;

  public function getNome(): string{
    return $this->nome;
  }

  public function setNome(string $nome): void{
    $this->nome = $nome;
  }

  public function getIdade(): int{
    return $this->idade;
  }

  public function setIdade(int $idade): void{
    $this->idade = $idade;
  }

  public function calcularIdade(): int{
    return $this->idade * 12;
  }
}//fecha classe
