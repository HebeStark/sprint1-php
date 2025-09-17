<?php
function grado($nota) {
    if ($nota >= 60) {
        return "El grado deberia ser: Primera División";
    } elseif ($nota >= 45 || $nota <= 59) {
        return " El grado deberia ser: Segunda División";
    } elseif ($nota >= 33 || $nota <= 44) {
        return " El grado deberia ser: Tercera División";
    } elseif ($nota > 33) {
        return "El estudiante reprobara";
    }     
}   
$nota = 65;
echo  grado($nota);
?>