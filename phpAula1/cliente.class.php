<?php
class Cliente{

  private $nome;
  private $sexo;
  private $idade;

  public function getNome(): string{
    return $this->nome;
  }

  public function setNome(string $nome): void{
    $this->nome = $nome;
  }

  public function getSexo(): string{
    return $this->sexo;
  }

  public function setSexo(string $sexo): void{
    $this->sexo = $sexo;
  }

  public function getIdade(): int{
    return $this->idade;
  }

  public function setIdade(int $idade): void{
    $this->idade = $idade;
  }

  public function verificarSexo(): string{
    if ($this->sexo == "Masculino"){
      return "Você é homem!";
    }
    return "Você é mulher!";
  }

  public function verificarIdade(): string{
    if($this->idade >= 18){
      return "Maior de idade!";
    }
    return "Menor de idade!";
  }

  public function calcularIdade(): int{
    return $this->idade * 12;
  }
}//fecha classe
?>
