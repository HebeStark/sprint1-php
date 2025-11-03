<?php
declare(strict_types=1);

class Pelicula {
    private $titulo;
    private $director;
    private $duracion; 

    public function __construct($titulo, $director, $duracion) {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->duracion = $duracion;
    }

    public function getTitulo(): string { 
        return $this->titulo; 
    }
    public function getDirector(): string { 
        return $this->director;
     }
    public function getDuracion(): float { 
        return $this->duracion; 
    }

    public function __toString(): string {
        return "<h2>Título: " . $this->titulo . "Director: " . $this->director . "Duración: " . $this->duracion . " min.\n </h2>";
    }
}
?>
