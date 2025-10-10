<?php
namespace Hebe\Sprint1tema8;

class SensorVelocidad{
    private $velocidad;

    public function __construct($velocidad){
        $this->velocidad = $velocidad;
    } 
   public function velocidad() {
        if ($this->velocidad < 30) {
            return "Muy lento";
        } elseif ($this->velocidad >= 30 && $this->velocidad <= 60) {
            return "Velocidad adecuada";
        } elseif ($this->velocidad >= 61 && $this->velocidad <= 80) {
            return "Exceso leve";
        } elseif ($this->velocidad >= 81 && $this->velocidad <= 100) {
            return "Exceso moderado";
        } else {
            return "Exceso grave";
        }
    }
}
?>