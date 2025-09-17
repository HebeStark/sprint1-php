<?php
function sumarHasta($num,$paso = 2)  {
 
    for ($i=0; $i + $paso <= $num; $i+=$paso) { 
        $siguiente = $i + $paso;       
        echo $i . " + " . $paso .  " = " . $siguiente . "<br>";

    }       
}
sumarHasta(10,2);
sumarHasta(8,1);

?>