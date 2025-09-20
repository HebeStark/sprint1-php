<?php
class Empleado {
    public $nombre;
    public $sueldo;

    public function setValue(String $nombre, int $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    public function getValue() {
        echo " Empleado  $this->nombre\n";
        echo " Sueldo   $this->sueldo\n";
      
    }
    public function informacion($nombre, $sueldo) {
        
    }

    public function pagaImpuestos() {
        if ($this->sueldo > 6000) {
            return " Debe pagar impuestos";
        } else {
            return "No debe pa.gar impuestos";
        } 
    }
}
  $empleado1 = new Empleado;
  $empleado1 -> setValue("Miguel", 6500);
  //$empleado1 -> getValue();
  echo $empleado1 -> pagaImpuestos();  

?>