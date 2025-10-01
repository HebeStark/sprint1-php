<?php
function buscarCaracter(array $nombres, string $caracter) {
  foreach($nombres as $nombre){   
        if(!str_contains($nombre,$caracter)) {
            return "false";  
        }else {
            return "true";
        }          
}   
}
$nombres = ["Miguel", "Julian", "Laura"];
$caracter = "u";

echo buscarCaracter($nombres,$caracter);
?>