<?php
declare(strict_types=1);
require_once 'Cine.php';
require_once 'Peliculas.php';

// Películas Cine 1
$peliculas1 = [
    new Pelicula("Black Phone 2", "Scott Derrickson", 113),
    new Pelicula("Chainsaw Man - El Arco de Reze", "Tatsuya Nakazaki", 120),
    new Pelicula("Tom y Jerry: Aventura en el Tiempo", "Zhang Gang", 90)
];

// Películas Cine 2
$peliculas2 = [
    new Pelicula("Una Batalla Tras Otra", "Paul Thomas Anderson", 97),
    new Pelicula("Black Phone 2", "Scott Derrickson", 113),
    new Pelicula("Casa de Brujas", "Luca Guadagnino", 99)
];

// Crear cines
$cine1 = new Cine("Cinesa Diagonal", "Barcelona", $peliculas1);
$cine2 = new Cine("Mooby Glories: Mooby Cines", "Barcelona", $peliculas2);

$cines = [$cine1, $cine2];

function buscarPorDirector(string $director): array {
    global $cines;
    $resultados = [];
    foreach ($cines as $cine) {
        foreach ($cine->getPeliculas() as $pelicula) {
            if (strcasecmp($pelicula->getDirector(), $director) === 0) {
                if (!in_array($pelicula->getTitulo(), $resultados)) {
                    $resultados[] = $pelicula->getTitulo();
                }
            }
        }
    }
    return $resultados;
}

echo "La pelicula mas larga en cinesa diagonal: " . $cine1->peliculaMasLarga() . "\n";
echo "La pelicula mas larga en mooby glories: " . $cine2->peliculaMasLarga() . "\n";
echo "Las peliculas disponibles en cinesa: \n";
echo $cine1->verPeliculas() . "\n";
?>
