<?php   
$colores = array("rojo", "verde", "azul", "amarillo", "naranja", "morado");
$acount = count($colores);
echo "Número total de elementos: " . $acount . "<br>";
unset($colores[3]);
var_dump($colores);
echo "<br>";
sort ($colores);
var_dump($colores);
$acount = count($colores);
echo "<br>Número total de elementos: " . $acount;
foreach ($colores as $color) {
    echo "<br>" . $color;
}   

?>