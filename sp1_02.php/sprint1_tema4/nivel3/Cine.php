<?php
declare(strict_types=1);
require_once 'Peliculas.php';

class Cine {
    private $nombre;
    private $poblacion;
    private $listaPeliculas = [];

    public function __construct($nombre, $poblacion, array $listaPeliculas = []) {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->listaPeliculas = $listaPeliculas;
    }

    public function getNombre(): string { return $this->nombre; }
    public function getPoblacion(): string { return $this->poblacion; }
    public function getPeliculas(): array { return $this->listaPeliculas; }

    public function __toString()
    {
        return "<h1>Cine: " . $this->nombre . " Población: " . $this->poblacion . "</h1><h2>Películas: " . $this->listaPeliculas . "</h2>"; ;
    }

    public function verPeliculas(): void {
        foreach ($this->listaPeliculas as $pelicula) {
            echo $pelicula->__toString() . "<br>";
        }
    }

    public function peliculaMasLarga(): ?Peliculas {
        if (empty($this->listaPeliculas)) return null;
        $masLarga = $this->listaPeliculas[0];
        foreach ($this->listaPeliculas as $pelicula) {
            if ($pelicula->getDuracion() > $masLarga->getDuracion()) {
                $masLarga = $pelicula;
            }
        }
        return $masLarga;
    }

    
}
?>
