<?php
declare(strict_types=1);
require_once 'Pelicula.php';
require_once 'Cine.php';

class Catalogo{
    private array $pelicula = [];
    private array $cines = [];

    public function __construct(){
    $this->pelicula[] = new Pelicula("Black Phone 2", "Scott Derrickson", 113);
    $this->pelicula[] = new Pelicula("Chainsaw Man - El Arco de Reze", "Tatsuya Nakazaki", 120);
    $this->pelicula[] = new Pelicula("Tom y Jerry: Aventura en el Tiempo", "Zhang Gang", 90);
    }


}
?>