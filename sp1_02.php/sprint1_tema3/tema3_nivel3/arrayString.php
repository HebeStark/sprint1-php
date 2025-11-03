<?php
$nombres = ['Gael','Luna','Marco','Romina'];

/*$testArray = [1,2,3,4];
$result = array_filter($testArray, fn($element) => $element % 2 == 0);
print_r($result); // [2, 4]*/

$resultado = array_filter($nombres, fn($element) => $element % 2 == 0);
print_r($resultado); // [2, 4]


?>