<?php
class Padronizacao{
  public static function padronizarMaiMin($v){
    return ucwords(strtolower($v));
  }

  public static function padronizarMin($v){
    return strtolower($v);
  }

  public static function padronizarMai($v){
    return strtoupper($v);
  }

  public static function juntarData($d,$m,$a){
    $array = array($d, $m, $a);
    $dataNasc = implode("/",$array);
    return $dataNasc;
  }

  public static function juntarNome($nome,$sobrenome){
    $array = array($nome, $sobrenome);
    $nomeCompleto = implode(" ",$array);
    return $nomeCompleto;
  }
}