<?php
$saludo = "Hello World";
echo $saludo;

$saludo_mayusculas = strtoupper($saludo); // Convierte a mayúsculas strtoupper()
echo "<br>" . $saludo_mayusculas ;

//imprime la longitud de la cadena strlen()
echo "<br>" . "El saludo tiene " . strlen($saludo) . " caracteres." ."<br>";  

strrev($saludo); // Invierte una cadena strrev()
echo strrev($saludo) . "<br>";

$curso = "Este es el curso de PHP";

echo ($curso . ": " . $saludo . "!");
?>