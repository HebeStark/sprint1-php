<?php
declare(strict_types = 1);

class PockerDice {
    private static $caras_dado = ["AS","K","Q","J","7","8"];
    private $figura = "";
    private static $tirada = 0;


public function echar_dado(): String {
    $this -> figura = self::$caras_dado[random_int(0, 5)];
    self::$tirada++;
    return $this->figura; 
}
public function ver_figuras(): String {
    return $this->figura;
}

public static function ver_tirada(): int{
    return self::$tirada;

}
  
}


?>