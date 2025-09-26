<?php
function calcularGrado( int $nota): String {
    if ($nota >= 60) {
        return "El grado deberia ser: Primera División";
    } elseif ($nota >= 45) {
        return " El grado deberia ser: Segunda División";
    } elseif ($nota >= 33) {
        return " El grado deberia ser: Tercera División";
    } else {
        return "El estudiante reprobara";
    }     
}   
echo calcularGrado(60) . "<br>";
echo calcularGrado(75) . "<br>";
?>