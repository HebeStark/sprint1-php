<?php
class Empleado {
    public $nombre;
    public $sueldo;

    public function __construct(String $nombre, int $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }    
    public function pagaImpuestos() {
        if ($this->sueldo > 6000) {
            return "El empleado " . $this->nombre. " debe pagar impuestos";
        } else {
            return "El empleado " . $this->nombre . " no debe pagar impuestos";
        } 
    }
}
$empleado1 = new Empleado("Miguel", 6500);
echo $empleado1->pagaImpuestos();

?>