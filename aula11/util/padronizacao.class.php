<?php
class Padronizacao{

  public static function converterMaiMin($v){
    return ucwords(strtolower($v));
  }

  public static function converterMin($v){
    return strtolower($v);
  }
}
