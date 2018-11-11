<?php
class Mes{
  private $mes;

  function Mes(){

  }

  public function setMes(int $mes): void{
    $this->mes = $mes;
  }

  public function getMes(): int{
    return $this->mes;
  }

  public function validarMes(){
    if ($this->mes == 1) {
      return "O mês digitado corresponde a janeiro";
    }else if($this->mes == 2){
      return "O mês digitado corresponde a fevereiro";
    }else if($this->mes == 3){
      return "O mês digitado corresponde a março";
    }else if($this->mes == 4){
      return "O mês digitado corresponde a abril";
    }else if($this->mes == 5){
      return "O mês digitado corresponde a maio";
    }else if($this->mes == 6){
      return "O mês digitado corresponde a junho";
    }else if($this->mes == 7){
      return "O mês digitado corresponde a julho";
    }else if($this->mes == 8){
      return "O mês digitado corresponde a agosto";
    }else if($this->mes == 9){
      return "O mês digitado corresponde a setembro";
    }else if($this->mes == 10){
      return "O mês digitado corresponde a outubro";
    }else if($this->mes == 11){
      return "O mês digitado corresponde a novembro";
    }else if($this->mes == 12){
      return "O mês digitado corresponde a dezembro";
    }
    return "Mês digitado inválido";
  }
}
