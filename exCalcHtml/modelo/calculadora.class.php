<?php
class Calculadora{
  private $num1;
  private $num2;
  private $op;

  function Calculadora(){

  }

  public function setNum1(float $num1): void{
    $this->num1 = $num1;
  }

  public function getNum1(): float{
    return $this->num1;
  }

  public function setNum2(float $num2): void{
    $this->num2 = $num2;
  }

  public function getNum2(): float{
    return $this->num2;
  }

  public function setOp(int $op): void{
    $this->op = $op;
  }

  public function getOp(): int{
    return $this->op;
  }

  public function calcularNumeros(){
    switch ($this->op) {
      case 1:
        return $this->num1 + $this->num2;
        break;
      case 2:
        return $this->num1 - $this->num2;
        break;
      case 3:
        return $this->num1 * $this->num2;
        break;
      case 4:
        return $this->num1 / $this->num2;
        break;
      case 5:
        return pow($this->num1,$this->num2);
        break;
      case 6:
        return sqrt($this->num1);
        break;
      default:
        return 'Vish, algum erro ocorreu, tente novamente';
        break;
    }
  }
}
