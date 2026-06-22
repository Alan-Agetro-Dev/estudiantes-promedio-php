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

    // Método para calcular promedio
    public function calcularPromedio() {
        return array_sum($this->calificaciones) / count($this->calificaciones);
    }
}
?>