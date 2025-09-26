<?php
function sumar(int $hasta = 10, int $paso = 2) {
 
    for ($i=1; $i <= $hasta; $i += $paso) {       
        echo $i ."<br>";

    }       
}
sumar(10,1);
sumar(9,2);

?>