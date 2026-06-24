<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $calificaciones;

    public function __construct($nombre, $edad, $calificaciones) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->calificaciones = $calificaciones;
    }

    public function calcularPromedio() {
        return array_sum($this->calificaciones) / count($this->calificaciones);
    }

    // Nuevo método
    public function mostrarInfo() {
        echo "<h3>Estudiante</h3>";
        echo "Nombre: $this->nombre <br>";
        echo "Edad: $this->edad <br>";
        echo "Promedio: " . $this->calcularPromedio() . "<br><br>";
    }
}
?>