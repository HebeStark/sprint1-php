<?php
class Alumno{
    private string $nombre;
    private string $apellido;

    function __construct(string $nombre, string $apellido) {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;

    }

    public function __toString() {
        return "Nombre : " . $this -> nombre . "<br>
                Apellido : " . $this -> apellido;

    }
}
    $alumno1 = new Alumno("Manuel","Ramirez");

    echo $alumno1;
?>

