<?php
class Valor{
  private $valor1;
  private $valor2;
  private $valor3;
  private $op;

  function valor(){

  }

  public function setValor1(int $valor1): void{
    $this->valor1 =$valor1;
  }

  public function getValor1(): int{
    return $this->valor1;
  }

  public function setValor2(int $valor2): void{
    $this->valor2 =$valor2;
  }

  public function getValor2(): int{
    return $this->valor2;
  }

  public function setValor3(int $valor3): void{
    $this->valor3 =$valor3;
  }

  public function getValor3(): int{
    return $this->valor3;
  }

  public function setOp(int $op):void{
    $this->op =$op;
  }

  public function getOp():int{
    return $this->op;
  }

  public function ordenarValores(){
    switch ($this->op) {
      case 1:
        if ($this->valor1 > $this->valor2 && $this->valor2 > $this->numero3){
    			return "A ordem dos número são: ".$this->valor3.", ".$this->numero2.", ".$this->numero1;
        }else if ($this->valor1 > $this->valor3 && $this->valor3 > $this->numero2){
            return "A ordem dos número são: ".$this->Valor3.", ".$this->numero1.", ".$this->numero2;
          }else if ($this->valor2 > $this->valor1 && $this->valor1 > $this->numero3){
          			return "A ordem dos número são: ".$this->valor3.", ".$this->numero2.", ".$this->numero1;
              }if ($this->valor2 > $this->valor3 && $this->valor3 > $this->numero1){
            			return "A ordem dos número são: ".$this->numero1.", ".$this->numero3.", ".$this->numero2;
                }if ($this->valor3 > $this->valor1 && $this->valor1 > $this->numero2){
              			return "A ordem dos número são: ".$this->numero2.", ".$this->numero1.", ".$this->numero3;
                  }if ($this->valor3 > $this->valor2 && $this->valor2 > $this->numero1){
                		return "A ordem dos número são: ".$this->numero1.", ".$this->numero2.", ".$this->numero3;
                  }
        break;
        case 2:

        break;
      default:
        return "Número digitado é inválido:";
        break;
    }
  }
}
