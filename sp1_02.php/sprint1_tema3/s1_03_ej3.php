<?php
function buscarCaracter(array $nombres, string $caracter): bool {
    foreach ($nombres as $nombre) {//recorrere el array buscando el carecter que le indique con strpos
        if (strpos($nombre, $caracter) === false) {
            return false; //si una palabra no lo tiene me dovolvera false
        }
    }
    return true; //si todas lo tienen me dovolvera true
}

$nombres = ["Anna", "Juan", "Julia", "María"];
$caracter = "a";

if (buscarCaracter($nombres, $caracter)) {
    echo "El carácter '$caracter' está presente en todos los nombres.";
} else {
    echo "El carácter '$caracter' no está presente en todos los nombres.";
}
?>
