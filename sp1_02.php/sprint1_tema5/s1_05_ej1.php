<?php
interface Animal{
    public function hablar();
}
    
class Perro implements Animal {
    public function hablar(){
        echo "Guau guau...\n";
    }
    }
class Gato implements Animal {
    public function hablar(){
        echo "Miau miau..../n";
    }
}

    $caniche = new Perro();
    echo $caniche ->hablar();    

    $siames = new Gato(); 
    echo $siames ->hablar();


?> 