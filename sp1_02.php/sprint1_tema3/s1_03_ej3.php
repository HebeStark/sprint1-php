<?php
function buscarCaracter(array $nombres, string $caracter): bool {
  foreach($nombres as $nombre){
    $letras = str_split($nombre);
        if(!in_array($caracter,$letras)) {
        return false;
        }
    }
  
        return true;
}
   

$nombres = ["Miguel", "Julian", "Laura"];
$caracter = "u";

if (buscarCaracter($nombres, $caracter)) {
    echo "El carácter '$caracter' está presente en todos los nombres.";
} else {
    echo "El carácter '$caracter' no está presente en todos los nombres.";
}
?>
