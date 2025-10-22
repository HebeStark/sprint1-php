<?PHP

function sumarPuntuaciones(int $puntuacion1, int $puntuacion2, int $puntuacion3): int {
    $suma = $puntuacion1 + $puntuacion2 + $puntuacion3;
    return $suma;
}

function calcularMedia(int $suma): int {
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
$puntuacion3 = 500;
$suma = sumarPuntuaciones($puntuacion1, $puntuacion2, $puntuacion3) . "\n";

echo "Tu puntuacion total es: " . $suma;
echo "Tu puntuacion media es: " . calcularMedia($suma) . "\n";
echo  "Estas en el nivel: " . clasificarJugador($suma);

?>