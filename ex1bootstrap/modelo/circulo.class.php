<?php
class Circulo{
  private $raio;

  function Circulo(){

  }

  public function setRaio(int $raio): void{
    $this->raio = $raio;
  }

  public function getRaio(): int{
    return $this->raio;
  }

  public function calcularArea(){
    return pi() * pow($this->raio, 2);
  }

  public function calcularPerimetro(){
    return 2 * pi() * $this->raio;
  }
}
