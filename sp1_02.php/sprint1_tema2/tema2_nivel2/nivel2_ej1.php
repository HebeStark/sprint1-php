<?php
function aPagar($minutos){
 define("MINUTOS", 3);
 define("PRECIO", 10);
 $preMinAdi = 0.5; 
 $total = (PRECIO * $minutos) / MINUTOS; 
     if($minutos == MINUTOS) {        
       return $total;
     }else if($minutos > MINUTOS) {
         return $apagar = $total + ($minutos * $preMinAdi);             
    } 
    return $total;
}
    //llamada a la  funcion
 $persona1 = 3;
 $persona2 = 10;
 $minutos1 = aPagar($persona1);
 $minutos2 = aPagar($persona2);
 
 echo "El precio a pagar es de : " . $minutos1 ." centimos" . "<br>";
 echo "El precio a pagar es de : " . $minutos2 . " centimos" . "<br>";


?>