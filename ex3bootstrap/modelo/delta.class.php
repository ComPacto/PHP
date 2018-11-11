<?php
class Delta{
  private $a;
  private $b;
  private $c;

  function Delta(){

  }

  public function setA(float $a):void{
    $this->a =$a;
  }

  public function getA(): float{
    return $this->a;
  }

  public function setB(float $b):void{
    $this->b = $b;
  }

  public function getB(): float{
    return $this->b;
  }

  public function setC(float $c):void{
    $this->c =$c;
  }

  public function getC(): float{
    return $this->c;
  }

  public function calcularDelta(){
    return (pow($this->b, 2) - (4 * $this->a * $this->c));
  }

  public function calcularX1(){
    return (- $this->b + sqrt($this->calcularDelta())) / (2 * $this->a);
  }

  public function calcularX2(){
    return (- $this->b - sqrt($this->calcularDelta())) / (2 * $this->a);
  }
}
