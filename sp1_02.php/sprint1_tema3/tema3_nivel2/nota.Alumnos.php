<?php
$alumnos = [
    "Lucia" => [7, 8, 6, 7, 7],
    "Miguel" => [5, 8, 4, 7, 6],
    "Sofía" => [9, 7, 7, 6, 8],
    "Javier" => [6, 7, 6, 7, 8],
    "Marta" => [8, 9, 8, 6, 7]
];

function calcular_medias(array $alumnos){
    $totalClase = 0;          
    $cantidadClase = 0;       
    $mediasAlumnos = [];      

    foreach ($alumnos as $nombre => $notas) {
        foreach ($notas as $nota) {
            if ($nota < 0 || $nota > 10) {
                return "Las notas deben ser entre 0 y 10";
            }
        }

        $sumaAlumno = array_sum($notas);
        $cantidadAlumno = count($notas);
        $mediaAlumno = $sumaAlumno / $cantidadAlumno;

        $mediasAlumnos[$nombre] = $mediaAlumno;

        $totalClase += $sumaAlumno;
        $cantidadClase += $cantidadAlumno;
    }

    $mediaClase = $totalClase / $cantidadClase;

    return [
        "mediasAlumnos" => $mediasAlumnos,
        "mediaClase" => $mediaClase
    ];
}

$resultados = calcular_medias($alumnos);

foreach ($resultados["mediasAlumnos"] as $nombre => $media) {
    echo $nombre . ": la nota media es: " . $media . "\n";
}
echo "La nota media de la clase es: " . $resultados["mediaClase"];

?>
                          
                          