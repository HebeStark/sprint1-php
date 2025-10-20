<?php
function buscarCaracter(array $nombres, string $caracter): bool {
  foreach($nombres as $nombre){   
        if(!str_contains($nombre,$caracter)) {
            return false;  
        }
    }
            return true;
                 
}   

$nombres = ["Miguel", "Julian", "Laura"];
$caracter = "u";

if(buscarCaracter($nombres,$caracter) == true){
    echo "Todos los nombres contienen la letra " . $caracter ;
}else {
    echo "No todos los nombres contienen la letra: " . $caracter;
}
 
?>