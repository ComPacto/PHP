<?php
class Valor{
  private $x1;
  private $y1;
  private $x2;
  private $y2;

  function Valor(){

  }

  public function setX1(int $x1):void{
    $this->x1 =$x1;
  }

  public function getX1(): int{
    return $this->x1;
  }

  public function setY1(int $y1):void{
    $this->y1 =$y1;
  }

  public function getY1(): int{
    return $this->y1;
  }

  public function setX2(int $x2):void{
    $this->x2 =$x2;
  }

  public function getX2(): int{
    return $this->x2;
  }

  public function setY2(int $y2):void{
    $this->y2 =$y2;
  }

  public function getY2(): int{
    return $this->y2;
  }
  public function calcularParOrdenado(){
    return sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2));
  }
}
