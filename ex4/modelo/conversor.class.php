<?php
class Conversor{
  private $real;
  private $dolar;
  private $euro;

  function Conversor(){

  }

  public function setReal(float $real):void{
    $this->real = $real;
  }

  public function getReal(): float{
    return $this->real;
  }

  public function setDolar(float $dolar):void{
    $this->dolar =$dolar;
  }

  public function getDolar():float{
    return $this->dolar;

  }

  public function setEuro(float $euro):void{
    $this->euro =$euro;
  }

  public function getEuro():float{
    return $this->euro;
  }

  public function converterParaDolar(){
    return $this->real / $this->dolar;
  }


  public function converterParaEuro(){
    return $this->real / $this->euro;
  }
}
