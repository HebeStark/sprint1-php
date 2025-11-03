<?php
declare(strict_types=1);

$enteros = [12,22,36,44];
$enteros2 = [3,6,9];

$resultados = array_map(fn($element)=>$element * 3,$enteros);//utilizacion basica

//como funcion
$resultados1 = array_map(function($element) {
    return $element * 3;
}, $enteros2);

foreach($resultados as $resultado){
    echo $resultado . ", \n" ;
}

foreach($resultados1 as $resultado){
    echo $resultado . ", ";
}


?>