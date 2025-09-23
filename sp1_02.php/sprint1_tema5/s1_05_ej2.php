<?php
abstract class Shape{
    protected $alto;
    protected $ancho;

    public function __construct(int $alto, int $ancho){
        $this->alto = $alto;
        $this->ancho = $ancho;
    }
    abstract public function calcularArea();
      
}
class Triangulo extends Shape{
    public function calcularArea(){
         return ($this->alto * $this->ancho) / 2; 
        
    }
}
class Rectangulo extends Shape{
    public function calcularArea(){
        return $this->alto * $this->ancho;
        
    }
}
$triangulo1 = new Triangulo(7,4);
$rectangulo1 = new Rectangulo(5,9);
echo "El área del triángulo es: " . $triangulo1->calcularArea() . "<br>";
echo "El área del rectángulo es: " . $rectangulo1->calcularArea() . "<br>";

?>