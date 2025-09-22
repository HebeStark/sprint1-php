<?php
class Shape{
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }  
}
class Triangulo extends Shape{
    public function calcularAreaTri(){
        return ($this->alto * $this->ancho) / 2;      
    }
}
class Rectangulo extends Shape{
    public function calcularAreaRec(){
        return $this->alto * $this->ancho;        
    }
}

$triangulo1 = new Triangulo(6,4);
$rectangulo1 = new Rectangulo(9,5);
echo "El área del triángulo es " . $triangulo1->calcularAreaTri() . "<br>";
echo "El área del rectángulo es " . $rectangulo1->calcularAreaRec() . "<br>";
?>