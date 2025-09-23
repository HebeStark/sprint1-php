<?php
abstract class Animal{
    abstract protected function habla();

    public function describe(){
        echo "Es un animal\n";
    }
}
    
class Perro extends Animal {
    public function habla(){
        echo "El perro comienza a ladrar, guau guau...\n";
    }
    }
class Gato extends Animal {
    public function habla(){
        echo "El gato comienza a maullar, miau miau..../n";
    }
}

    $caniche = new Perro();
    $caniche ->describe();
    $caniche ->habla();    

    $siames = new Gato();
    $siames ->describe();
    $siames ->habla();


?> 