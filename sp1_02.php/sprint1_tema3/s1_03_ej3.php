<?php
function tieneElCaracter($nombres, $caracter) {
    // Verifica si el carácter está en la cadena
    return strpos($nombres, $caracter) !== false;
}

$nombres = "Anna, Juan, Julia, María";
$caracter = "a";
if (tieneElCaracter($nombres, $caracter)) {
    echo "El carácter '$caracter' está presente en todos los nombres.";
} else {
    echo "El carácter '$caracter' no está presente en todos los nombres.";
}

?>