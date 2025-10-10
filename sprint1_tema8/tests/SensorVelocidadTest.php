<?php
use Hebe\Sprint1tema8\SensorVelocidad;
use PHPUnit\Framework\TestCase;

require_once __DIR__ .'/../src/SensorVelocidad.php';

class SensorVelocidadTest extends TestCase{

    public function testMuyLento(){
        $comprobar = new SensorVelocidad(20);
        $this->assertEquals("Muy lento",$comprobar->velocidad());
    }
    public function testVelocidadAdecuada(){
        $comprobar = new SensorVelocidad(50);
        $this->assertEquals("Velocidad adecuada",$comprobar->velocidad());
    }
    public function testExcesoLeve(){
        $comprobar = new SensorVelocidad(70);
        $this->assertEquals("Exceso leve",$comprobar->velocidad());
    }
    public function testExcesoModerado(){
        $comprobar = new SensorVelocidad(90);
        $this->assertEquals("Exceso moderado",$comprobar->velocidad());
    }
    public function testExcesoGrave(){
        $comprobar = new SensorVelocidad(120);
        $this->assertEquals("Exceso grave",$comprobar->velocidad());

    }
    
}

?>