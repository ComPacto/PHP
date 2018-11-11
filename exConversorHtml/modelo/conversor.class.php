<?php
class Conversor{
  private $ano;
  private $op;

  function Conversor(){

  }

  public function setAno(int $ano): void{
    $this->ano = $ano;
  }

  public function getAno(): int{
    return $this->ano;
  }

  public function setOp(int $op): void{
    $this->op = $op;
  }

  public function getOp(): int{
    return $this->op;
  }

  public function calcularIdadeMeses(){
    switch($this->op) {
      case 1:
        return "O seu dia em meses é: ".$this->ano * 12;
        break;
      case 2:
        return "O seu dia em semanas é: ".$this->ano * 52;
        break;
      case 3;
        return "O seu dia em dias é: ".$this->ano * 365;
        break;
      case 4:
        return "O seu dia em horas é: ".$this->ano * 8760;
        break;
      case 5:
        return "O seu dia em minutos é: ".$this->ano * 525600;
        break;
      case 6:
        return "O seu dia em segundos é: ".$this->ano * 31536000;
        break;
      default:
        return 'Opção inválida, digite novamente';
    }
  }
}
