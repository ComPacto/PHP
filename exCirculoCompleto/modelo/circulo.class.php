<?php
class Circulo{
  private $raio;

  public function __construct(){}
  public function __destruct(){}

  public function __get($atributo){
    return $this->$atributo;
  }

  public function __set($atributo, $valor){
    $this->$atributo = $valor;
  }

  public function calcularArea(){
    return pi() * pow($this->raio, 2);
  }

  public function calcularPerimetro(){
    return 2 * pi() * $this->raio;
  }

  public function __toString(){
    return nl2br("
                  Area: {$this->calcularArea()}
                  Perimetro: {$this->calcularPerimetro()}");
  }
}
