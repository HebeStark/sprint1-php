<?php
/*Necesitamos crear un tipo de datos que represente a un animal. 
Los animales tienen un nombre y "hablan". Sin embargo, debemos tener en cuenta que no es lo mismo el 
sonido de la “habla” de un perro, que el de un gato, por ejemplo. Por tanto, necesitamos crear otros 
tipos de datos que nos ayuden a programar estos comportamientos entre diferentes animales.
Crea al menos 2 animales.*/
abstract class Animal{
    abstract protected function habla();

    public function describe(){
        echo "Es un animal\n";
    }
}
    
class Perro extends Animal {
    public function habla(){
        echo "El perro comienza a ladrar: guau guau...\n";
    }
    }
    $caniche = new Perro();
    $caniche ->describe();
    $caniche ->habla();    

?> 