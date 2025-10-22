<?PHP

function sumarPuntuaciones(int $puntuacion1, int $puntuacion2, int $puntuacion3): int {
    $suma = $puntuacion1 + $puntuacion2 + $puntuacion3;
    return $suma;
}

function calcularMedia(int $suma): float {
 $media = $suma / 3;
    return $media;
 
}

function clasificarJugador(int $suma): String {
    
    if ($suma < 4000) {
        return "Principiante";
    } elseif ($suma < 8000) {
        return "Intermedio";
    } else {
        return "Profesional";
    }
}

$puntuacion1 = 1000;
$puntuacion2 = 3000;     
$puntuacion3 = 600;

if (($puntuacion1 < 0 || $puntuacion1 > 9999) || ($puntuacion2 < 0 || $puntuacion2 > 9999) 
    || ($puntuacion3 < 0 || $puntuacion3 > 9999)) {
    echo "Error: Las puntuaciones deben estar entre 0 y 9999.\n";
} else {
  
$suma = sumarPuntuaciones($puntuacion1, $puntuacion2, $puntuacion3);

echo "Tu puntuacion total es: " . $suma ."\n";
echo "Tu puntuacion media es: " . calcularMedia($suma) . "\n";
echo  "Estas en el nivel: " . clasificarJugador($suma);
}
?>