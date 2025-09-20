<?php
$X = 6;
$Y = 4;
$N = 5.55;
$M = 2.33;

echo ($X . "<br>" . $Y . "<br>" . $N . "<br>" . $M . "<br>");
//suma  
echo("La suma de " . $X  . ' + ' . $Y . " es: " . (6 + 4) . "<br>");
//resta 
echo("La resta de " . $X . ' - ' . $Y . " es: " . (6 - 4) ."<br>");
//multiplicacion
echo("La multiplicaciòn de " . $X . ' * ' . $Y . " es: " . (6 * 4) ."<br>");
//division
echo("La division de " . $X . ' / ' . $Y . " es: " . (6 / 4) ."<br>");
//modulo
echo("El modulo de " . $X . ' % ' . $Y . " es: " . (6 % 4) ."<br>");

echo ("La suma de " . $N . ' + ' . $M . " es: " . (5.55 + 2.33) . "<br>");
echo ("La resta de " . $N . ' - ' . $M . " es: " . (5.55 - 2.33) ."<br>");
echo ("La multiplicaciòn de " . $N . ' * ' . $M . " es: " . (5.55 * 2.33) ."<br>");
echo ("La division de " . $N . ' / ' . $M . " es: " . (5.55 / 2.33) ."<br>");
echo ("El modulo de " . $N . ' % ' . $M . " es: " . (5.55 % 2.33) ."<br>");
//El docle de cada variable
echo ("El doble de " . $X . " es: " . ($X * 2) ."<br>");
echo ("El doble de " . $Y . " es: " . ($Y * 2) ."<br>");
echo ("El doble de " . $N . " es: " . ($N * 2) ."<br>");
echo ("El doble de " . $M . " es: " . ($M * 2) ."<br>");
//La suma de todas las variables
echo ("La suma de todas las variables es: " . ($X + $Y + $N + $M) ."<br>");
//El producto de todas las variables
echo ("El producto de todas las variables es: " . ($X * $Y * $N * $M) ."<br>"); 

function operacion($num1,$num2,$op){
    switch ($op) {
        case 'suma':
            return $num1 + $num2;
            break;
        case 'resta':
            return $num1 - $num2;
            break;
        case 'multiplicacion':
            return $num1 * $num2;
            break;
        case 'division':
            return $num1 / $num2;
            break;
        default:
            return "Operación no válida";
            break;
    }    
}
echo operacion(10,5,'suma') . "<br>";
echo operacion(10,5,'resta') . "<br>";  
echo operacion(10,5,'multiplicacion') . "<br>";  
echo operacion(10,5,'division') . "<br>";
?>