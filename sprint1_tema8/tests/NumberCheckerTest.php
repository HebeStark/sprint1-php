<?php
use Hebe\Sprint1tema8\NumberChecker;
use PHPUnit\Framework\TestCase;

require __DIR__ .'/../vendor/autoload.php';


// Incluimos la clase que queremos probar
require_once __DIR__ . '/../src/NumberChecker.php';

class NumberCheckerTest extends TestCase{
    public function test_es_par(){
       
        $comprobar = new NumberChecker(4);
        $this->assertTrue($comprobar->isEven());

        $comprobar = new NumberChecker(5);
        $this->assertFalse($comprobar->isEven());
    }

    public function test_es_positivo(){
       
        $comprobar = new NumberChecker(6);
        $this->assertTrue($comprobar->isPositive());

        $comprobar = new NumberChecker(-2);
        $this->assertFalse($comprobar->isPositive());
    }
}
?>

?>