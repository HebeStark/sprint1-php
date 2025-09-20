<?php
function randomNumber($min, $max) {
    return rand($min, $max);
}
function isBetween($number, $true, $false) {
    if($number >= 50)
        return "Charlie me mordio el dedo!!, true";
    else
        return "Charlie me mordio el dedo!!, false";
}
$number = randomNumber(1, 100);
echo "El número es: " . $number . "<br>";   
echo isBetween($number, "true", "false");   

?>