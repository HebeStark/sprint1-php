<?php

const PRECIO_BASE = 10;
const MINUTOS_INCLUIDOS = 3;
const PRECIO_MINUTO_ADICIONAL = 5;

function aPagar(int $minutos): int {
 if($minutos <= MINUTOS_INCLUIDOS){
  return PRECIO_BASE;
  } else {
   $minutos_adicionales = $minutos - MINUTOS_INCLUIDOS;
   $precio_total = PRECIO_BASE + ($minutos_adicionales * PRECIO_MINUTO_ADICIONAL);
   return $precio_total;
 }
   }   //llamada a la  funcion
 $persona1 = 3;
 $persona2 = 10;
 $minutos1 = aPagar($persona1);
 $minutos2 = aPagar($persona2);
 
 echo "El precio a pagar es de : " . $minutos1 ." centimos" . "<br>";
 echo "El precio a pagar es de : " . $minutos2 . " centimos" . "<br>";


?>