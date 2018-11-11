<?php
class Padronizacao{
  public static function padronizarMaiMin($v){
    return ucwords(strtolower($v));
  }

  public static function padronizarMin($v){
    return strtolower($v);
  }

  public static function padronizarMaiPais($v){
    return srttoupper($v);
  }

  public static function padronizarMaiEstado($v){
    return srttoupper($v);
  }

  public static function padronizarMaiMinCidade($v){
    return ucwords(strtolower($v));
  }

  public static function padronizarMinComplemento($v){
    return strtolower($v);
  }

  public static function padronizarMaiMinBairro($v){
    return ucwords(strtolower($v));
  }

  public static function padronizarMaiMinRua($v){
    return ucwords(strtolower($v));
  }
}
